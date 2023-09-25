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
        //\DB::connection()->enableQueryLog();
       // $bp = PostModel::with('post_tag')->get()->toArray();

        //dd($bp);


       // dd(\DB::getQueryLog());
       // $PostTagModel = PostModel::post_tag()->find(63);
       
       // dd($bp->toArray());
       $roles = PostModel::with('tag')->get()->toArray();;
      // $roles = TagModel::with('post')->get()->toArray();;
        //dd($roles);
         // dd(\DB::getQueryLog());


         if($request->ajax()){
            $cruds = PostModel::where('status', 'Published')->get()->toArray();
            dd($cruds);
            
         }
         else
         {
            $cruds = PostModel::paginate(3);
         }
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
        return view('post/addPost', ['get' => $get, 'getTag' => $getTag]);
    }

    public function published(Request $request)
    {
        $published = 'Published';
        $notpublished = 'Not Published';
        $id = $request->id;
       //dd($request->get('status') );

        if ($request->get('status') == "Published") {
           
        $data['status'] = $published;
        PostModel::where('id', $id)->update($data);
        }
        else{
            $data['status'] = $notpublished;
            PostModel::where('id', $id)->update($data);
        }

        return response()->json(['success'=>'Status change successfully.']);
       

        
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

        $input = $request->except(['_token','tag_id','category_id','image','editor1']);
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
        $input = array_merge($input,$new_input);
       // dd($input);
        $request->image->storeAs('public/post_image', $fileName);

        $post_Model = PostModel::create($input);
     //   dd($post);
        //$request->image->move(public_path('img'), $fileName);

        // $post_Model = new PostModel();
        // $post_Model->title =  $request->get('title');
        // $post_Model->status =  $request->get('status');
        // $post_Model->subtitle =  $request->get('subtitle');
        // $post_Model->photo =    $fileName;
        // $post_Model->posted_by =  1;
        // $post_Model->body =  $request->get('editor1');
        // $post_Model->save();

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

        return redirect()->route('post.view');
  
        // $post_category_model = new PostCategoryModel();
        // $post_category_model->category_id = $id;
        // $post_category_model->save();
       
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

    // public function getCategory()
    // {
    //     $get = Crud::all();
    //     $getTag = TagModel::all();
    //     return view('post/addPost', ['get' => $get, 'getTag' => $getTag]);
    // }
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
        //$bp = PostModel::with('post_tag')->get()->toArray();
        
        $crud = PostModel::with('post_tag','post_category')->find($id);
        //dd($crud);
       // dd($getCategoryId);
        //$crud->post_tag;
        //dd($get_tag_id->);
      //  dd($tag_id);
   
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

        $post_id = $request->id;
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
        $crud=PostModel::find($id);  
        $crud->delete(); 
        PostCategoryModel::where('post_id', $id)->delete();
      
        return redirect()->route('post.view');
    }
}
