@extends('layout.app')
@section('main')


<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Tag</h3>
              <div class="box-tools pull-right">
                <a href="{{route('tag.view')}}" class="btn btn-primary">Back</a>
            </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="form" method="post" action="{{route('tag.update')}}">
              
            @csrf   
             <input type="hidden" name="id" value="{{$crud->id}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="tag_name">Tag Name</label>
                  <input type="text" class="form-control" name="tag_name" id="tag_name" value="{{$crud->tag_Name}}">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="">Submit</button>
              </div>
            </form>
          </div>

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>

@endsection
@section('js')

<script src="{{ asset('plugins/jQuery/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin_asset/validation/tag.validation.js') }}"></script>



@endsection