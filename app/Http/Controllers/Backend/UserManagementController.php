<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Model\User as SpatieUser;
use App\Base\Controller\BaseController;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\UserManagementRequest;

class UserManagementController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try {
            if(!Auth::user()->can('user management-view')){
                abort(403);
            }
            $lang = 'id';
            $data = User::with('roles.permissions')->paginate(10);
            return $this->makeView('backend.pages.management.users.index', compact('data'));
        } catch (\Throwable $th) {
            abort(404);
            //throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if(!Auth::user()->can('user management-create')){
            abort(403);
        }
        $permission = Role::all();
        return $this->makeView('backend.pages.management.users.create',compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserManagementRequest $request)
    {
        //
        if(!Auth::user()->can('user management-create')){
            abort(403);
        }
        DB::beginTransaction();
        try {
            $dataRole = Role::findOrfail($request->role);
            $user = User::create([
                'name'  => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            $user->assignRole($dataRole);
            DB::commit();

            return redirect()->route('users.index')->with('success','Success Add User');
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th->getMessage());
            abort(404);
            //throw $th;
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
    public function edit($id)
    {
        //
        if(!Auth::user()->can('user management-edit')){
            abort(403);
        }
        try {
            $permission = Role::all();
            $data = User::with('roles.permissions')->findOrfail($id);
            return $this->makeView('backend.pages.management.users.edit',compact('data','permission'));
        } catch (\Throwable $th) {
            \Log::error($th);
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserManagementRequest $request, string $id)
    {
        //
        if(!Auth::user()->can('user management-edit')){
            abort(403);
        }
        DB::beginTransaction();
        try {
            $user = User::with(['roles.permissions'])->findOrFail($id);
            $role = Role::findOrfail($request->role);
            $user->syncRoles([]);
            $user->assignRole($role);
            if($request->has('password')){
                $user->password = bcrypt($request->password);
                $user->save();
            }
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();

            DB::commit();
            return redirect()->route('users.index')->with('success','Success Update User');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!Auth::user()->can('user management-delete')){
            abort(403);
        }
        DB::beginTransaction();
        try {
            $user = User::findOrFail($id);
            $user->syncRoles([]);
            $user->delete();
            DB::commit();
            return redirect()->route('users.index')->with('success', 'User deleted successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
