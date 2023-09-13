<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\Crud;
use App\Models\PostModel;
use App\Models\TagModel;
use App\Models\UserModel;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->category_id;
        // dd($request->category_id);
        $getCategory = Crud::all();
        $getTag = TagModel::all();
        if ($request->category_id) {
            $post_data = DB::table('post')
                ->leftjoin('admin', 'post.posted_by_admin', '=', 'admin.id')
                ->leftJoin('user', 'post.posted_by', '=', 'user.id')
                ->join('post_category', 'post.id', '=', 'post_category.post_id')
                ->join('category', 'category.id', '=', 'post_category.category_id')
                ->join('post_tag', 'post.id', '=', 'post_tag.post_id')
                ->join('tag', 'tag.id', '=', 'post_tag.tag_id')
                ->select(
                    'post.id',
                    'post.title',
                    'post.status',
                    'post.subtitle',
                    'post.created_at',
                    DB::raw('group_concat(distinct(tag.tag_name )) as tag_name'),
                    DB::raw('group_concat(distinct(category.name) ) as category_name'),
                    DB::raw('IF(admin.name is null, user.name, admin.name) as name')
                )
                ->where('post.status', '=', 'Published')
                ->where('category_id', '=', $id)
                ->groupBy('post.id')
                ->get()->toArray();
        } else {

            $post_data = DB::table('post')
                ->leftjoin('admin', 'post.posted_by_admin', '=', 'admin.id')
                ->leftJoin('user', 'post.posted_by', '=', 'user.id')
                ->join('post_category', 'post.id', '=', 'post_category.post_id')
                ->join('category', 'category.id', '=', 'post_category.category_id')
                ->join('post_tag', 'post.id', '=', 'post_tag.post_id')
                ->join('tag', 'tag.id', '=', 'post_tag.tag_id')
                ->select(
                    'post.id',
                    'post.title',
                    'post.status',
                    'post.subtitle',
                    'post.created_at',
                    DB::raw('group_concat(distinct(tag.tag_name )) as tag_name'),
                    DB::raw('group_concat(distinct(category.name) ) as category_name'),
                    DB::raw('IF(admin.name is null, user.name, admin.name) as name')
                )
                ->where('post.status', '=', 'Published')
                ->groupBy('post.id')
                ->get()->toArray();
        }

        return view('site/home', compact('post_data', 'getCategory', 'getTag'));
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


        $id = $request->category_id;
        $post_data = PostModel::with('category')->where('id', '=', $id)->get()->toArray();
        // $post_data = Crud::with('post')->where('id','=',$id)->get()->toArray();
        dd($post_data);
    }
    public function show($id)
    {


        $post_data = PostModel::with('admin_post', 'usercheck_post')->where('id', '=', $id)->get()->toArray();
        return view('site/postDetails', compact('post_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
