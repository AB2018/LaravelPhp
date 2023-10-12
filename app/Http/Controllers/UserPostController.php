<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\Crud;
use App\Models\PostCategoryModel;
use App\Models\PostModel;
use App\Models\PostTagModel;
use App\Models\TagModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    {

        $roles = PostModel::with('tag')->get()->toArray();
        $cruds = PostModel::paginate(3);
        return view('post/listPost', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $get = CategoryModel::all();
        $getTag = TagModel::all();
        return view('site/userAddPost', ['get' => $get, 'getTag' => $getTag]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::guard('uservalidate')->user()->id;


        $request->validate([
            'title' => 'required',
            'editor1' => 'required',
            'image' => 'required | mimes:jpg,jpeg,png',
            'subtitle' => 'required',
            'category_id' => 'required',
            'tag_id' => 'required',

        ]);

        $input = $request->except(['_token', 'tag_id', 'category_id', 'image', 'editor1']);
        $fileName = time() . '.' . $request->image->extension();
        $new_input = [
            'body' => $request->editor1,
            'photo' => $fileName,
            'posted_by' => $id,
        ];
        $input = array_merge($input, $new_input);

        $request->image->storeAs('public/post_image', $fileName);

        $post_Model = PostModel::create($input);
        $post_id = $post_Model->id;
        $category_id =  $request->category_id;
        foreach ($category_id as $category_id1) {
            $post_category[] = [
                'category_id' => $category_id1,
                'post_id' => $post_id,

            ];
        }

        $post_category_model = PostCategoryModel::insert($post_category);

        $tag_id =  $request->tag_id;
        foreach ($tag_id as $tag_id1) {
            $post_tag[] = [
                'tag_id' => $tag_id1,
                'post_id' => $post_id,
            ];
        }
        $post_tag_model = PostTagModel::insert($post_tag);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $userid = Auth::guard('uservalidate')->user()->id;

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

        $likeUnlike = DB::table('like_dislike')
            ->select('post_id', DB::raw('sum(case when type = 1 then 1 else 0 end) as like_count,
                     sum(case when type = 0 then 1 else 0 end) as dis_like_count'))
            ->groupBy('post_id')
            ->get()->toArray();


        $datas = $datas->where('post.posted_by', $userid)
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
                    'status' => $data->status,
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

        return view('site/userPost', compact('post_data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $get = CategoryModel::all();
        $getTag = TagModel::all();
        $crud = PostModel::with('post_tag', 'post_category')->find($id);
        return view('post/editPost', compact('crud', 'get', 'getTag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        //  dd($request->all());
        $id = $request->id;

        $crud = PostModel::find($id);
        //dd($crud);

        $request->validate([
            'title' => 'required',
            'editor1' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
            'status' => 'required',
            'subtitle' => 'required',
            'category_id' => 'required',
            'tag_id' => 'required',

        ]);

        if ($request->image) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/post_image', $fileName);
            $crud->photo =  $fileName;
        } else {
            $crud->photo = $crud->photo;
        }

        $crud->title =  $request->get('title');
        $crud->subtitle =  $request->get('subtitle');
        $crud->status =  $request->get('status');
        $crud->body =  $request->get('editor1');
        // $crud->photo =  $fileName;

        $crud->save();
        return redirect()->route('post.view');
    }

    public function countPost()
    {
        $id = Auth::guard('uservalidate')->user()->id;
        $post_data = PostModel::with('admin_post')->where('id', '=', $id)->get()->toArray();
        dd($post_data);

        return view('site/profile', compact('crud'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud = PostModel::find($id);
        $crud->delete();
        PostCategoryModel::where('post_id', $id)->delete();

        return redirect()->route('post.view');
    }
}
