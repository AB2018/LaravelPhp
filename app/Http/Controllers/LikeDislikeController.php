<?php

namespace App\Http\Controllers;

use App\Models\LikeDislikeModel;
use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
       
    }
    public function likeUnlikePost(Request $request, $postId)
    {
        $userId = Auth::guard('uservalidate')->user()->id;

        $postId = $request->id;
        $type = $request->likeUnlike;
        
        // $existing = LikeDislikeModel::where('user_id', $userId)
        //     ->where('post_id', $postId)
        //     ->first();
        $userlikeUnlike = DB::table('like_dislike')
            ->select('like_dislike.type')
            ->where('post_id', $postId)
            ->where('user_id', $userId)
            ->first();
           // dd($userlikeUnlike);
        if (!$userlikeUnlike) {
           // dump("exist");
            LikeDislikeModel::create([
                'user_id' => $userId,
                'post_id' => $postId,
                'type' => $type,
                'action_on' => Carbon::now()

            ]);
            $likeData = LikeDislikeModel::where('post_id', $postId)->where('type', $type)->count();

            return response()->json(['message' => $likeData, 'type' => $type]);
        } else if ($userlikeUnlike->type == $type) {
           // dump("second");
            $deleteData = LikeDislikeModel::where('post_id', $postId)->where('user_id', $userId)->delete();
            return response()->json(['message' => $deleteData, 'type' => $type]);
        } else {
           // dump("third");
            $unlikeData = LikeDislikeModel::where('post_id', $postId)->where('user_id', $userId)->update(["type" => $type]);
            return response()->json(['message' => $unlikeData, 'type' => $type]);
        }
      //  dd("end");
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
