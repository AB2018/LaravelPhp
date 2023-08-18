@extends('layout.app')
@section('main')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tag Name</th>
                <th>Created Date</th>
                <th>Updated Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($cruds as $crud)
              <tr>
                <td>{{$crud->id}}</td>
                <td>{{$crud->tag_Name}}</td>
                <td>{{$crud->created_at}}</td>
                <td>{{$crud->updated_at}}</td>
                <td>
                <a class="fa fa-edit" style='font-size:20px;color:#24333b'  href="{{route('tag.edit',['id'=>$crud->id])}}" ></a>
               <a class="fa fa-trash" style='font-size:20px;color:red' href="{{ route('tag.destroy', ['id'=>$crud->id])}}"  onclick="return confirm('Are you sure to delete?')"></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <a href="{{route('tag.show')}}" class="tn-block btn-primary btn-lg">Back</a>

</section>

@endsection