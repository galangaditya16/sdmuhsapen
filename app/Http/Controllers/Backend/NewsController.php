<?php

namespace App\Http\Controllers\Backend;

use App\Base\Controller\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\AllContentTranslite;
use App\Models\CategoryNews;
use App\Models\News;
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
        $lang = 'id';
        try {
            $data = News::with(['hasCategory','content' => function($query) use ($lang){
                $query->where('lang', $lang ? $lang : 'id');
            }])->paginate(10);
            return $this->makeView('backend.pages.content.news.index',compact('data'));
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
            return $this->makeView('backend.pages.content.news.create',compact('categorys'));;
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
                'image'       => $request['image_filenames'],
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
                'title'   => $request->title,
                'slug'    => Str::slug($request->title),
                'body'    => $request->body,
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
            $news      = News::with(['hasCategory','content' => function($query) use ($lang,$id){
                $query->where('id_news',$id);
            }])->first();
            return $this->makeView('backend.pages.content.news.edit',compact('news','categorys'));
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
            $news = News::with(['hasCategory','content' => function($query) use ($id){
                $query->where('id_news',$id);
            }])->first();
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

            $contentid = $news->content->firstWhere('lang','id');
            $contenten = $news->content->firstWhere('lang','en');
            if($contentid){
                $contentid->title = $request->title;
                $contentid->slug  = str::slug($request->title);
                $contentid->body  = $request->body;
                $contentid->save();
            }
            if($contenten){
                $contenten->title = $request->title_translite;
                $contenten->slug  = str::slug($request->title_translite);
                $contenten->body  = $request->body_translite;
                $contenten->save();
            }
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
            News::where('id', $id)->delete();
            AllContentTranslite::where('id_news',$id)->delete();
            DB::commit();
            return redirect()->route('news.index')->with('success','Success Delete Data');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('error','Error Action');
        }
    }
}
