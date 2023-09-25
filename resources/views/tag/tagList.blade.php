@extends('layout.app')
@section('main')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tag List</h3>
                        <div class="box-tools pull-right">
                            <a href="{{ route('tag.show') }}" class="btn btn-primary">Add Tag</a>
                        </div>
                    </div>
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tag Name</th>
                                    <th>Created Date</th>
                                    <th>Updated Date</th>
                                    @if (checkSlug('edit_tag') == true || checkSlug('delete_tag') == true)
                                        <th>Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cruds as $index => $crud)
                                    <tr>
                                        <td>{{$index + $cruds->firstItem()}} </td>
                                        <td>{{ $crud->tag_Name }}</td>
                                        <td>{{dateFormat($crud->created_at,"d-m-Y") }}</td>
                                        <td>{{ dateFormat($crud->updated_at,"d-m-Y")}}</td>
                                        @if (checkSlug('edit_tag') == true || checkSlug('delete_tag') == true)
                                            <td>
                                                @if (checkSlug('edit_tag') == true)
                                                    <a class="fa fa-edit" style='font-size:20px;color:#24333b'
                                                        href="{{ route('tag.edit', ['id' => $crud->id]) }}"></a>
                                                @endif
                                                @if (checkSlug('delete_tag') == true)
                                                    <a class="fa fa-trash" style='font-size:20px;color:red'
                                                        href="{{ route('tag.destroy', ['id' => $crud->id]) }}"
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
