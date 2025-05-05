<?php

namespace App\Http\Controllers\Backend;

use App\Base\Controller\BaseController;
use App\Http\Requests\CategoryNewsRequest;
use App\Models\AllCategoryTranslite;
use App\Models\CategoryNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategoryNewsController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::user()->can('kategori berita-view')) {
            abort(403);
        }
        try {
            $lang = 'id';
            $data = AllCategoryTranslite::whereHas('CategoryNews')->where('lang', $lang)->paginate(10);
            return $this->makeView('backend.pages.management.category.news.index', compact('data'));
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error', 'galga melakukan aksi');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if (!Auth::user()->can('kategori berita-create')) {
            abort(403);
        }
        return $this->makeView('backend.pages.management.category.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryNewsRequest $request)
    {
        if (!Auth::user()->can('kategori berita-create')) {
            abort(403);
        }
        DB::beginTransaction();
        try {
            if ($request->hasFile('images')) {
                $path = public_path('assets/images/category/news');
                $nameImages = time() . '.' . $request->images->extension();
                $request['images'] = $nameImages;
                $request->images->move($path, $nameImages);
                $request['images'] = $nameImages;
            }
            $request['slug'] = Str::slug($request->title);
            $category = new CategoryNews($request->input());
            $category->save();
            $lang_id = new AllCategoryTranslite([
                'id_category_news' => $category->id,
                'lang'                  => 'id',
                'title'               => $request->title,
                'slug'                => Str::slug($request->title) . '-' . $category->id,
            ]);
            $lang_id->save();
            $lang_en = new AllCategoryTranslite([
                'id_category_news' => $category->id,
                'lang'                  => 'en',
                'title'               => $request->title_translite,
                'slug'                => Str::slug($request->title_translite) . '-' . $category->id,
            ]);
            $lang_en->save();
            DB::commit();
            return redirect()->route('category-news.index')->with('success', 'Success Saving Data');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('error', 'Error Action');
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

        if (!Auth::user()->can('kategori berita-edit')) {
            abort(403);
        }
        //
        try {
            // $data = CategoryNews::findOrFail($id);
            $data = CategoryNews::with('transLite')->findOrFail($id);
            $contentID = $data->transLite->firstWhere('lang', 'id') ?? '';
            $contentEN = $data->transLite->firstWhere('lang', 'en') ?? '';
            return $this->makeView('backend.pages.management.category.news.edit', compact('data', 'contentID', 'contentEN'));
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error', 'Error Action');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryNewsRequest $request, string $id)
    {
        if (!Auth::user()->can('kategori berita-edit')) {
            abort(403);
        }
        DB::beginTransaction();
        try {
            $category = CategoryNews::with('translite')->findOrFail($id);
            if ($request->hasFile('images')) {
                $path = public_path('assets/images/category/news/');
                $old_images = $path . $category->images;
                if (file_exists($old_images)) {
                    unlink($old_images);
                }
                $nameImages = time() . '.' . $request->images->extension();
                $request['images'] = $nameImages;
                $request->images->move($path, $nameImages);
                $request['images'] = $nameImages;
            } else {
                $request['images'] = $category->images;
            }
            $request['slug'] = Str::slug($request->title);
            $category->update($request->input());
            $lang_en = AllCategoryTranslite::where('lang', 'en')->where('id_category_news', $id)->first();
            $lang_id = AllCategoryTranslite::where('lang', 'id')->where('id_category_news', $id)->first();
            $lang_en->update([
                'title' => $request->title_translite,
                'slug' => Str::slug($request->title_translite) . '-' . $lang_en->id
            ]);
            $lang_id->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title) . '-' . $lang_id->id
            ]);
            DB::commit();
            return redirect()->route('category-news.index')->with('success', 'Success Updating Data');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error', 'Error Action');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if(!Auth::user()->can('kategori berita-delete')){
            abort(403);
        }
        try {
            $category = CategoryNews::with('transLite')->findOrFail($id);
            if ($category->transLite->isNotEmpty()) {
                $delete = $category->transLite()->delete(); // Akan menghapus semua data terkait
            }
            $category->delete();
            return redirect()->route('category-news.index')->with('success', 'Success Delete Data');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('error', 'Error Action');
        }
    }
}
