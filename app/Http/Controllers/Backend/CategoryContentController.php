<?php

namespace App\Http\Controllers\Backend;

use App\Base\Controller\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryContentRequest;
use App\Http\Requests\CategoryNewsRequest;
use App\Models\AllCategoryTranslite;
use App\Models\CategoryContent;
use App\Models\ContentNew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryContentController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $lang = 'id';
            $data = AllCategoryTranslite::whereHas('CategoryContent')->where('lang',$lang)->paginate(10);
           return $this->makeView('backend.pages.management.category.content.index',compact('data'));
        } catch (\Throwable $th) {
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
                $manifes_path = asset('assets/images/category/conten');
                $nameImages = time().'.'.$request->images->extension();
                $request->images->move($path,$nameImages);
                $request['images'] = $nameImages;
            }
            $request['slug'] = Str::slug($request->title);
            $data = New CategoryContent($request->input());
            $data->save();

            $indo = New AllCategoryTranslite([
                'id_category_content' => $data->id,
                'lang'                  => 'id',
                'title'               => $request->title,
                'slug'                => Str::slug($request->title).'-'.$data->id,
            ]);
            $indo->save();
            $en = New AllCategoryTranslite([
                'id_category_content' => $data->id,
                'lang'                  => 'en',
                'title'               => $request->title_translite,
                'slug'                => Str::slug($request->title_translite).'-'.$data->id,
            ]);
            $en->save();
            DB::commit();
            return redirect()->route('category-content.index')->with('success','Success Saving Data');
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
        try {
            $data = CategoryContent::whereHas('transLite', function($query) use ($id) {
                $query->where('id_category_content', $id);
            })->with(['transLite' => function($query) use ($id) {
                $query->where('id_category_content', $id);
            }])->first();
            // parse data
            $contentID = $data->transLite->firstWhere('lang','id') ?? '';
            $contentEN = $data->transLite->firstWhere('lang','en') ?? '';
            return $this->makeView('backend.pages.management.category.content.edit',compact('data','contentID','contentEN'));
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
            $category->update($request->input());
            $lang_en = AllCategoryTranslite::where('lang','en')->where('id_category_content',$id)->first();
            $lang_id = AllCategoryTranslite::where('lang','id')->where('id_category_content',$id)->first();
            $lang_en->update([
                'title' => $request->title_translite,
                'slug' => Str::slug($request->title_translite).'-'.$lang_en->id
            ]);
            $lang_id->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title).'-'.$lang_id->id
            ]);
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
            $category = CategoryContent::with('transLite')->findOrFail($id);
            if($category->transLite->isNotEmpty()){
                $delete = $category->transLite()->delete(); // Akan menghapus semua data terkait

            }
            $category->delete();
            return redirect()->route('category-content.index')->with('success','Success Deleting Data');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('error','galga melakukan aksi');
        }
    }
}
