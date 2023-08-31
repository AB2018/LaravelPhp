<?php

namespace App\Http\Controllers;

use App\Models\UserModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Nette\Utils\Json;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

     
        //$hashedPassword = Hash::make($request->password);
        if (Auth::guard('uservalidate')->attempt($credentials)) {
          
        
            $success = 'success';
            return Response::json($success);
          
            
        }
        $fail = 'Email or password not match';
        return Response::json($fail);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'email' => 'required',
            'password' => 'required_if:id,id',
        ]);    
        $hashedPassword = Hash::make($request->password);
          $user_data = [
                'name' => $request->name,
                'contact' => $request->contact,     
                'email' => $request->email,
                'password' => $hashedPassword,
            ];       
        
        if( $request->id){
           
            $id = $request->id;
            UserModel::where('id', $id)
            ->update($user_data);
          
        } else {
           
            $userModel = UserModel::create($user_data);
        }
        return redirect()->route('admin.view');
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
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
