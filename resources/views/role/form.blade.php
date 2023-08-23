@extends('layout.app')
@section('main')


<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Role</h3>
              <div class="box-tools pull-right">
              <a href="" class="btn btn-default">Cancel</a>
              </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="form" method="post" action="{{route('role.store')}}">
            @csrf   
              <div class="box-body">
              <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <input type="hidden" name="id" value="{{ old('id', isset($crud) ? $crud->id : '') }}">
                            <label class="required">Role</label>
                            <input type="text" name="Role" id="Role" class="form-control" style="width: 100%;" value="{{ old('role', isset($crud) ? $crud->role : '') }}">
                            <span id="availability"></span>
                            @error('role')
                            <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required">Name</label>
                            <input type="text" name="name" id="name" readonly class="form-control" style="width: 100%;" value="{{ old('name', isset($crud) ? $crud->name : '') }}">
                            @error('role')
                            <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                <label class="required">Status</label>
                                <select class="form-control select2" name="status" data-placeholder="Select a status"  >
                                    <option >select</option>
                               
                                    <option value="1" {{ isset($crud)? ($crud->status == '1'? 'selected': '') : '' }} >Active</option>
                                    <option value="0" {{ isset($crud)? ($crud->status == '0'? 'selected': '') : '' }}>Inactive</option>
                                </select>
                                @error('status')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" id="check" class="btn btn-primary">Submit</button>
                <a href="" class="btn btn-default">Back</a>
              </div>
           
            </form>
          </div>

        </div>
      </div>
    </section>
    

@endsection
@section('js')

<script src="{{ asset('plugins/jQuery/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin_asset/validation/role.validation.js') }}"></script>
<script>
var roleCheck = "{{ route('role.check') }}";
var token = "{{ csrf_token() }}";
</script>

@endsection



  