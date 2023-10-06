<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\Crud;
use App\Models\PostCategoryModel;
use App\Models\PostModel;
use App\Models\PostTagModel;
use App\Models\TagModel;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Nette\Utils\Json;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    public function index(Request $request)
    {
       // dd($request->category_id);
     
        //\DB::connection()->enableQueryLog();
        // $bp = PostModel::with('post_tag')->get()->toArray();

        //dd($bp);

        // dd(\DB::getQueryLog());
        // $PostTagModel = PostModel::post_tag()->find(63);

        // dd($bp->toArray());
        $post_data = [];
        $getCategory = CategoryModel::all();
        $getTag = TagModel::all();
        $roles = PostModel::with('tag')->get()->toArray();;
        // $roles = TagModel::with('post')->get()->toArray();;
        //dd($roles);
        // dd(\DB::getQueryLog());
        $datas = DB::table('post')
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
                'post.body',
                'post.photo',
                'tag.tag_name',
                'category.name as category_name',

            );
            $cat_id = $request->category_id;

            if ($request->category_id) {
              //  dd($request->category_id);
                $datas = $datas->where('category_id', $request->category_id);
            }
            $tag_id = [];
    
            if ($request->tag_id) {
    
                $datas = $datas->whereIn('tag_id', $request->tag_id);
                $tag_id = $request->tag_id;
            }
            $datas = $datas->get();
           
            foreach ($datas as $data) {
                if (!(array_key_exists($data->id, $post_data))) {
                    $post = [
                        'id' => $data->id,
                        'title' => $data->title,
                        'subtitle' => $data->subtitle,
                        'status' => $data->status,
                        'body' => $data->body,
                        'photo' => $data->photo,
                        'tag_name' => [$data->tag_name],
                        'category_name' => [$data->category_name],
                    ];
                    $post_data[$data->id] = $post;
    
                } 
                if (!(in_array($data->tag_name, $post_data[$data->id]['tag_name']))) {
                  
                    array_push($post_data[$data->id]['tag_name'], $data->tag_name);
                } else if (!(in_array($data->category_name, $post_data[$data->id]['category_name']))) {
                    array_push($post_data[$data->id]['category_name'], $data->category_name);
                }
            } 
          
           
        if ($request->ajax()) {
            $cruds = PostModel::where('status', '1')->get()->toArray();
            //dd($cruds);
        } else {
            $cruds = PostModel::paginate(3);
        }
        return view('post/listPost', compact('post_data','getCategory','cat_id','tag_id','getTag'));
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
        return view('post/addPost', ['get' => $get, 'getTag' => $getTag]);
    }

    public function published(Request $request)
    {

        $id = $request->id;

        if ($request->status == "1") {
            $data['status'] = 1;
            PostModel::where('id', $id)->update($data);
        } else {
            //echo '0';
            $data['status'] = 0;
            PostModel::where('id', $id)->update($data);
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin_id = Auth::user()->id;

        $request->validate([
            'title' => 'required',
            'editor1' => 'required',
            'image' => 'required | mimes:jpg,jpeg,png',
            'status' => 'required',
            'subtitle' => 'required',
            'category_id' => 'required',
            'tag_id' => 'required',

        ]);

        $input = $request->except(['_token', 'tag_id', 'category_id', 'image', 'editor1']);
        //$input['body'] = $request->editor1;
        //dd($input);

        // $filename = $_FILES[$request->get('image')]["name"];
        // dd("lll");
        // $tempname = $_FILES["image"]["tmp_name"];
        // $folder = "/var/www/html/phpProject/public/img/imageUpload/" . $filename;
        // move_uploaded_file($tempname, $folder);

        $fileName = time() . '.' . $request->image->extension();
        $new_input = [
            'body' => $request->editor1,
            'photo' => $fileName,
            'posted_by_admin' => $admin_id,
        ];
        $input = array_merge($input, $new_input);
        // dd($input);
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

        return redirect()->route('post.view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = decrypt($id);
       
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
     //dd("hi");
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

        $post_id = $request->id;
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
        return redirect()->route('post.view');
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
