@extends('layout.app')
@section('main')
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Admin List</h3>
          <div class="box-tools pull-right">
            <a href="{{route('admin.show')}}" class="btn btn-primary">Add Admin</a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Status</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($admin_data as $crud)
              <tr>
                <td>{{$crud->id}}</td>
                <td>{{$crud->name}}</td>
                <td>{{$crud->contact}}</td>
                <td>{{$crud->status}}</td>
                <td>{{$crud->email}}</td>
                <td>
                  <a class="fa fa-edit" style='font-size:20px;color:#24333b' href="{{route('admin.edit',['id'=>$crud->id])}}" ></a>
                  <a class="fa fa-trash" style='font-size:20px;color:red' href="" onclick="return confirm('Are you sure to delete?')"></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="box-footer clearfix">
          {{ $admin_data->links() }}
        </div>
      </div>
</section>



@endsection