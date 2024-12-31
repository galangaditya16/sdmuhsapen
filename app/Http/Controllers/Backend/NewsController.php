<?php

namespace App\Http\Controllers\Backend;

use App\Base\Controller\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\AllContentTranslite;
use App\Models\CategoryNews;
use App\Models\News;
use App\Models\NewsNew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsController extends BaseController
{
    /**
     * Display a listing of the resource.s
     */
    public function index()
    {
        try {
            $lang = 'id';
            $data = AllContentTranslite::with(['ContentNews.hasCategory.transLite'])
                    ->whereHas('ContentNews.hasCategory.transLite', function ($query) use ($lang) {
                        $query->where('lang',$lang);
                    })
                    ->where('lang',$lang)->paginate(10);
            return $this->makeView('backend.pages.master.news.index',compact('data'));
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
        try {
            $categorys = CategoryNews::all();
            return $this->makeView('backend.pages.master.news.create',compact('categorys'));;
        } catch (\Throwable $th) {
            dd($th);
            DB::rollBack();
            return redirect()->back()->with('error','Error Action');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {
        DB::beginTransaction();

        try {
            if($request->hasFile('images')){
                $imagesName = [];
                foreach ($request->file('images') as $file) {
                    $path = public_path('assets/images/news/');
                    $code = time().'.'.$file->getClientOriginalExtension();
                    $file->move($path,$code);
                    $imagesName[] = $code;
                }
                $request['image_filenames'] = json_encode($imagesName);
                $request['path']   = $path;
                $request['author'] = 'galang_ganteng';
            }
            $data           = News::create([
                'id_category'  => $request->id_category,
                'author'       => 'galang_ganteng',
                'view'         => $request->view,
                'path'         => $request['path'],
                'images'       => $request['image_filenames'],
            ]);

            $data_tanslite  =AllContentTranslite::create([
                'id_news' => $data->id,
                'lang'    => 'id',
                'title'   => $request->title,
                'slug'    => Str::slug($request->title),
                'body'    => $request->body,
            ]);

            $data_tanslite  =AllContentTranslite::create([
                'id_news' => $data->id,
                'lang'    => 'en',
                'title'   => $request->title_translite,
                'slug'    => Str::slug($request->title_translite),
                'body'    => $request->body_translite,
            ]);

            DB::commit();
            return redirect()->route('news.index')->with('success','Success Saving Data');
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

        $lang = 'id';
        try {
            $categorys = CategoryNews::all();
            $news      = News::with(['hasCategory','hasCategory.transLite','transLite' => function($query) use ($lang,$id){
                $query->where('id_news',$id);
            }])->first();
            $contentID = $news->transLite->firstWhere('lang','id');
            $contentEN = $news->transLite->firstWhere('lang','en');
            return $this->makeView('backend.pages.master.news.edit',compact('news','categorys','contentID','contentEN'));
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','Error Action');
            //throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsRequest $request, string $id)
    {
        //
        DB::beginTransaction();
        try {
            $news = News::with(['hasCategory','transLite' => function($query) use ($id){
                $query->where('id_news',$id);
            }])->first();
            $contentID = AllContentTranslite::where('id_news',$news->id)->where('lang','id')->first();
            $contentEN =AllContentTranslite::where('id_news',$news->id)->where('lang','en')->first();
            if($request->hasFile('images')){
                foreach ($request->file('images') as $file) {
                    $path = public_path('assets/images/news/');
                    $code = time().'.'.$file->extension();
                    $file->move($path,$code);
                    $imagesName[] = $code;
                }
                $request['images'] = json_encode($imagesName);
                $request['path']   = $path;
                $request['author'] = 'galang_ganteng';
            }else{
                $request['images'] = $news->image;
                $request['path']   = $news->path;
            }

            $news->update([
                'id_category' => $request->id_category,
                'author'      => 'galang_ganteng',
                'path'        => $request->input('path'),
                'image'       => $request->input('images')
            ]);

            $contentID->update([
                'title' => $request->title,
                'slug'  => Str::slug($request->title).$news->id,
                'body'  => $request->body,
            ]);
            $contentEN->update([
                'title' => $request->title_translite,
                'slug'  => Str::slug($request->title_translite).$news->id,
                'body'  =>  $request->body_translite,
            ]);

            DB::commit();
            return redirect()->route('news.index')->with('success','Success Updating Data');
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
        DB::beginTransaction();
        try {
            $content = News::with('transLite')->findOrFail($id);
            if($content->transLite){
                $content->transLite()->delete();
            }
            $content->delete();
            DB::commit();
            return redirect()->route('news.index')->with('success','Success Delete Data');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('error','Error Action');
        }
    }
}
