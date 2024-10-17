<?php

namespace App\Http\Controllers\Backend;

use App\Base\Controller\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Http\Requests\MenuRequest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class MenuController extends BaseController
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $menus = Menu::whereNull('is_active')->with('parent')->paginate(10);
            return $this->makeView('backend.pages.management.menu.index',compact('menus'));
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error','Tidak Dapat Melakukan Tambah');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $parent = Menu::whereNull('is_active')->whereNull('parent_id')->get();
            return $this->makeView('backend.pages.management.menu.create',compact('parent'));
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
        try {

        } catch (\Throwable $th) {

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
