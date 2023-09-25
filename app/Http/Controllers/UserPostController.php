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
            'status' => 'required',
            'subtitle' => 'required',
            'category_id' => 'required',
            'tag_id' => 'required',

        ]);

        $input = $request->except(['_token','tag_id','category_id','image','editor1']);
        $fileName = time() . '.' . $request->image->extension();
        $new_input = [
            'body' => $request->editor1,
            'photo' => $fileName,
            'posted_by' => $id,
        ];
        $input = array_merge($input,$new_input);
  
        $request->image->storeAs('public/post_image', $fileName);

        $post_Model = PostModel::create($input);
        $post_id = $post_Model->id;
        $category_id =  $request->category_id;
        foreach($category_id as $category_id1){
            $post_category[] = [
                'category_id'=>$category_id1,
                'post_id'=>$post_id,
                
            ];
        }    

        $post_category_model = PostCategoryModel::insert($post_category);

        $tag_id =  $request->tag_id;
        foreach($tag_id as $tag_id1){
            $post_tag[]=[
                'tag_id'=>$tag_id1,
                'post_id'=>$post_id,
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

        $id = Auth::guard('uservalidate')->user()->id;
      
      // dd( Session::get('postCount'));
        $cruds = PostModel::with('usercheck_post')->where('posted_by','=',$id)->get()->toArray();
    
        return view('site/userPost',compact('cruds'));
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
        $crud = PostModel::with('post_tag','post_category')->find($id);
        return view('post/editPost',compact('crud','get','getTag'));
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
       
       if($request->image){
        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/post_image', $fileName);
        $crud->photo =  $fileName;
       }
       else{
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
        $post_data = PostModel::with('admin_post')->where('id','=',$id)->get()->toArray();
        dd($post_data);
   
        return view('site/profile',compact('crud'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud=PostModel::find($id);  
        $crud->delete(); 
        PostCategoryModel::where('post_id', $id)->delete();
      
        return redirect()->route('post.view');
    }
}
