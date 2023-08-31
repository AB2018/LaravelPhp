@extends('layout.app')
@section('main')
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Permission List</h3>
          <div class="box-tools pull-right">
            <a href="{{route('permission.add')}}" class="btn btn-primary">Add Permission</a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Slug</th>
                <th>Name</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($permission_data as $crud)
              <tr>
                <td>{{$crud->id}}</td>
                <td>{{$crud->slug}}</td>
                <td>{{$crud->name}}</td>
                <td>{{$crud->status}}</td>
                <td>
                  <a class="fa fa-edit" style='font-size:20px;color:#24333b' href="{{route('permission.edit',['id'=>$crud->id])}}"></a>
                  <a class="fa fa-trash" style='font-size:20px;color:red' href="{{ route('permission.destroy', ['id'=>$crud->id])}}"  onclick="return confirm('Are you sure to delete?')""  onclick="return confirm('Are you sure to delete?')"></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="box-footer clearfix">
          {{ $permission_data->links() }}
        </div>
      </div>
</section>



@endsection