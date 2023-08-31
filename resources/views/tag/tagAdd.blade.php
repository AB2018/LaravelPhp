@extends('layout.app')
@section('main')


<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Tag</h3>
              <div class="box-tools pull-right">
              <a href="{{route('tag.view')}}" class="btn btn-default">Cancel</a>
              </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="form" method="post" action="{{route('tag.store')}}">
            @csrf   
              <div class="box-body">
                <div class="form-group">
                  <label for="tag_name">Tag Name</label>
                  <input type="text" class="form-control" name="tag_name" style="width: 50%"  id="tag_name" placeholder="Enter tag Name">
      
                </div>
                @error('tag_name')
                <p style="color:red">{{ $message }}</p>
                @enderror
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('post.view')}}" class="btn btn-default">Back</a>
              </div>
            </form>
          </div>

        </div>
      </div>
    </section>

@endsection
@section('js')

<script src="{{ asset('plugins/jQuery/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin_asset/validation/tag.validation.js') }}"></script>

@endsection

  