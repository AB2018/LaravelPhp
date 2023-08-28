<?php

namespace App\Http\Controllers;

use App\Models\PermissionModel;
use App\Models\RoleModel;
use App\Models\RolesPermissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getPermission = PermissionModel::all();
        // $role_data = RoleModel::paginate(3);
        $role_data = RoleModel::with('permissions')->paginate(3);

    
        // $getPermission = PermissionModel::all();
        // $role_data = RoleModel::paginate(3);
        return view('role.list', compact('role_data', 'getPermission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('role/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required',
            'role' => 'required',
            'status' => 'required',
        ]);
        if ($request->get('slug')) {
            $slug = $request->get('slug');
            $data = DB::table("roles")
                ->where('slug', $slug)
                ->count();

            if ($data > 0) {
                return redirect()->back()->with('slugExist', 'Slug Already exist');
            }
        }

        $role_data = $request->except(['_token']);

        if ($request->id) {

            $id = $request->id;
            RoleModel::where('id', $id)
                ->update($role_data);
        } else {

            $roleModel = RoleModel::create($role_data);
        }
        return redirect()->route('role.view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        //  dd($request);
        $role_id = $request->role_id;
        //  dd($role_id);
        $permission_id =  $request->permission_id;
        foreach ($permission_id as $permission_id) {
            $roles_permissions[] = [
                'role_id' => $role_id,
                'permission_id' => $permission_id,
            ];
        }
        DB::table('roles_permissions')->where('role_id', $role_id)->delete();

        $roles_permissions_model = RolesPermissions::insert($roles_permissions);

        return redirect()->route('role.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud = RoleModel::find($id);
        return view('role/form', compact('crud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    function check(Request $request)
    {
        if ($request->get('slug')) {
            $slug = $request->get('slug');
            $data = DB::table("roles")
                ->where('slug', $slug)
                ->count();
            if ($data > 0) {
                echo 'not_unique';
            } else {
                echo 'unique';
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud = RoleModel::find($id);
        $crud->delete();
        return redirect()->route('role.view');
    }
}
