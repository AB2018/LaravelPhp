<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\CategoryModel;
use App\Models\Crud;
use App\Models\LikeDislikeModel;
use App\Models\PostModel;
use App\Models\TagModel;
use App\Models\UserModel;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function query()
    {
        $datas = DB::table('post')
            ->leftjoin('admin', 'post.posted_by_admin', '=', 'admin.id')
            ->leftJoin('user', 'post.posted_by', '=', 'user.id')
            ->join('post_category', 'post.id', '=', 'post_category.post_id')
            ->join('category', 'category.id', '=', 'post_category.category_id')
            ->join('post_tag', 'post.id', '=', 'post_tag.post_id')
            ->join('tag', 'tag.id', '=', 'post_tag.tag_id')
            // ->leftjoin('like_dislike', 'like_dislike.post_id', '=', 'post.id')
            ->select(
                'post.id',
                'post.title',
                'post.status',
                'post.subtitle',
                'post.created_at',
                'user.id as user_id',
                'tag.tag_name',
                'category.name as category_name',
                //'like_dislike.type',
                DB::raw('IF(admin.name is null, user.name, admin.name) as name'),

            );
    }

    public function index(Request $request)
    {
        //  dd("jhbh");
        $id = $request->category_id;
        $tag_id = $request->tag_id;
        $getCategory = CategoryModel::all();
        $getTag = TagModel::all();
        $post = PostModel::all();

        $datas = DB::table('post')
            ->leftjoin('admin', 'post.posted_by_admin', '=', 'admin.id')
            ->leftJoin('user', 'post.posted_by', '=', 'user.id')
            ->join('post_category', 'post.id', '=', 'post_category.post_id')
            ->join('category', 'category.id', '=', 'post_category.category_id')
            ->join('post_tag', 'post.id', '=', 'post_tag.post_id')
            ->join('tag', 'tag.id', '=', 'post_tag.tag_id')
            // ->leftjoin('like_dislike', 'like_dislike.post_id', '=', 'post.id')
            ->select(
                'post.id',
                'post.title',
                'post.status',
                'post.subtitle',
                'post.created_at',
                'user.id as user_id',
                'tag.tag_name',
                'category.name as category_name',
                //'like_dislike.type',
                DB::raw('IF(admin.name is null, user.name, admin.name) as name'),

            );

        //$userid = 31;
        $userlikeUnlike = [];
        if (Auth::guard('uservalidate')->user()) {
            $userid = Auth::guard('uservalidate')->user()->id;
            $userlikeUnlike = DB::table('like_dislike')
                ->select('post_id', 'like_dislike.type')
                ->where('user_id', $userid)
                ->get()->toArray();
        }
       // dd($userlikeUnlike );


        $likeUnlike = DB::table('like_dislike')
            ->select('post_id', DB::raw('sum(case when type = 1 then 1 else 0 end) as like_count,
                 sum(case when type = 0 then 1 else 0 end) as dis_like_count'))
            ->groupBy('post_id')
            ->get()->toArray();
            //dd($likeUnlike);
        $cat_id = $request->category_id;

        if ($request->category_id) {

            $datas = $datas->where('category_id', $request->category_id);
        }
        $tag_id = [];

        if ($request->tag_id) {

            $datas = $datas->whereIn('tag_id', $request->tag_id);
            $tag_id = $request->tag_id;
        }

        $datas = $datas->where('post.status', '=', '1')
            ->get();

        $post_data = [];
        $likeUnlikedata1 = [];
        $userlikeUnlike1  = [];

        foreach ($userlikeUnlike as $userlikeUnlikeData) {


            $userlikeUnlike1[$userlikeUnlikeData->post_id] =  [

                'type' => $userlikeUnlikeData->type,

            ];
        }
        //  dd($userlikeUnlike1);
        foreach ($likeUnlike as $likeUnlikeData) {


            $likeUnlikedata1[$likeUnlikeData->post_id] =  [

                'like_count' => $likeUnlikeData->like_count,
                'dis_like_count' => $likeUnlikeData->dis_like_count
            ];
        }
        //dd($likeUnlikedata1);

        foreach ($datas as $data) {
            //dd($likeUnlikedata);
            if (!(array_key_exists($data->id, $post_data))) {
                $post = [
                    'id' => $data->id,
                    'title' => $data->title,
                    'subtitle' => $data->subtitle,
                    'created_at' => $data->created_at,
                    'user_id' => $data->user_id,
                    'tag_name' => [$data->tag_name],
                    'name' => $data->name,
                    'category_name' => [$data->category_name],
                    'like_count' => 0,
                    'dis_like_Count' => 0,
                    'type' => null,


                ];

                if (array_key_exists($data->id, $likeUnlikedata1)) {

                    $post['like_count'] =  $likeUnlikedata1[$data->id]['like_count'];
                    $post['dis_like_Count'] =  $likeUnlikedata1[$data->id]['dis_like_count'];
                } else {
                    $post;
                    //  dd($post);
                }

                if (array_key_exists($data->id, $userlikeUnlike1)) {
                    //  dd("ghgkjj");

                    $post['type'] =  $userlikeUnlike1[$data->id]['type'];
                } else {
                    $post;
                }
                $post_data[$data->id] = $post;
            }

            if (!(in_array($data->tag_name, $post_data[$data->id]['tag_name']))) {
                array_push($post_data[$data->id]['tag_name'], $data->tag_name);
            } else if (!(in_array($data->category_name, $post_data[$data->id]['category_name']))) {
                array_push($post_data[$data->id]['category_name'], $data->category_name);
            }
        }

        return view('site/home', compact('post_data', 'getCategory', 'getTag', 'cat_id', 'tag_id'));
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
    public function register(Request $request)
    {

        return view('site/register');
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
    public function filter(Request $request)
    {
        $filterValue = $request->input('filter_value');

        $post_data = PostModel::with('category')->where('id', '=', $filterValue)->get()->toArray();
        return response()->json($post_data);
    }


    public function show($id)
    {
        $post_data = [];
        $userlikeUnlike = [];
        $likeUnlikedata1 = [];
        $userlikeUnlike1  = [];
        $userid = Auth::guard('uservalidate')->user()->id;
        $userlikeUnlike2 = DB::table('like_dislike')
            ->select('like_dislike.post_id', 'like_dislike.type')
            ->where('user_id', $userid)
            ->get()->toArray();
           // dd($userlikeUnlike2);
        $likeUnlike = DB::table('like_dislike')
            ->select('post_id', DB::raw('sum(case when type = 1 then 1 else 0 end) as like_count,
         sum(case when type = 0 then 1 else 0 end) as dis_like_count'))
         ->groupBy('post_id')
           // ->where('post_id', $id)
            ->get()->toArray();
          // dd($likeUnlike);
        $datas = DB::table('post')
            ->leftjoin('admin', 'post.posted_by_admin', '=', 'admin.id')
            ->leftJoin('user', 'post.posted_by', '=', 'user.id')
            ->join('post_category', 'post.id', '=', 'post_category.post_id')
            ->join('category', 'category.id', '=', 'post_category.category_id')
            ->join('post_tag', 'post.id', '=', 'post_tag.post_id')
            ->join('tag', 'tag.id', '=', 'post_tag.tag_id')
            // ->leftjoin('like_dislike', 'like_dislike.post_id', '=', 'post.id')
            ->select(
                'post.id',
                'post.title',
                'post.status',
                'post.photo',
                'post.body',
                'post.subtitle',
                'post.created_at',
                'user.id as user_id',
                'tag.tag_name',
                'category.name as category_name',
                //'like_dislike.type',
                DB::raw('IF(admin.name is null, user.name, admin.name) as name'),


            )->where('post.id', '=', $id)
            ->get();

        foreach ($userlikeUnlike2 as $userlikeUnlikeData) {


            $userlikeUnlike1[$userlikeUnlikeData->post_id] =  [

                'type' => $userlikeUnlikeData->type,

            ];
        
            }
         
        foreach ($likeUnlike as $likeUnlikeData) {


            $likeUnlikedata1[$likeUnlikeData->post_id] =  [

                'like_count' => $likeUnlikeData->like_count,
                'dis_like_count' => $likeUnlikeData->dis_like_count
            ];
        }
        foreach ($datas as $data) {
            //dd($likeUnlikedata);
            if (!(array_key_exists($data->id, $post_data))) {
                $post = [
                    'id' => $data->id,
                    'title' => $data->title,
                    'photo' => $data->photo,
                    'body' => $data->body,
                    'subtitle' => $data->subtitle,
                    'created_at' => $data->created_at,
                    'user_id' => $data->user_id,
                    'tag_name' => [$data->tag_name],
                    'name' => $data->name,
                    'category_name' => [$data->category_name],
                    'like_count' => 0,
                    'dis_like_Count' => 0,
                    'type' => 2,

                ];
                if (array_key_exists($data->id, $likeUnlikedata1)) {

                    $post['like_count'] =  $likeUnlikedata1[$data->id]['like_count'];
                    $post['dis_like_Count'] =  $likeUnlikedata1[$data->id]['dis_like_count'];
                } else {
                    $post;
                    //  dd($post);
                }
              //  dd($data->id,$userlikeUnlike1[$data->id]['type']);

                if (array_key_exists($data->id, $userlikeUnlike1)) {
                     

                    $post['type'] =  $userlikeUnlike1[$data->id]['type'];
                } else {
                    $post;
                }
              //  dd($post['type'] );

                $post_data[$data->id] = $post;
               // dd($post_data);
            }


            if (!(in_array($data->tag_name, $post_data[$data->id]['tag_name']))) {
                array_push($post_data[$data->id]['tag_name'], $data->tag_name);
            } else if (!(in_array($data->category_name, $post_data[$data->id]['category_name']))) {
                array_push($post_data[$data->id]['category_name'], $data->category_name);
            }
        }

      // dd($post_data);

        //  $post_data = PostModel::with('admin_post', 'usercheck_post')->where('id', '=', $id)->get()->toArray();


        return view('site/postDetails', compact('post_data', 'likeUnlike'));
    }

    
}
