<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\AllContentTranslite;
use App\Models\ContentNew;
use Illuminate\Support\Str;
use App\Base\Controller\BaseController;

class ContetController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $lang = 'id';
            $data = AllContentTranslite::with(['ContentContent','ContentContent.Categorys','ContentContent.Categorys.transLite'])
            ->where('lang', $lang)
            ->whereHas('ContentContent.Categorys.transLite',function ($query) use ($lang){
                $query->where('lang',$lang);
            })->paginate(10);
            return $this->makeView('backend.pages.master.content.index', compact('data'));
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $lang = 'id';
            $categorys = $this->LoadCategoryContets($lang);
            return $this->makeView('backend.pages.master.content.create', compact('categorys'));
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
            dd($th);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
