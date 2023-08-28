<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\AdminRoles;
use App\Models\RoleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        $getRole = RoleModel::all();
        $admin_data = AdminModel::with('roles')->paginate(3);
     
        return view('admin/listAdmin', compact('admin_data','getRole'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'status' => 'required',
            'email' => 'required',
            'password' => 'required_if:id,id',
        ]);    
        $hashedPassword = Hash::make($request->password);
          $admin_data = [
                'name' => $request->name,
                'contact' => $request->contact,
                'status' => $request->status,      
                'email' => $request->email,
                'password' => $hashedPassword,
            ];       
        
        if( $request->id){
           
            $id = $request->id;
            AdminModel::where('id', $id)
            ->update($admin_data);
          
        } else {
           
            $adminModel = AdminModel::create($admin_data);
        }
        return redirect()->route('admin.view');

        
    }
    public function login(Request $request)
    {
        
    //     $email = $request->email;
    //     $password = $request->password;
    //     $hashedPassword = Hash::make($request->password);
    //     $admin_data = AdminModel::where('email',$email)->where('pasword',$hashedPassword)->get();
    // //   dd($admin_data);
     

    //     if($admin_data){
    //        // dd("jhvgkjv");
    //         return view('dashboard');
    //     }
            
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
           $admin_id = $request->admin_id;
           //  dd($role_id);
           $role_id =  $request->role_id;
           foreach ($role_id as $role_id) {
               $roles_permissions[] = [
                   'admin_id' => $admin_id,
                   'role_id' => $role_id,
               ];
           }
           DB::table('admin_roles')->where('admin_id', $admin_id)->delete();
   
           $roles_permissions_model = AdminRoles::insert($roles_permissions);
   
           return redirect()->route('admin.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud = AdminModel::find($id);
        return view('admin/addAdmin', compact('crud'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminModel $adminModel)
    {

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud = AdminModel::find($id);  
        $crud->delete(); 
        return redirect()->route('admin.view');
    }
}
