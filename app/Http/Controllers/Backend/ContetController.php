<?php

namespace App\Http\Controllers\Backend;

use App\Base\Controller\BaseController;
use App\Http\Controllers\Controller;
use App\Models\AllCategoryTranslite;
use App\Models\AllContentTranslite;
use App\Models\CategoryContent;
use App\Models\ContentNew;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\TryCatch;

class ContetController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::user()->can('content-view')){
            abort(403);
        }
        try {
            $lang = 'id';
            $data = AllContentTranslite::with(['ContentContent','ContentContent.Categorys','ContentContent.Categorys.transLite'])
            ->where('lang', $lang)
            ->whereHas('ContentContent.Categorys.transLite',function ($query) use ($lang){
                $query->where('lang',$lang);
            })->paginate(10);
            return $this->makeView('backend.pages.master.content.index', compact('data'));
        } catch (\Throwable $th) {
            \Log::error($th);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!Auth::user()->can('content-create')){
            abort(403);
        }
        try {
            $lang = 'id';
            $categorys = $this->LoadCategoryContets($lang);
            return $this->makeView('backend.pages.master.content.create', compact('categorys'));
        } catch (\Throwable $th) {
            \Log::error($th);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if(!Auth::user()->can('content-create')){
            abort(403);
        }
        DB::beginTransaction();
        try {
            if ($request->images) {
                $image_content = [];
                foreach ($request->file('images') as $file) {
                    $path     = public_path('assets/images/content/');
                    $filename = time() . '.' . $file->getClientOriginalExtension();
                    $file->move($path, $filename);
                    $image_content[] = $filename;
                }
                $request['images'] = json_encode($image_content);
            }
            $request['author'] = '1';
            $content = new ContentNew($request->input());
            $content->save();
            $lang_id = new AllContentTranslite([
                'id_content' => $content->id,
                'lang'       => 'id',
                'title'      => $request->title,
                'slug'       => Str::slug($request->title).'-'.$content->id,
                'body'       => $request->body,
            ]);
            $lang_id->save();
            $lang_en = new AllContentTranslite([
                'id_content' => $content->id,
                'lang'       => 'en',
                'title'      => $request->title_translite,
                'slug'       => Str::slug($request->title_translite).'-'.$content->id,
                'body'       => $request->body_translite,
            ]);
            $lang_en->save();
            DB::commit();
            return redirect()->route('content.index')->with('success','Berhasil Menyimpan Data');
        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error($th);
            return redirect()->route('content.index')->with('error','Gagal Menyimpan Data');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!Auth::user()->can('content-edit')){
            abort(403);
        }
        try {
            $lang = 'id';
            $categorys = AllCategoryTranslite::with(['CategoryContent'])->where('lang',$lang)->get();
            $data      = ContentNew::with('transLite')->findOrFail($id);
            $contentID = $data->transLite->firstWhere('lang','id') ?? '';
            $contentEN = $data->transLite->firstWhere('lang','en') ?? '';
             return $this->makeView('backend.pages.master.content.edit',compact('categorys','contentID','contentEN','data'));
        } catch (\Throwable $th) {
            //throw $th;
            \Log::error($th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(!Auth::user()->can('content-edit')){
            abort(403);
        }
        DB::beginTransaction();
        try {
            $content    = ContentNew::with('transLite')->findOrFail($id);
            $newImages = [];
            if($request->images){
                $oldImages = json_decode($content->images, true);
                if ($oldImages) {
                    foreach ($oldImages as $oldImage) {
                        $filePath = public_path('assets/images/content/' . $oldImage);
                        if (file_exists($filePath)) {
                            unlink($filePath); // Hapus file
                        }
                    }
                }
                foreach ($request->file('images') as $file){
                    $path = public_path('assets/images/content/');
                    $filename = time() . '.' . $file->getClientOriginalExtension();
                    $file->move($path, $filename);
                    $newImages[] = $filename;
                }
                $request['images'] = $newImages;
            }else{
                $request['images'] = $content->images;
            }
            $content->update([
                'id_category' => $request->id_category,
                'images'      => $request->input('images'),
            ]);
            $contentID  = AllContentTranslite::where('lang','id')->where('id_content',$id)->first();
            $contentEN  = AllContentTranslite::where('lang','en')->where('id_content',$id)->first();
            $contentID->update([
                'title' => $request->title,
                'slug'  => Str::slug($request->title).$content->id,
                'body'  => $request->body,
            ]);
            $contentEN->update([
                'title' => $request->title_translite,
                'slug'  => Str::slug($request->title_translite).$content->id,
                'body'  =>  $request->body_translite,
            ]);
            DB::commit();

            return redirect()->route('content.index')->with('success','Berhasil Menyimpan Data');
        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error($th);
            return redirect()->route('content.index')->with('error','Gagal Menyimpan Data');
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!Auth::user()->can('content-delete')){
            abort(403);
        }
        try {
            $content = ContentNew::with('transLite')->findOrFail($id);
            if($content->transLite){
                $content->transLite()->delete();
            }
            $content->delete();
            return redirect()->route('content.index')->with('success','Success Delete Data');
        } catch (\Throwable $th) {
            \Log::error($th);
            return redirect()->back()->with('error','Error Action');
        }
    }
}
