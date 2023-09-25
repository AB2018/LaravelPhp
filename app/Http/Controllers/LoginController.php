<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\RoleModel;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\checkInput;

class LoginController extends Controller
{
    public function show()
    {
        return view('login.login');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //dd($credentials);
        //$hashedPassword = Hash::make($request->password);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
           
            $user_role = Auth()->user();
           
            $user_data=[
                'id' => $user_role->id ,
                'name' =>  $user_role->name ,
                'email' =>  $user_role->email,
                
            ];
            $admin_data = AdminModel::with('roles.permissions')->find($user_role->id);
            foreach($admin_data->roles as $role ){
                $user_data1[$role->id ]= $role->slug;

                foreach($role->permissions as $permissions ){
                    $user_data2[$permissions->id]= $permissions->slug;
                }
            }
           
         $user_data['role'] =  $user_data1;
           $user_data['permission'] =  $user_data2;
          // dd($user_data);
            $request->session()->put('user', $user_data);
            $value = $request->session()->get('user');
           
        return view('dashboard');

        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logOut(Request $request){
    //     Auth::logout();
    //     $request->session()->flush();
    // return redirect('/log');
    if(Auth::guard()->check())
    {
        Auth::guard()->logout();
        return redirect('/log');
    }

    $this->guard()->logout();
    $request->session()->invalidate();

    return $this->loggedOut($request) ?: redirect('/');
    }
}
