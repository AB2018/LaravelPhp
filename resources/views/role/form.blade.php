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
              <a href="{{route('role.view')}}" class="btn btn-default">Cancel</a>
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
                            <label class="required">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" style="width: 100%;" value="{{ old('slug', isset($crud) ? $crud->slug : '') }}">
                            <span id="availability"></span>
                            @if (\Session::has('slugExist'))
                                            <div  style="color:red">
                                                <ul>
                                                    <li>{!! \Session::get('slugExist') !!}</li>
                                                </ul>
                                            </div>
                                        @endif
                            @error('role')
                            <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required">Role</label>
                            <input type="text" name="role" id="role" readonly class="form-control" style="width: 100%;" value="{{ old('role', isset($crud) ? $crud->role : '') }}">
                            @error('role')
                            <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="required">Status</label>
                        <select class="form-control select2" id="status" name="status"
                            data-placeholder="Select a status">
                            <option></option>

                            <option value="Active"
                                {{ isset($crud) ? ($crud->status == 'Active' ? 'selected' : '') : '' }}>
                                Active
                            </option>
                            <option value="Inactive"
                                {{ isset($crud) ? ($crud->status == 'Inactive' ? 'selected' : '') : '' }}>
                                Inactive
                            </option>
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
                <a href="{{route('role.view')}}" class="btn btn-default">Back</a>
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
var slugCheck = "{{ route('slug.check') }}";
var token = "{{ csrf_token() }}";
</script>

@endsection



  