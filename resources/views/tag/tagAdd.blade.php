@extends('layout.app')
@section('main')


<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Tag</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="form" method="post" action="{{route('tag.store')}}">
            @csrf   
              <div class="box-body">
                <div class="form-group">
                  <label for="tag_name">Tag Name</label>
                  <input type="text" class="form-control" name="tag_name" id="tag_name" placeholder="Enter tag Name">
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

  