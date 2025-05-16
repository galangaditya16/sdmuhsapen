<?php

namespace App\Http\Controllers\backend;

use App\Base\Controller\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryProgramRequest;
use App\Models\AllCategoryTranslite;
use App\Models\CategoryProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryProgramController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::user()->can('kategori programs-view')){
            abort(403);
        }
        try {
            $lang = 'id';
            $data = AllCategoryTranslite::whereHas('CategoryPrograms')->where('lang',$lang)->paginate(10);
            return $this->makeView('backend.pages.management.category.program.index',compact('data'));
         } catch (\Throwable $th) {
            \Log::error($th);
             return redirect()->back()->with('error','galga melakukan aksi');
         }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!Auth::user()->can('kategori programs-create')){
            abort(403);
        }
        //
        return $this->makeView('backend.pages.management.category.program.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryProgramRequest $request)
    {
        if(!Auth::user()->can('kategori programs-create')){
            abort(403);
        }
        DB::beginTransaction();
        try {
            if($request->hasFile('images')){
                $path = public_path('assets/images/category/program');
                $nameImages = time().'.'.$request->images->extension();
                $request->images->move($path,$nameImages);
                $request['images'] = $nameImages;
            }
            $request['slug'] = Str::slug($request->title);
            $category = New CategoryProgram($request->input());
            $category->save();
            $lang_id = new AllCategoryTranslite([
                'id_category_programs'    => $category->id,
                'lang'                => 'id',
                'title'               => $request->title,
                'slug'                => Str::slug($request->title).'-'.$category->id,
            ]);
            $lang_id->save();
            $lang_en = new AllCategoryTranslite([
                'id_category_programs'    => $category->id,
                'lang'                => 'en',
                'title'               => $request->title_translite,
                'slug'                => Str::slug($request->title_translite).'-'.$category->id,
            ]);
            $lang_en->save();
            DB::commit();
            return redirect()->route('category-programs.index')->with('success','Success Saving Data');
        } catch (\Throwable $th) {
            //throw $th;
            \Log::error($th);
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
        if(!Auth::user()->can('kategori programs-edit')){
            abort(403);
        }
        //
        try {

            $data = CategoryProgram::with('transLite')->findOrFail($id);
            $contentID = $data->transLite->firstWhere('lang','id') ?? '';
            $contentEN = $data->transLite->firstWhere('lang','en') ?? '';
            return $this->makeView('backend.pages.management.category.program.edit',compact('data','contentID','contentEN'));
        } catch (\Throwable $th) {
            \Log::error($th);
            return redirect()->back()->with('error','galga melakukan aksi');
            //throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryProgramRequest $request, string $id)
    {
        if(!Auth::user()->can('kategori programs-edit')){
            abort(403);
        }
        //
        DB::beginTransaction();
        try {
            $category = CategoryProgram::with('translite')->findOrFail($id);
            if($request->hasFile('images')){
                $path = public_path('assets/images/category/program/');
                $old_images = $path.$category->images;
                if(file_exists($old_images)){
                    unlink($old_images);
                }
                $nameImages = time().'.'.$request->images->extension();
                $request['images'] = $nameImages;
                $request->images->move($path,$nameImages);
                $request['images'] = $nameImages;
            }else{
                $request['images'] = $category->images;
            }
            $request['slug'] = Str::slug($request->title);
            $category->update($request->input());
            $lang_en = AllCategoryTranslite::where('lang','en')->where('id_category_programs',$id)->first();
            $lang_id = AllCategoryTranslite::where('lang','id')->where('id_category_programs',$id)->first();
            $lang_en->update([
                'title' => $request->title_translite,
                'slug' => Str::slug($request->title_translite).'-'.$lang_en->id
            ]);
            $lang_id->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title).'-'.$lang_id->id
            ]);
            DB::commit();
            return redirect()->route('category-programs.index')->with('success','Success Updating Data');
        } catch (\Throwable $th) {
            \Log::error($th);
            return redirect()->back()->with('error','Error Action');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!Auth::user()->can('kategori programs-destroy')){
            abort(403);
        }
        //
        try {
            $category = CategoryProgram::findOrFail($id);
            if($category->transLite->isNotEmpty()){
                $delete = $category->transLite()->delete(); // Akan menghapus semua data terkait
            }
            $category->delete();
            return redirect()->route('category-programs.index')->with('success','Success Delete Data');
         } catch (\Throwable $th) {
             //throw $th;
            \Log::error($th);
             return redirect()->back()->with('error','Error Action');
         }
    }
}
