<?php

namespace App\Http\Controllers;

use App\Models\LikeDislikeModel;
use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

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
    public function likeUnlikePost(Request $request)
    {
        //dd($request);
       
        $userId = Auth::guard('uservalidate')->user()->id;

        $postId = $request->post_id;
        $type = $request->likeUnlike;
       
        $userlikeUnlike = DB::table('like_dislike')
            ->select('like_dislike.type')
            ->where('post_id', $postId)
            ->where('user_id', $userId)
            ->first();
        if (!$userlikeUnlike) {
          
           // dump("exist");
            LikeDislikeModel::create([
                'user_id' => $userId,
                'post_id' => $postId,
                'type' => $type,
                'action_on' => Carbon::now()

            ]);
           
          $message = "added like or dislike";
        } else if ($userlikeUnlike->type == $type) {
           
           // dump("second");
            $deleteData = LikeDislikeModel::where('post_id', $postId)->where('user_id', $userId)->delete();
           // return response()->json(['message' => $deleteData, 'type' => $type]);
           $message = "remove like or dislike";
        } else {
        
            $unlikeData = LikeDislikeModel::where('post_id', $postId)->where('user_id', $userId)->update(["type" => $type]);
           // return response()->json(['message' => $unlikeData, 'type' => $type]);
           $message = "update like or dislike";
        }
        $likeData = LikeDislikeModel::where('post_id', $postId)->where('type', 1)->count();
        $dislikeData = LikeDislikeModel::where('post_id', $postId)->where('type', 0)->count();
        $userType = LikeDislikeModel:: select('type')
        ->where('post_id', $postId)
        ->where('user_id', $userId)
        ->get()->toArray();
        
        if(empty($userType)){
            $typeOfUser = null;   
        }
        else{
            $typeOfUser = $userType[0]['type'];
        }
        
        return response()->json(['message'=>$message, 'likeData' => $likeData, 'dislikeData' => $dislikeData ,'typeOfUser'=>$typeOfUser]);
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
