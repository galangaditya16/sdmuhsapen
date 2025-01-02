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
            dd($roles);
        } catch (\Throwable $th) {
            dd($th);
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
}
