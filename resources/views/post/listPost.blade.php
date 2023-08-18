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
                <th>Title</th>
                <th>Subtitle</th>
                <th>Status</th>
                <th>Body</th>
                <th>Photo</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($cruds as $crud)
              <tr>
                <td>{{$crud->id}}</td>
                <td>{{$crud->title}}</td>
                <td>{{$crud->subtitle}}</td>
                <td>{{$crud->status}}</td>
                <td>{!!$crud->body!!}</td>
                <td><img src="{{ asset('storage/post_image/'.$crud->photo) }}" width="80" height="40"></td>
                <td>
                <a class="fa fa-edit" style='font-size:20px;color:#24333b' href="{{route('post.edit',['id'=>$crud->id])}}"></a>
               <a class="fa fa-trash" style='font-size:20px;color:red' href="{{route('post.destroy',['id'=>$crud->id])}}" onclick="return confirm('Are you sure to delete?')"></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <a href="{{route('post.show')}}" class="tn-block btn-primary btn-lg">Back</a>

</section>

@endsection