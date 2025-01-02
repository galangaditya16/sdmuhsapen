<?php

namespace App\Http\Controllers\Backend;

use App\Base\Controller\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Base\Repositories\AppRepository;

class MenuController extends BaseController
{

    protected $repositories;

    public function __construct(Menu $menu) {
        $this->repositories = new AppRepository($menu);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $menus = Menu::with('parent')->paginate(10);
            return $this->makeView('backend.pages.management.menu.index',compact('menus'));
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error','Gagal melakukan aksi');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $parents = Menu::whereNull('parent_id')->get();
            return $this->makeView('backend.pages.management.menu.create',compact('parents'));
        } catch (\Throwable $th) {
                        dd($th->getMessage());
           return redirect()->back()->with('error','Tidak Dapat Melakukan Tambah');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenuRequest $request)
    {
        DB::beginTransaction();
        $menu = NULL;
        try {
            $menu = new Menu($request->all());
            $menu->save();
            DB::commit();
            return redirect()->route('management-menu.index')->with('succes','Data Berhasil Disimpan');
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
            return redirect()->back()->with('error','Gagal Melakukan Aksi');
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
        try {
            $parents = Menu::whereNull('parent_id')->get();
            $menu    = Menu::find($id);
            return $this->makeView('backend.pages.management.menu.edit',compact('menu','parents'));
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('error','Gagal Melakukan Aksi');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MenuRequest $request, string $id)
    {
        DB::beginTransaction();
        $menu = NULL;
        try {
            $menu = Menu::findOrFail($id);
            $menu->update($request->all());
            DB::commit();
            return redirect()->route('management-menu.index')->with('succes','Data Berhasil Disimpan');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            dd($th);
            return redirect()->back()->with('error','Gagal Melakukan Aksi');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::beginTransaction();
        $menu = NULL;
        try {
            $menu = Menu::find($id);
            $menu->is_active = 1;
            $menu->save();
            return redirect()->route('management-menu.index')->with('succes','Data Berhasil Hapus');
            //code...
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('error','Gagal Melakukan Aksi');
        }
    }

    public function SoftDelete($id){
        try {
            $this->repositories->activeNonActive($id,1);
            return redirect()->route('management-menu.index')->with('succes','Data Berhasil Hapus');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','Gagal Melakukan Aksi');
        }
    }
}
