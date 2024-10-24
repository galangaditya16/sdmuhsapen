<?php

namespace App\Http\Controllers\Backend;

use App\Base\Controller\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\CategoryNews;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends BaseController
{
    /**
     * Display a listing of the resource.s
     */
    public function index()
    {
        try {
            $data = News::paginate(10);
            return $this->makeView('backend.pages.content.news.index',compact('data'));;
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
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            if($request->hasFile('images')){
                foreach ($request->file('images') as $file) {
                    $path = public_path('assets/images/news/');
                    $code = time().'.'.$file->extension();
                    $file->move($path,$code);
                    $imagesName[] = $code;
                }
                $request['images'] = json_encode($imagesName);
                $request['author'] = 'galang_ganteng';
            }
            $data = New News($request->input());
            $data->save();
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
