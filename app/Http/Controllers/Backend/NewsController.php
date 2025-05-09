<?php

namespace App\Http\Controllers\Backend;

use App\Models\News;
use App\Models\NewsNew;
use Illuminate\Support\Str;
use App\Models\CategoryNews;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use Illuminate\Support\Facades\DB;
use App\Models\AllContentTranslite;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Base\Controller\BaseController;

class NewsController extends BaseController
{
    /**
     * Display a listing of the resource.s
     */
    public function index()
    {
        if(!Auth::user()->can('berita-view')){
            abort(403);
        }
        try {
            $lang = 'id';
            $data = AllContentTranslite::with(['ContentNews.hasCategory.transLite'])
                    ->whereHas('ContentNews.hasCategory.transLite', function ($query) use ($lang) {
                        $query->where('lang',$lang);
                    })
                    ->orderBy('created_at', 'desc')
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
        if(!Auth::user()->can('berita-create')){
            abort(403);
        }
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
        if(!Auth::user()->can('berita-create')){
            abort(403);
        }
        DB::beginTransaction();

        try {
            if($request->hasFile('images')){
                $imagesName = [];
                foreach ($request->file('images') as $file) {
                    $path = public_path('assets/images/news/');
                    $manifes_path = asset('assets/images/news');
                    $code = time().'.'.$file->getClientOriginalExtension();
                    $file->move($path,$code);
                    $imagesName[] = $code;
                }
                $request->merge([
                    'image' => json_encode($imagesName),
                    'path' => $manifes_path,
                    'author' => 'admin',
                ]);
            }
            $data           = News::create([
                'id_category'  => $request->id_category,
                'author'       => Auth::user()->name,
                'view'         => $request->view,
                'path'         => $request->path,
                'images'       => $request->image,
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
        if(!Auth::user()->can('berita-edit')){
            abort(403);
        }
        $lang = 'id';
        try {
            $categorys = CategoryNews::all();
            $news      = News::with(['hasCategory','hasCategory.transLite','transLite' => function($query) use ($lang,$id){
                $query->where('id_news',$id);
            }])
            ->whereHas('transLite')
            ->findOrFail($id);
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
        if(!Auth::user()->can('berita-edit')){
            abort(403);
        }
        DB::beginTransaction();
        try {
            $news = News::with(['hasCategory','transLite' => function($query) use ($id){
                $query->where('id_news',$id);
            }])->findOrFail($id);

            $contentID = AllContentTranslite::where('id_news',$news->id)->where('lang','id')->first();
            $contentEN =AllContentTranslite::where('id_news',$news->id)->where('lang','en')->first();

            if($request->hasFile('images')){
                $imagesName = [];
                foreach ($request->file('images') as $file) {
                    $path = public_path('assets/images/news/');
                    $manifes_path = asset('assets/images/news');
                    $code = uniqid() . '_' . time() . '.' . $file->extension();
                    $file->move($path, $code);
                    $imagesName[] = $code;
                }
                $request->merge([
                    'image' => json_encode($imagesName),
                    'path' => $manifes_path,
                    'author' => 'admin',
                ]);
            } else {
                $request->merge([
                    'image' => $news->image,
                    'path' => $news->path,
                ]);
            }
            $news->update([
                'id_category' => $request->id_category,
                'author'      => Auth::user()->name,
                'path'        => $request->input('path'),
                'images'       => $request->image
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
        if(!Auth::user()->can('berita-delete')){
            abort(403);
        }
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

    public function headline($id){
        try {
            $news   = News::findOrFail($id);
            $counter= News::where('headline','!=', 0)->get();
            if(count($counter) < 3){
                if($news && $news->headline == 0){
                    $news->headline = 1;
                    $news->save();
                    return redirect()->route('news.index')->with('success','Success Set Hadline');
                }else{
                    $news->headline = 0;
                    $news->save();
                    return redirect()->route('news.index')->with('success','Success Unset Hadline');
                }
            }else{
                return redirect()->back()->with('error','Headline Max');
            }
        } catch (\Throwable $th) {
            dd($th);
           abort(404);
        }
    }
}
