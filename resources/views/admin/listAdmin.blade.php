@extends('layout.app')
@section('main')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Admin List</h3>
                        <div class="box-tools pull-right">
                            <a href="{{ route('admin.show') }}" class="btn btn-primary">Add Admin</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Status</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $roleId = [];
                                    
                                @endphp
                                @foreach ($admin_data as $index => $crud)
                                    <tr>
                                        <td>{{ $index + $admin_data->firstItem() }} </td>
                                        <td>{{ $crud->name }}</td>
                                        <td>{{ $crud->contact }}</td>
                                        <td>
                                            @php
                                                if ($crud->status == 1) {
                                                    print 'Active';
                                                } else {
                                                    print 'InActive';
                                                }
                                            @endphp
                                            </td>
                                        <td>{{ $crud->email }}</td>
                                        <td>
                                            @php
                                                $per_name = [];
                                            @endphp
                                            {{-- @dd($crud['permissions'] ); --}}
                                            @foreach ($crud->roles as $name)
                                                @php
                                                    $roleId[$crud->id][] = $name->id;
                                                    $per_name[] = $name->role;
                                                @endphp
                                            @endforeach
                                            {{ implode(',', $per_name) }}

                                        </td>
                                        <td>
                                            <a class="fa fa-edit" style='font-size:20px;color:#24333b'
                                                href="{{ route('admin.edit', ['id' => $crud->id]) }}"></a>
                                            <a class="fa fa-trash" style='font-size:20px;color:red'
                                                href="{{ route('admin.destroy', ['id' => $crud->id]) }}"
                                                onclick="return confirm('Are you sure to delete?')"></a>
                                            <a data-admin="{{ $crud->id }}" data-toggle="modal" class="role-modal"
                                                data-target="#edit-modal"> <i class="fa fa-eye"></I></a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        {{ $admin_data->links() }}
                    </div>
                </div>
                <div class="modal fade" id="edit-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" align="center"><b>Role List</b></h4>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('admin.roles') }}">
                                    <!-- <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> -->
                                    @csrf

                                    <div class="box-body">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" name="admin_id" id="admin_id">
                                                <label class="required">Roles</label>
                                                </br>

                                                @foreach ($getRole as $getRole)
                                                    <input type="checkbox" id="role_id" name="role_id[]"
                                                        class="role role-{{ $getRole->id }}" value="{{ $getRole->id }}">
                                                    <label for="role_id">{{ $getRole->role }}</label><br>
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
            $(".role-modal").click(function() {
                $('.role').removeAttr('checked');
                var role_id = $(this).attr("data-admin");
                $("#admin_id").val(role_id);
                var permission = roleId[role_id];
                console.log(permission);
                $.each(permission, function(i, val) {
                    $(".role-" + val).prop('checked', true);
                });


            });

        });
    </script>
@endsection
