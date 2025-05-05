<?php

namespace App\Http\Controllers\Backend;

use App\Base\Controller\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SliderController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::user()->can('slider-view')){
            abort(403);
        }
        try {
            $sliders = Slider::paginate(10);
            return $this->makeView('backend.pages.management.slider.index',compact('sliders'));
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','gagal melakukan aksi');
        }


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if(!Auth::user()->can('slider-create')){
            abort(403);
        }
        return $this->makeView('backend.pages.management.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        //
        if(!Auth::user()->can('slider-create')){
            abort(403);
        }
        DB::beginTransaction();
        try {
            if($request->hasFile('image')){
                $path       = public_path('assets/images/slider/');
                $path_save  = asset('assets/images/slider/');
                $nameImages = time().'.'.$request->image->extension();
                $request->image->move($path,$nameImages);
                $request['image'] = $nameImages;
                $request['path']   = $path_save;
            }
            $data = new Slider([
                'image' => $request->input('image'),
                'title' => $request->input('title'),
                'path' => $request->input('path'),
            ]);
            $data->save();
            DB::commit();
            return redirect()->route('slider.index')->with('success','Success Saving Data');
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
        if(!Auth::user()->can('slider-delete')){
            abort(403);
        }
        try {
            $data = Slider::findOrFail($id);
            $path = public_path('assets/images/slider/');
            if($data->image != NULL){
                $image_path = $path.$data->image;
                if(file_exists($image_path)){
                    unlink($image_path);
                }   
            }
            $data->delete();
            return redirect()->route('slider.index')->with('success','Success Deleted Data');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','Error Action');
        }
    }
}
