<?php

namespace App\Http\Controllers\backend;

use App\Base\Controller\BaseController;
use App\Http\Controllers\Controller;
use App\Models\AllCategoryTranslite;
use App\Models\AllContentTranslite;
use App\Models\CategoryProgram;
use App\Models\ProgramsNew;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProgramController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $lang = 'id';
            $data = AllContentTranslite::with(['ContentPrograms.Categorys.transLite'])
            ->whereHas('ContentPrograms.Categorys.transLite', function ($query) use ($lang) {
                $query->where('lang', $lang);
            })
            ->where('lang', $lang)
            ->paginate(10);
            return $this->makeView('backend.pages.master.program.index',compact('data'));
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','gagal melakukan aksi');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $lang      = 'id';
            $categorys = $this->LoadCategoryProrgams($lang);
            return $this->makeView('backend.pages.master.program.create',compact('categorys'));
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','gagal melakukan aksi');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            if($request->images){
                $imagesName = [];
                foreach ( $request->file('images') as $file){
                    $path = public_path('assets/images/programs/');
                    $name = time().'.'.$file->getClientOriginalExtension();
                    $file->move($path,$name);
                    $imagesName[]= $name;
                }
                $request['images'] = json_encode($imagesName);
                $request['path']   = $path;
                $request['author'] = '1';
            }
            $content = new ProgramsNew ([
                'id_category'   => $request->id_category,
                'author'        => $request->input('author'),
                'path'          => $request->input('path'),
                'images'        => $request->input('images')
            ]);
            $content->save();
            $contentID = new AllContentTranslite([
                'id_programs' => $content->id,
                'lang'    => 'id',
                'title'   => $request->title,
                'slug'    => Str::slug($request->title),
                'body'    => $request->body,
            ]);
            $contentEN = new AllContentTranslite([
                'id_programs' => $content->id,
                'lang'    => 'en',
                'title'   => $request->title_translite,
                'slug'    => Str::slug($request->title_translite),
                'body'    => $request->body_translite,
            ]);
            $contentID->save();
            $contentEN->save();
            DB::commit();
            return redirect()->route('programs.index')->with('success','Success Saving Data');
        } catch (\Throwable $th) {
            dd($th);
            DB::rollBack();
            return redirect()->back()->with('error','Error Action');
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
        //
        try {
            $lang = 'id';
            $data       = ProgramsNew::with('transLite')->findOrFail($id);
            $categorys  = AllCategoryTranslite::with('CategoryPrograms')
                        ->whereHas('CategoryPrograms.transLite', function ($query) use ($lang) {
                        })->where('lang',$lang)
                        ->get();
            $contentID  = $data->transLite->firstWhere('lang','id');
            $contentEN  = $data->transLite->firstWhere('lang','en');
            return $this->makeView('backend.pages.master.program.edit',compact('contentID','contentEN','categorys','data'));
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','Error Action');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        dump($request->all());
        try {
            $content    = ProgramsNew::with('transLite')->findOrFail($id);
            $newImages = [];
            if($request->images){
                $oldImages = json_decode($content->images, true);
                if ($oldImages) {
                    foreach ($oldImages as $oldImage) {
                        $filePath = public_path('assets/images/programs/' . $oldImage);
                        if (file_exists($filePath)) {
                            unlink($filePath); // Hapus file
                        }
                    }
                }
                foreach ($request->file('images') as $file){
                    $path = public_path('assets/images/programs/');
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
            $contentID  = AllContentTranslite::where('lang','id')->where('id_programs',$id)->first();
            $contentEN  = AllContentTranslite::where('lang','en')->where('id_programs',$id)->first();
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
            return redirect()->route('programs.index')->with('success','Berhasil Menyimpan Data');
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            return redirect()->route('content.index')->with('error','Gagal Menyimpan Data');
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::beginTransaction();
        try {
           $data =ProgramsNew::with('transLite')->findOrfail($id);
           if($data->transLite){
                $data->transLite()->delete();
           }
           $data->delete();
           return redirect()->route('programs.index')->with('success','Success Delete Data');
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            return redirect()->back()->with('error','Error Action');
        }
    }
}
