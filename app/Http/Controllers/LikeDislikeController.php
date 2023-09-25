<?php

namespace App\Http\Controllers;

use App\Models\LikeDislikeModel;
use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LikeDislikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $profile = $request->all();
        dd($profile);

    //    $id = Auth::guard('uservalidate')->user()->id;
    //     UserModel::where('id', $id)
    //     ->update($profile);
    //     $success = 'success';
    //     return Response::json($success); 
    }
    public function likePost(Request $request, $postId)
    { 
        $userId =Auth::guard('uservalidate')->user()->id;
      //  dd($userId);
        $postId = $request->id;
        $existingInteraction = LikeDislikeModel::where('user_id', $userId)
            ->where('post_id', $postId)
            ->first();

        if (!$existingInteraction) {
           // dd("jhbj");
            LikeDislikeModel::create([
                'user_id' => $userId,
                'post_id' => $postId,
                'type' => 1,
                'action_on' => Carbon::now()
               
            ]);

            return response()->json(['message' => 'Post liked successfully']);
        }

        return response()->json(['message' => 'You have already liked this post'], 409);
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
        //
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
