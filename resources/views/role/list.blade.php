@extends('layout.app')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
@endsection
@section('main')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Role List</h3>
                        <div class="box-tools pull-right">
                            <a href="{{ route('role.add') }}" class="btn btn-primary">Add Role</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Slug</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Permissions</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @php
                              $roleId = [];
                             
                              @endphp
                            
                                @foreach ($role_data as $index => $crud)
                                    <tr>
                                        <td>{{$index + $role_data->firstItem()}} </td>
                                        <td>{{ $crud->slug }}</td>
                                        <td>{{ $crud->role }}</td>
                                        <td>{{ $crud->status }}</td>
                                        <td>
                                          @php
                                          $per_name = [];
                                          @endphp
                                            {{-- @dd($crud['permissions'] ); --}}
                                            @foreach ($crud->permissions as $name)
                                                @php
                                                  
                                                 
                                                    $roleId[$crud->id][] = $name->id;
                                                    
                                                    $per_name[] = $name->name;       
                                                    @endphp 
                                            @endforeach
                                            {{ implode(',', $per_name) }}
                                            
                                        </td>
                                        <td>
                                            <a href="{{ route('role.edit', ['id' => $crud->id]) }}"><i
                                                    class="fa fa-edit"></I></a>
                                                    <a  href="{{ route('role.destroy', ['id'=>$crud->id])}}"   onclick="return confirm('Are you sure to delete?')"> 
                                                      <i class="fa fa-trash"></I></a>
                                            <a data-role="{{ $crud->id }}" data-toggle="modal" class="permission-modal"
                                                data-target="#edit-modal"> <i class="fa fa-eye"></I></a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        {{ $role_data->links() }}
                    </div>
                </div>

                <div class="modal fade" id="edit-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" align="center"><b>Permissions List</b></h4>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('role.permission') }}">
                                    <!-- <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> -->
                                    @csrf

                                    <div class="box-body">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" name="role_id" id="role_id">
                                                <label class="required">Permission</label>
                                            </br>
                                                

                                                @foreach ($getPermission as $getPermission)
                                                    <input type="checkbox" id="permission_id" name="permission_id[]"
                                                        class="permission permission-{{ $getPermission->id }}"
                                                        value="{{ $getPermission->id }}">
                                                    <label for="permission_id">{{ $getPermission->name }}</label><br>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
    </section>

    <script>
        $(document).ready(function() {
            var roleId = @json($roleId);
          
            $(".permission-modal").click(function() {
                $('.permission').removeAttr('checked');
                var role_id = $(this).attr("data-role");
                $("#role_id").val(role_id);
             
                var permission = roleId[role_id];
                console.log(permission);
                $.each(permission, function(i, val) {
                  $(".permission-"+val).prop('checked',true);
               
                });


            });



        });
    </script>
@endsection
