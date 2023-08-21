@extends('layout.app')
@section('main')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
      <div class="box-header with-border">
              <h3 class="box-title">Category List</h3>
              <div class="box-tools pull-right">
              <a href="{{route('category.show')}}" class="btn btn-primary">Add Category</a>
            </div>
            </div>
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Created Date</th>
                <th>Updated Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($cruds as $crud)
              <tr>
                <td>{{$crud->id}}</td>
                <td>{{$crud->name}}</td>
                <td>{{$crud->created_at}}</td>
                <td>{{$crud->updated_at}}</td>
                <td>
                <a class="fa fa-edit" style='font-size:20px;color:#24333b'  href="{{route('category.edit',['id'=>$crud->id])}}"></a>
               <a class="fa fa-trash" style='font-size:20px;color:red' href="{{ route('category.destroy', ['id'=>$crud->id])}}" onclick="return confirm('Are you sure to delete?')"></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="box-footer clearfix">
      
            </div>
      </div>
    </div>
  </div>

</section>

@endsection