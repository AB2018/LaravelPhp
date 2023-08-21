<?php

namespace App\Http\Controllers;

use App\Models\TagModel;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\TableRow;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruds = TagModel::all();

        return view('tag/tagList', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('tag/tagAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tag_name' => 'required',
        ]);
        
        $crud = new TagModel();
        $crud->tag_Name =  $request->get('tag_name');
        $crud->save();
        return redirect()->route('tag.view');
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
        
        $crud = TagModel::find($id);
        return view('tag/tagEdit', compact('crud'));
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
       
        $id = $request->id;
      
        $crud = TagModel::find($id);
      
        $crud->tag_Name =  $request->get('tag_name');

        $crud->save();
        return redirect()->route('tag.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud=TagModel::find(decrypt($id));  
        $crud->delete(); 
        return redirect()->route('tag.view');
    }
}
