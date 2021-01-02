@inject('request', 'Illuminate\Http\Request')
@extends('layouts.admin')

@section('content')
    <div class="col-md-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create New Category</h6>
            </div>
            <div class="card-body">
                <form action="{{route('admin.category.create')}}" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn- btn-primary btn-block">Add Category</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Article Count</th>
                            <th>Status</th>
                            <th>Settings</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td class="text-center align-items-center">{{$category->name}}</td>
                                <td class="text-center align-items-center">{{$category->articles->count()}}</td>
                                <td class="text-center align-items-center">
                                    <input class="switch" category-id="{{$category->id}}" type="checkbox" data-onstyle="success" data-offstyle="danger" data-on="Active" data-off="Passive"
                                           @if($category->statu == 1) checked @endif data-toggle="toggle">
                                </td>
                                <td class="text-center align-items-center">
                                    <a category-id="{{$category->id}}"  class="btn btn-sm btn-primary edit-click" title="Edit Category"><i class="fa fa-edit text-white"></i></a>
                                    <a category-id="{{$category->id}}" category-name="{{$category->name}}" category-count="{{$category->articles->count()}}" class="btn btn-sm btn-danger remove-click" title="Delete Category"><i class="fa fa-times text-white"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="delete-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Category</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div id="body" class="modal-body">
                        <div id="modalCount" class="alert- alert-danger">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <form action="{{route('admin.category.delete')}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" id="delete">
                            <button id="deleteButton" type="submit" class="btn btn-success">Delete</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div id="edit-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Category</h4>
                        <button  type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">

                        <form action="{{route('admin.category.update')}}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label  for="">Category Name</label>
                                    <input type="text" id="category" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label  for="">Category Slug</label>
                                    <input type="text" id="slug" name="slug" class="form-control">
                                    <input type="hidden" id="category-id" name="id" >
                                </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>

@stop

@section('javascript')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script>

        $(function(){
            $('.remove-click').click(function () {
                const id = $(this)[0].getAttribute('category-id');
                const count = $(this)[0].getAttribute('category-count');
                const name = $(this)[0].getAttribute('category-name');
                if (id == 1){
                    $('#modalCount').html(name + 'Its Category is a Fixed Category. Deleted Category Articles Will Be Added To This Category.');
                    $('#body').show();
                    $('#deleteButton').hide();
                    $('#delete-modal').modal();
                    return ;

                }
                $('#deleteButton').show();
                $('#delete').val(id);
                $('#modalCount').html('');
                $('#body').hide()
                if (count>0){
                    $('#modalCount').html('There are ' + count + ' articles in this category. Are you sure you want to delete?');
                    $('#body').show();


                }
                $('#delete-modal').modal();
            });
        });

        $(function(){
            $('.edit-click').click(function () {
                const id = $(this)[0].getAttribute('category-id');
                $.ajax({
                    type:'GET',
                    url:'{{route('admin.category.getData')}}',
                    data: {id:id},
                    success:function (data) {
                        console.log(data);
                        $('#edit-modal').modal();
                        $('#category').val(data.name);
                        $('#slug').val(data.name);
                        $('#category-id').val(data.id);
                    }
                });
            });
        });


        $(function() {
            $('.switch').change(function() {
                const id = $(this)[0].getAttribute('category-id');
                const statu = $(this).prop('checked');
                $.get("{{route('admin.category.switch')}}",{id:id,statu:statu}, function (data, status){
                    console.log(data);
                });
            })
        })
    </script>
@endsection
