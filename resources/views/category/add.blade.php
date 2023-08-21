@extends('layout.app')
@section('main')
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add Category</h3>
          <div class="box-tools pull-right">
            <a href="{{route('category.view')}}" class="btn btn-default">Cancel</a>
          </div>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form id="form" method="post" action="{{route('category.store')}}">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="category_name">Category Name</label>
              <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter Category Name">
              @error('category_name')
                <p style="color:red">{{ $message }}</p>
                @enderror
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary" onclick="check()">Submit</button>
            <a href="{{route('category.view')}}" class="btn btn-default">Back</a>
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
<script src="{{ asset('admin_asset/validation/category.validation.js') }}"></script>



@endsection