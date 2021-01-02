@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4" style="width: 100%">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <form action="{{route('admin.comments.update',$findComments->id)}}" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" value="{{$findComments->name}}" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">E-Mail</label>
                    <input type="text" value="{{$findComments->e_mail}}" name="e_mail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Comment</label>
                    <input type="text" value="{{$findComments->comment}}" name="comment" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Article</label>
                    <select class="form-control" name="post_id" required>
                        <option value="">Choose Category</option>
                        @foreach($articles as $article)
                            <option @if($findComments->post_id == $article->id) selected @endif value="{{$article->id}}">{{$article->title}}</option>                        @endforeach
                    </select>
                </div>

                <div class="from-group">
                    <button type="submit" class="btn btn-primary btn-block">Update Comment</button>
                </div>

            </form>
        </div>
    </div>
@endsection

