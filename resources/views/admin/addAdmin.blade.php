@extends('layout.app')


@section('main')
<section class="content">

    <div class="box box-default">
        <div class="box-header with-border">
            <h2 class="box-title">Add Admin</h2>
            <div class="box-tools pull-right">
                <a class="btn btn-default">Cancel</a>
            </div>
        </div>
        <div class="box-body">
         
                <form id="form" method="post" action="{{route('admin.store')}}">
                
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <input type="hidden" name="id" value="{{ old('id', isset($crud) ? $crud->id : '') }}">
                                <label class="required">Name</label>
                                <input type="text" name="name" class="form-control" style="width: 100%;" value="{{ old('name', isset($crud) ? $crud->name : '') }}">
                                @error('name')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="required">Contact</label>
                                <input type="text" name="contact" class="form-control" style="width: 100%;" value="{{ old('contact', isset($crud) ? $crud->contact : '') }}">
                                @error('contact')
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="required">Email</label>
                                <input type="text" name="email" class="form-control" style="width: 100%;"value="{{ old('email', isset($crud) ? $crud->email : '') }}">
                                @error('email')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="required">Password</label>
                                <input type="text" name="password" class="form-control" style="width: 100%;">
                                @error('password')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="" class="btn btn-default">Back</a>
                    </div>
                </form>

        </div>
    </div>

</section>

@endsection

