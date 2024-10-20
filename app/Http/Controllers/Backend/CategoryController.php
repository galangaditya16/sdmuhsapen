<?php

namespace App\Http\Controllers\Backend;

use App\Base\Controller\BaseController;
use App\Base\Repositories\AppRepository;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends BaseController
{
    protected $repostiries;

    public function __construct(Category $category)
    {
        $this->repostiries = New AppRepository($category);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            // $request->limit = 10 
            $data = Category::with('parent')->paginate(10);
            return $this->makeView('backend.pages.management.category.index',compact('data'));
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','Data Gagal Dimuat');
            //throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function SoftDelete($status,$id){
        DB::beginTransaction();
        try {
            $find = Category::where('id_category',$id)->first();
            if ($status == 'active') {
                $find->trashed = 1;
            } else {
                $find->trashed = 0;
            }
            $find->save();
            DB::commit();
            return redirect()->route('category.index')->with('success','Data Berhasil Di Hapus');
        } catch (\Throwable $th) {
            return redirect()->route('category.index')->with('error','Gagal Melakukan Aksi');
            //throw $th;
        }
    }
}
