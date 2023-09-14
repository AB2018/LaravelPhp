<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use App\Models\User;
use App\Models\UserModel;
use App\Models\UserVerify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Nette\Utils\Json;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::guard('uservalidate')->user()->id;   
        $cruds = UserModel::find($id)->get()->toArray();
        return view('/site/profile', compact('cruds'));
    }


    public function authenticate(Request $request)
    {
       

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

     
        //$hashedPassword = Hash::make($request->password);
        if (Auth::guard('uservalidate')->attempt($credentials)) { 

            $id = Auth::guard('uservalidate')->user()->id;
            $countPost = PostModel::with('usercheck_post')->where('posted_by','=',$id)->count();
            Session::put('postCount', $countPost);

            $success = 'success';
            return Response::json($success);  
            
        }
        $fail = 'Email or password not match';
        return Response::json($fail);
        $id = Auth::guard('uservalidate')->user()->id;
      
       
    }

    public function postRegistration(Request $request)
    {  
        
    }
    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();
  
        $message = 'Sorry your email cannot be identified.';
  
        if(!is_null($verifyUser) ){
            $user = $verifyUser->user;
              
            if(!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }
  
      return redirect()->route('login')->with('message', $message);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      //  dd($request->all());
        
        $profile = $request->validate([
            'profession' => ['required'],
            'description' => ['required'],
        ]);

       $id = Auth::guard('uservalidate')->user()->id;
        UserModel::where('id', $id)
        ->update($profile);
        $success = 'success';
        return Response::json($success); 
        

        //$roleModel = UserModel::create($profession);

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
            'password' => 'required|between:6,16|confirmed',
            'password_confirmation' => 'required ',
        ]);    
        $hashedPassword = Hash::make($request->password);
          $user_data = [
                'name' => $request->name,
                'contact' => $request->contact,     
                'email' => $request->email,
                'password' => $hashedPassword,
                'is_email_verified' => 0
            ];       
         
            $userModel = UserModel::create($user_data);
            $token = Str::random(64);
        UserVerify::create([
              'user_id' => $userModel->id, 
              'token' => $token
            ]);
  
        Mail::send('site.emailVerificationEmail', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Email Verification Mail');
          });
         
        return redirect("/user/register")->withSuccess('Great! You have Successfully loggedin');
       // return redirect()->route('admin.view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = Auth::guard('uservalidate')->user()->id;
     
         $crud = UserModel::find($id);
   
        return view('site/profile',compact('crud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    //     $crud = User::find($id);
    //    dd($crud);
    //     return view('site/profile', compact('crud'));
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
    public function logOut(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect('/');
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
