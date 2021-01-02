@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4" style="width: 100%">
        <div class="card-header py-3">
            <h3 style="color: white; text-align: center">Edit {{$findArticle->title}} Post</h3>
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <form action="{{route('admin.blogs.update',$findArticle->id)}}" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" value="{{$findArticle->title}}" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" value="{{$findArticle->slug}}" name="slug" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Short Info</label>
                    <input type="text" value="{{$findArticle->short_info}}" name="short_info" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select class="form-control" name="category" required>
                        <option value="">Choose Category</option>
                        @foreach($categories as $category)
                            <option @if($findArticle->category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>                        @endforeach
                    </select>
                </div>
                <div class="from-group">
                    <label for="">Header Image</label><br/>
                    <img class="img-thumbnail rounded" width="500px" src="{{asset($findArticle->header_image)}}" alt="">

                    <input type="file" name="header_image" class="form-control" >
                </div>
                <div class="from-group">
                    <label for="">Main Image</label><br/>
                    <img class="img-thumbnail rounded" width="500px" src="{{asset($findArticle->main_image)}}" alt="">
                    <input type="file" name="main_image" class="form-control" >
                </div>

                <div class="from-group">
                    <label for="">Body</label>
                    <textarea name="body"  id="editor" class="form-control editor" cols="30" rows="10">{!!$findArticle->body!!}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Tags</label>
                    <input type="text" value="{{$findArticle->tags}}" name="tags" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Author</label>
                    <input type="text" value="{{$findArticle->author_id}}" name="author" class="form-control">
                </div>

                <div class="from-group">
                    <button type="submit" class="btn btn-primary btn-block">Update Article</button>
                </div>

            </form>
        </div>
    </div>
@endsection

@section('javascript')
@parent
<script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
<script>
    $('.editor').each(function() {
        CKEDITOR.replace($(this).attr('id'), {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=0tD5JmSzSVHDEF3QbY4XE18q6jyTgVvWtJBS0DXc',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=0tD5JmSzSVHDEF3QbY4XE18q6jyTgVvWtJBS0DXc'
        });
    });

</script>

@stop
