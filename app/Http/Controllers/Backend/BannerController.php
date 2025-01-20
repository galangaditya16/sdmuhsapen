<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Base\Controller\BaseController;
use App\Models\Banner;
use Intervention\Image\Facades\Image;
use App\Http\Requests\BannerRequest;


class BannerController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $banners = Banner::orderBy('created_at', 'DESC')->paginate(10);
            return $this->makeView('backend.pages.master.banner.index',compact('banners'));
        } catch (\Throwable $th) {
            dd($th);
           abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        try {
            return $this->makeView('backend.pages.master.banner.create');
        } catch (\Throwable $th) {
            abort(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BannerRequest $request)
    {
        //
        try {
           if($request->hasFile('image')){
            $path       = public_path('assets/images/banner');
            $nameImages =time().'.'. $request->image->getClientOriginalExtension();
            $request->image->move($path,$nameImages);
            $request->merge(['images' => $nameImages]);
           }
           $banners = new Banner($request->all());
           $banners->save();
           return redirect()->route('banner.index')->with('success', 'Berhasil Menyimpan Data');
        } catch (\Throwable $th) {
            // dd($th);
            abort(404);
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
           $data = Banner::findOrfail($id);
           return $this->makeView('backend.pages.master.banner.edit',compact('data'));
        } catch (\Throwable $th) {
           abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        try {
            $data_banner = Banner::findOrfail($id);
            if($request->hasFile('image') && file_exists(public_path('assets/images/banner/'.$data_banner->images))){
                $path = public_path('assets/images/banner');
                $nameImages = time().'.'.$request->image->extension();
                $request->image->move($path,$nameImages);
                $request->merge(['images' => $nameImages]);
            }else{
                $request->merge(['images' => $data_banner->images]);
            }

            $data_banner->update($request->all());
            return redirect()->route('banner.index')->with('success', 'Berhasil Update Data');
        } catch (\Throwable $th) {
            //throw $th;
            abort(404);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
            $data_banner = Banner::findOrfail($id);
            $data_banner->delete();
            return redirect()->route('banner.index')->with('success', 'Berhasil Hapus Data');
        } catch (\Throwable $th) {
            abort(404);
        }
    }
}
