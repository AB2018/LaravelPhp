@extends('layout.app')
@section('main')
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Role List</h3>
          <div class="box-tools pull-right">
            <a href="{{route('role.add')}}" class="btn btn-primary">Add Role</a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Role</th>
                <th>Name</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($role_data as $crud)
              <tr>
                <td>{{$crud->id}}</td>
                <td>{{$crud->role}}</td>
                <td>{{$crud->name}}</td>
                <td>{{$crud->status}}</td>
                <td>
                  <a class="fa fa-edit" style='font-size:20px;color:#24333b' href="{{route('role.edit',['id'=>$crud->id])}}"></a>
                  <a class="fa fa-trash" style='font-size:20px;color:red' href="{{ route('role.destroy', ['id'=>$crud->id])}}"  onclick="return confirm('Are you sure to delete?')""  onclick="return confirm('Are you sure to delete?')"></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="box-footer clearfix">
          {{ $role_data->links() }}
        </div>
      </div>
</section>



@endsection