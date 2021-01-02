@inject('request', 'Illuminate\Http\Request')
@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Comments</h3>



    

    <div class="panel panel-default">
        <div class="panel-heading">
            Comment List
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Comment</th>
                        <th>Created At</th>
                        <th>Status</th>



                    </tr>
                </thead>
                
                <tbody>
                @foreach($blog as $comment)
                    <tr>

                        <td class="text-center align-items-center">{{$comment->name}}</td>
                        <td class="text-center align-items-center">{{$comment->e_mail}}</td>
                        <td class="text-center align-items-center">{{$comment->comment}}</td>
                        <td class="text-center align-items-center">{{$comment->created_at->diffForHumans()}}</td>
                        <td class="text-center align-items-center">
                            <input class="switch" comment-id="{{$comment->id}}" type="checkbox" data-onstyle="success" data-offstyle="danger" data-on="Active" data-off="Passive"
                                   @if($comment->approved == 1) checked @endif data-toggle="toggle">
                        </td>
                        <td class="text-center align-items-center">
                            <a href="{{route('admin.comments.edit', $comment->id)}}" title="Edit Comment" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>

                            <a href="{{route('admin.comments.delete', $comment->id)}}" title="Delete Comment" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $(function() {
            $('.switch').change(function() {
                const id = $(this)[0].getAttribute('comment-id');
                const statu = $(this).prop('checked');
                $.get("{{route('admin.comments.switch')}}",{id:id,statu:statu}, function (data, status){
                    console.log(data);
                });
            })
        })
    </script>
@endsection