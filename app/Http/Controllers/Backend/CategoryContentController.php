<?php

namespace App\Http\Controllers\Backend;

use App\Base\Controller\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryContentRequest;
use App\Http\Requests\CategoryNewsRequest;
use App\Models\CategoryContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryContentController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
           $data = CategoryContent::paginate(10);
           return $this->makeView('backend.pages.management.category.content.index',compact('data'));
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
        return $this->makeView('backend.pages.management.category.content.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryContentRequest $request)
    {
        DB::beginTransaction();
        try {
            if($request->hasFile('images')){
                $path = public_path('assets/images/category/conten');
                $nameImages = time().'.'.$request->images->extension();
                $request->images->move($path,$nameImages);
                $request['images'] = $nameImages;
            }
            $data = New CategoryContent($request->input());
            $data->save();
            DB::commit();
            return redirect()->route('category-content.index')->with('success','Success Saving Data');
            //code...
        } catch (\Throwable $th) {
            //throw $th;
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
            $data = CategoryContent::findOrFail($id);
            return $this->makeView('backend.pages.management.category.content.edit',compact('data'));
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','galga melakukan aksi');
            //throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryContentRequest $request, string $id)
    {
        DB::beginTransaction();
        try {
            $category = CategoryContent::findOrFail($id);
            if($request->hasFile('images')){
                $path = public_path('assets/images/category/content/');
                $old_images = $path.$category->icon;
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
            $category->update($request
            ->input());
            DB::commit();
            return redirect()->route('category-content.index')->with('success','Success Updating Data');
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            return redirect()->back()->with('error','galga melakukan aksi');
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $category = CategoryContent::findOrFail($id);
            $category->delete();
            return redirect()->route('category-content.index')->with('success','Success Deleting Data');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('error','galga melakukan aksi');
        }
    }
}
