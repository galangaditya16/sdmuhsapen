<?php

namespace App\Http\Controllers\backend;

use App\Models\Teachernew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\AllCategoryTranslite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Base\Controller\BaseController;


class TeacherController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::user()->can('guru-view')){
            abort(403);
        }
        try {
            $lang = 'id';
            $contents = Teachernew::with(['ticherposition','ticherposition.transLite'])->orderBy('created_at', 'asc')->paginate(10);
            return $this->makeView('backend.pages.master.teacher.index',compact('contents','lang'));
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
        if(!Auth::user()->can('guru-create')){
            abort(403);
        }
        try {
            $lang = 'id';
            $catgeorys = AllCategoryTranslite::with('CategoryTeacher')->whereHas('CategoryTeacher')->where('lang',$lang)->get();
            return $this->makeView('backend.pages.master.teacher.create',compact('catgeorys'));
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','galga melakukan aksi');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if(!Auth::user()->can('guru-create')){
            abort(403);
        }
        // dd($request->all());
        DB::beginTransaction();
        try {
            if($request->has('images')){
                $path      = public_path('assets/images/teacher/');
                $nameImage = time().'.'.$request->image->extension();
                $request->image->move($path,$nameImage);
                $request->merge(['image' => $nameImage]);

            }
            $data = new Teachernew ([
                'position_id'       => $request->id_posotion,
                'name'              => $request->name,
                'image'             => $request->image ?? '',
                'detail_id'         => $request->title,
                'detail_en'         => $request->title_translite,
            ]);
            $data->save();
            DB::commit();
            return redirect()->route('teacher.index')->with('success','Berhasil Menyimpan Data');
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            return redirect()->back()->with('error','galga melakukan aksi');
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
        if(!Auth::user()->can('guru-edit')){
            abort(403);
        }
        try {
            $lang = 'id';
            $catgeorys = AllCategoryTranslite::with('CategoryTeacher')->whereHas('CategoryTeacher')->where('lang',$lang)->get();
            $data = Teachernew::findOrfail($id);
            return $this->makeView('backend.pages.master.teacher.edit',compact('data','catgeorys'));
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','galga melakukan aksi');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if(!Auth::user()->can('guru-edit')){
            abort(403);
        }
        try {
            $data = Teachernew::findOrfail($id);
            if($request->has('images') && empty($data->image) ){
                $path = public_path('assets/images/teacher/' . $data->image);
                if (File::exists($path)) {
                    File::delete($path);
                }
                $file = $request->file('images');
                $newFileName = time() . '_' . $file->getClientOriginalName(); // Bisa diubah sesuai kebutuhan
                $file->move(public_path('assets/images/teacher/'), $newFileName);
                $request->merge(['image' => $newFileName]);
            }else{

                $request->merge(['image' => $data->image]);
            }
            $data->update([
                'position_id'       => $request->id_posotion,
                'name'              => $request->name,
                'image'             => $request->image ?? '',
                'detail_id'         => $request->title,
                'detail_en'         => $request->title_translite,
            ]);
            return redirect()->route('teacher.index')->with('success','Berhasil Menyimpan Data');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','galga melakukan aksi');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!Auth::user()->can('guru-delete')){
            abort(403);
        }
        try {
            $data = Teachernew::findOrfail($id);
            $data->delete();
            return redirect()->route('teacher.index')->with('success','Berhasil Menghapus Data');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','galga melakukan aksi');
        }
    }
}
