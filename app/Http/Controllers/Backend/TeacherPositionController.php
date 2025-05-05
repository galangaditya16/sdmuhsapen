<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TeacherPositionnew;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\AllCategoryTranslite;
use Illuminate\Support\Facades\Auth;
use App\Base\Controller\BaseController;
use App\Http\Controllers\Backend\TeacherNew;

class TeacherPositionController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            if (!Auth::user()->can('jabatan guru-view')) {
                abort(403);
            }
           $lang = 'id';
           $data = AllCategoryTranslite::with(['CategoryTeacher.transLite'])
                  ->whereHas('CategoryTeacher')
                  ->where('lang',$lang)->paginate(10);
           return $this->makeView('backend.pages.management.category.teacher.index',compact('data'));
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
        if (!Auth::user()->can('jabatan guru-create')) {
            abort(403);
        }
        return $this->makeView('backend.pages.management.category.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if (!Auth::user()->can('jabatan guru-create')) {
            abort(403);
        }
        DB::beginTransaction();
        try {
            if($request->hasFile('images')){
                $path = public_path('assets/images/category/teacher');
                $nameImages = time().'.'.$request->images->extension();
                $request['images'] = $nameImages;
                $request->images->move($path,$nameImages);
                $request['images'] = $nameImages;
            }
            $category   = new TeacherPositionnew([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'image'=> $nameImages ?? '',
                'order'=> $request->order ?? '0',
            ]);
            $category->save();
            $categoryID = new AllCategoryTranslite([
                'lang'                  => 'id',
                'id_teacher_position'   =>  $category->id,
                'title'                 =>  $request->name,
                'slug'                  =>  Str::slug($request->name).$category->id,
            ]);
            $categoryID->save();
            $categoryEN = new AllCategoryTranslite([
                'lang'                  => 'en',
                'id_teacher_position'   =>  $category->id,
                'title'                 =>  $request->name_translite,
                'slug'                  =>  Str::slug($request->name_translite).$category->id,
            ]);
            $categoryEN->save();
            DB::commit();
            return redirect()->route('teacher-position.index')->with('success','Success Saving Data');
        } catch (\Throwable $th) {
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
        if (!Auth::user()->can('jabatan guru-edit')) {
            abort(403);
        }
        try {
            $category   = TeacherPositionnew::with('transLite')->findOrFail($id);
            $categoryID = $category->transLite->firstWhere('lang','id');
            $categoryEN = $category->transLite->firstWhere('lang','en');
            return $this->makeView('backend.pages.management.category.teacher.edit',compact('categoryEN','categoryID','category'));
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
        if (!Auth::user()->can('jabatan guru-edit')) {
            abort(403);
        }
        DB::beginTransaction();
        try {
            $category   = TeacherPositionnew::with('transLite')->findOrfail($id);
            $categoryEN = AllCategoryTranslite::where('id_teacher_position',$category->id)->where('lang','en')->first();
            $categoryID = AllCategoryTranslite::where('id_teacher_position',$category->id)->where('lang','id')->first();
            if($request->file('images')){
                $path = public_path('assets/images/category/teacher');
                if ($category->images && file_exists($path . '/' . $category->images)) {
                    unlink($path . '/' . $category->images);
                }
                $nameImages = time() . '.' . $request->images->extension();
                $request->images->move($path,$nameImages);
                $request['images']  = $nameImages;
            }else{
                $request['images'] = $category->image;
            }
            $category->update([
                'name'  => $request->name,
                'slug'  => Str::slug($request->name),
                'image' => $request->input('images'),
                'order' => $request->order,
            ]);
            $categoryID->update([
                'title' => $request->name,
                'slug'  => Str::slug($request->name),
            ]);
            $categoryEN->update([
                'title' => $request->name_translite,
                'slug'  => Str::slug($request->name_translite),
            ]);
            DB::commit();
            return redirect()->route('teacher-position.index')->with('success','Success Saving Data');
        } catch (\Throwable $th) {
            dd($th);
            DB::rollBack();
            return redirect()->back()->with('error','Error Action');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        if (!Auth::user()->can('jabatan guru-delete')) {
            abort(403);
        }
        DB::beginTransaction();
        try {
            $category = TeacherPositionnew::with('transLite')->findOrFail($id);
            if($category->transLite){
                $category->transLite()->delete();
            }
            $category->delete();
            return redirect()->route('teacher-position.index')->with('success','Success Delete Data');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','Error Action');
        }
    }
}
