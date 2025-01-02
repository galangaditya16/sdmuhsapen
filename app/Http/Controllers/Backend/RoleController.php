<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\SysPermission;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Base\Controller\BaseController;

class RoleController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $permission = DB::table('permissions')->where('name','LIKE','role-%')->get();
            $roles      = DB::table('roles')->paginate(10);
            return $this->makeView('backend.pages.master.role.index',compact('roles','permission'));
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $typePermissions = SysPermission::selectRaw('SUBSTRING_INDEX(name, "-", 1) AS first_word, COUNT(*) AS total')
            ->groupBy('first_word')
            ->get();
			$lists = SysPermission::where('name', 'like', '%view%')->orderBy('created_at', 'ASC')->get();
			$creates = SysPermission::where('name', 'like', '%create%')->orderBy('created_at', 'ASC')->get();
			$updates = SysPermission::where('name', 'like', '%edit%')->orderBy('created_at', 'ASC')->get();
			$deletes = SysPermission::where('name', 'like', '%delete%')->orderBy('created_at', 'ASC')->get();
            return $this->makeView('backend.pages.master.role.create',compact('typePermissions','lists','creates','updates','deletes'));
        } catch (\Throwable $th) {
            dd($th);
        }
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
}
