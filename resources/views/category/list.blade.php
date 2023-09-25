@extends('layout.app')
@section('main')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Category List</h3>
                        <div class="box-tools pull-right">
                            @if (checkSlug('add_category') == true)
                                <a href="{{ route('category.show') }}" class="btn btn-primary">Add Category</a>
                            @endif
                        </div>
                    </div>
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Created Date</th>
                                    <th>Updated Date</th>
                                    @if (checkSlug('edit_category') == true || checkSlug('delete_category') == true)
                                        <th>Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cruds as $index => $crud)
                                    <tr>
                                        <td>{{$index + $cruds->firstItem()}} </td>
                                        <td>{{ $crud->name }}</td>
                                        <td>{{dateFormat($crud->created_at,"d-m-Y") }}</td>
                                        <td>{{ dateFormat($crud->updated_at,"d-m-Y")}}</td>
                                        @if (checkSlug('edit_category') == true || checkSlug('delete_category') == true)
                                        <td>
                                          @if(checkSlug('edit_category') == true )
                                          <a class="fa fa-edit" style='font-size:20px;color:#24333b'
                                                href="{{ route('category.edit', ['id' => $crud->id]) }}"></a>
                                          @endif
                                          @if(checkSlug('delete_category') == true)
                                          <a class="fa fa-trash" style='font-size:20px;color:red'
                                                href="{{ route('category.destroy', ['id' => $crud->id]) }}"
                                                onclick="return confirm('Are you sure to delete?')"></a>
                                                @endif
                                        </td>
                                        @endif


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        {{ $cruds->links() }}
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
