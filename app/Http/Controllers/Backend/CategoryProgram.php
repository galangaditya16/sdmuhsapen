<?php

namespace App\Http\Controllers\Backend;

use App\Base\Controller\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryProgramRequest;
use App\Models\AllCategoryTranslite;
use App\Models\CatergoyProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryProgram extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = CatergoyProgram::with('translite')->paginate(10);
            return $this->makeView('backend.pages.management.category.program.index',compact('data'));
         } catch (\Throwable $th) {
             dd($th);
             return redirect()->back()->with('error','galga melakukan aksi');
         }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return $this->makeView('backend.pages.management.category.program.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryProgramRequest $request)
    {
        DB::beginTransaction();
        try {
            if($request->hasFile('images')){
                $path = public_path('assets/images/category/program');
                $nameImages = time().'.'.$request->images->extension();
                $request->images->move($path,$nameImages);
                $request['images'] = $nameImages;
            }
            $request['slug'] = Str::slug($request->title);
            $data = New CatergoyProgram($request->input());
            $data->save();

            $translite = New AllCategoryTranslite([
                'id_category_programs' => $data->id,
                'title'               => $request->title_translite,
                'slug'                => Str::slug($request->title_translite).'-'.$data->id,   
            ]);
            $translite->save();
            DB::commit();
            return redirect()->route('category-programs.index')->with('success','Success Saving Data');
        } catch (\Throwable $th) {
            //throw $th;
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
            
            $data = CatergoyProgram::with('translite')->findOrFail($id);
            return $this->makeView('backend.pages.management.category.program.edit',compact('data'));
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','galga melakukan aksi');
            //throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryProgramRequest $request, string $id)
    {
        //
        DB::beginTransaction();
        try {
            $category = CatergoyProgram::with('translite')->findOrFail($id);
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
            if($category->translite){
                $category->translite->update([
                    'title' => $request->title_translite, 
                    'slug'  =>  Str::slug($request->title_translite).'-'.$category->id
                ]);
            } 
            DB::commit();
            return redirect()->route('category-programs.index')->with('success','Success Updating Data');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','Error Action');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
            $category = CatergoyProgram::findOrFail($id);
            $category->delete();
            return redirect()->route('category-programs.index')->with('success','Success Delete Data');
         } catch (\Throwable $th) {
             //throw $th;
             dd($th);
             return redirect()->back()->with('error','Error Action');
         }
    }
}
