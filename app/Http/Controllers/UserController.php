<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use App\Models\User;
use App\Models\UserModel;
use App\Models\UserVerify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Str;




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

        $email = $request->email;
        $checkEmail = UserModel::where('email', $email)->exists();


        $verifyEmail = UserModel::where('email', $email)
            ->where('is_email_verified', 1)
            ->first();
        if (!$checkEmail) {
            $emailNotExist = 'Email does not exist';
            return Response::json($emailNotExist);
        } else if (!$verifyEmail) {
            $emailfail = 'Please verify your email';
            return Response::json($emailfail);
        } else if (Auth::guard('uservalidate')->attempt($credentials)) {
            //dd(Auth::guard('uservalidate')->user());
            $id = Auth::guard('uservalidate')->user()->id;
            $countPost = PostModel::with('usercheck_post')->where('posted_by', '=', $id)->count();
            Session::put('postCount', $countPost);
           // dd($countPost);
            $success = 'success';
            return Response::json($success);
        } else {
            $fail = 'Email or password not match';
            return Response::json($fail);
        }
    }


    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();


        $message = 'Sorry your email cannot be identified.';

        if (!is_null($verifyUser)) {
            $user = $verifyUser->user;

            if (!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }

        return redirect()->route('home')->with('message', $message);
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
            'name' => 'required|regex:/^[a-zA-Z]+$/u|max:25',
            'contact' => 'required|digits:10',
            'email' => 'required|email',
            'passwordd' => 'required|between:6,10',
            // 'password_confirmation' => 'required,confirmed ',
        ]);


        $post_data = UserModel::where('email', $request->email)->exists();
        // $post_data = UserModel::where('email', '=',  $request->email);
        //$post_data = UserModel::where('email', $request->email)->exists();

        if (!($post_data)) {

            $hashedPassword = Hash::make($request->passwordd);
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

            Mail::send('site.emailVerificationEmail', ['token' => $token], function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('Email Verification Mail');
            });
            return back()->with('message', 'We have e-mailed you, Please verify the e-mail');
            //return redirect("/user/register")->withSuccess('Great! You have Successfully logged in');
        } else {

            // return Response::json(array('msg' => 'true'));
            return back()->with('emailExistMessage', 'Email alreasdy exists');
        }
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

        return view('site/profile', compact('crud'));
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
        if (Auth::guard('uservalidate')->check()) {
            Auth::guard('uservalidate')->logout();
            return redirect('/');
        }

        // $this->guard('uservalidate')->logout();
        // $request->session()->invalidate();
        // Auth::guard('uservalidate')->logout();
        // $request->session()->flush();
        // $request->session()->invalidate();
        // return redirect('/');
    }

    public function checkEmail(Request $request)
    {

        $email = $request->email;
        //dd($request->email);

        $post_data = UserModel::where('email', $request->email)->exists();
        $user = UserModel::where('email', $email)->first();
        //dd($email);

        if ($post_data == null) {
            echo "true";
        } else {
            echo "false";
        }
    }
}
