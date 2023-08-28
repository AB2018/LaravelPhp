<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin_data = AdminModel::paginate(3);
        return view('admin/listAdmin', compact('admin_data'));
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
                'pasword' => $hashedPassword,
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
        
        $email = $request->email;
        $password = $request->password;
        $hashedPassword = Hash::make($request->password);
        $admin_data = AdminModel::where('email',$email)->where('pasword',$hashedPassword)->get();
    //   dd($admin_data);
     

        if($admin_data){
           // dd("jhvgkjv");
            return view('dashboard');
        }
            
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
