<?php

namespace App\Http\Controllers\Backend;

use App\Base\Controller\BaseController;
use App\Http\Controllers\Controller;
use App\Models\SysPermission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role as SpatieRole;

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
            $typePermissions = SysPermission::selectRaw("split_part(name, '-', 1) AS first_word, COUNT(*) AS total")
            ->groupBy('first_word')
            ->get();
        
			$lists = SysPermission::where('name', 'like', '%view%')->orderBy('created_at', 'ASC')->get();
			$creates = SysPermission::where('name', 'like', '%create%')->orderBy('created_at', 'ASC')->get();
			$updates = SysPermission::where('name', 'like', '%edit%')->orderBy('created_at', 'ASC')->get();
			$deletes = SysPermission::where('name', 'like', '%delete%')->orderBy('created_at', 'ASC')->get();
            return $this->makeView('backend.pages.master.role.create',compact('typePermissions','lists','creates','updates','deletes'));
        } catch (\Throwable $th) {
            abort(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        DB::beginTransaction();
        try {
            $role = SpatieRole::create([
                'name' => $request->name,
                'guard_name' => 'web', // <- tambahkan ini
            ]);            
            if ($request->has('permission')) {
                $permissions = SysPermission::whereIn('id', $request->permission)->get();
                $role->syncPermissions($permissions);
                DB::commit();
                return redirect()->route('permission.index')->with('success', 'Role created successfully');
            }

        } catch (\Throwable $th) {
            DB::rollback();
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
            $role = SpatieRole::with(['permissions'])->findOrFail($id);
            $typePermissions = SysPermission::select('name')
                ->orderBy('created_at', 'ASC')
                ->get()
                ->map(function($permission) {
                    return [
                        'first_word' => ucfirst(explode('-', $permission->name)[0])
                    ];
                })
                ->unique('first_word')
                ->values();

                $lists = SysPermission::where('name', 'like', '%view%')->orderBy('created_at', 'ASC')->get();
                $creates = SysPermission::where('name', 'like', '%create%')->orderBy('created_at', 'ASC')->get();
                $updates = SysPermission::where('name', 'like', '%edit%')->orderBy('created_at', 'ASC')->get();
                $deletes = SysPermission::where('name', 'like', '%delete%')->orderBy('created_at', 'ASC')->get();

            return $this->makeView('backend.pages.master.role.edit', compact('role', 'typePermissions', 'lists', 'creates', 'updates', 'deletes'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try {
            $role = SpatieRole::with(['permissions'])->findOrFail($id);
            // cek data lama 
            $currentPermissions  = $role->permissions->pluck('id')->toArray();
            //dd($currentPermissions);
            // data baru 
            $newPermissions      = $request->input('permission', []);
            $permissionsToRemove = array_diff($currentPermissions, $newPermissions);
            $permissionsToAdd    = array_diff($newPermissions, $currentPermissions);

            foreach ($permissionsToRemove as $permName) {
                $permission = SysPermission::where('id', $permName)->first();
                if ($permission) {
                    $role->revokePermissionTo($permission->name);
                }
            } 

            foreach ($permissionsToAdd as $permName) {
                $permission = SysPermission::where('id', $permName)->first();
                if ($permission) {
                    $role->givePermissionTo($permission->name);
                };
            }
            $role->name = $request->name;
            $role->save();

            DB::commit();
            return redirect()->back()->with('success', 'Role updated successfully');

            //code...
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th->getMessage());
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */ 
    public function destroy(string $id)
    {
        //
        DB::beginTransaction();
        try {
           $role = SpatieRole::findOrFail($id);
           $userCount = User::role($role->name)->count();
           if($userCount > 0){
                return redirect()->back()->with('error', 'Role cannot be deleted because it is assigned to users');
           }
           $role->permissions()->detach();
           $role->delete();
        DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            //throw $th;
            
        }
    }
}
