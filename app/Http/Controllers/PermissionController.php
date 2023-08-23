<?php

namespace App\Http\Controllers;

use App\Models\PermissionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $permission_data = PermissionModel::paginate(3);
        return view('permissions/list', compact('permission_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permissions.form');
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
            'name' => 'required',
            'status' => 'required',
        ]);     
        
        $permission_data = $request->except(['_token']);    

        if( $request->id){
           
            $id = $request->id;
            PermissionModel::where('id', $id)
            ->update($permission_data);
          
        } else {
           
            $permissionModel = PermissionModel::create($permission_data);
        }
        return redirect()->route('permission.view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $crud = PermissionModel::find($id);
        return view('permissions/form', compact('crud'));
    
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
     if($request->get('slug'))
     {
      $slug = $request->get('slug');
      $data = DB::table("permission")
       ->where('slug', $slug)
       ->count();
      if($data > 0)
      {
       echo 'not_unique';
      }
      else
      {
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
        $crud = PermissionModel::find($id);  
        $crud->delete(); 
        return redirect()->route('permission.view');
    }
}
