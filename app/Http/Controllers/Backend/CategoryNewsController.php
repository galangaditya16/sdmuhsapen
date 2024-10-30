<?php

namespace App\Http\Controllers\Backend;

use App\Base\Controller\BaseController;
use App\Http\Requests\CategoryNewsRequest;
use App\Models\AllCatgeoryTranslite;
use App\Models\CategoryNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategoryNewsController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = CategoryNews::paginate(10);
            return $this->makeView('backend.pages.management.category.news.index',compact('data'));
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
         return $this->makeView('backend.pages.management.category.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryNewsRequest $request)
    {
        DB::beginTransaction();
        try {
            if($request->hasFile('images')){
                $path = public_path('assets/images/category/news');
                $nameImages = time().'.'.$request->images->extension();
                $request['images'] = $nameImages;
                $request->images->move($path,$nameImages);
                $request['images'] = $nameImages;
            }
            $request['slug'] = Str::slug($request->title);
            $category = New CategoryNews($request->input());
            $category->save();

            $translite = New AllCatgeoryTranslite();
            $translite->id_category_news = $category->id;
            $translite->title = $request->title_translite;
            $translite->slug = str::slug($request->title_translite);
            $translite->save();
            DB::commit();

            return redirect()->route('category-news.index')->with('success','Success Saving Data');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
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
            $data = CategoryNews::findOrFail($id);
            return $this->makeView('backend.pages.management.category.news.edit',compact('data'));
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
        DB::beginTransaction();
        try {
            $category = CategoryNews::findOrFail($id);
            if($request->hasFile('images')){
                $path = public_path('assets/images/category/news/');
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
            $category->update($request->input()); 
            DB::commit();
            return redirect()->route('category-news.index')->with('success','Success Updating Data');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','Error Action');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
           $category = CategoryNews::findOrFail($id);
           $category->delete();
           return redirect()->route('category-news.index')->with('success','Success Delete Data');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('error','Error Action');
        }
    }
}
