@inject('request', 'Illuminate\Http\Request')
@extends('layouts.admin')

@section('content')
    <h3 class="page-title">@lang('global.menu.blog')</h3>
    @can('blogs_create')
    <p>
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
        <a href="{{route('admin.blogs.trashed')}}" class="btn btn-danger"><i class="fa fa-trash"></i> Trashed Articles</a>

    </p>
    @endcan

    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.blogs.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">All</a></li>
        </ul>
    </p>
    

    <div class="panel panel-default">
        <div class="panel-heading">
            Blog List
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($articles) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th>Header Image</th>
                        <th>Main Image</th>
                        <th>Title</th>
                        <th>Short Info</th>
                        <th>Body</th>
                        <th>Slug</th>
                        <th>Category</th>
                        <th>Tags</th>
                        <th>Hit</th>
                        <th>Created At</th>
                        <th>Status</th>
                        <th>Settings</th>

                    </tr>
                </thead>
                
                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td><img src="{{asset($article->header_image)}}" width="200" alt=""></td>
                        <td><img src="{{asset($article->main_image)}}" width="200" alt=""></td>
                        <td class="text-center align-items-center">{{$article->title}}</td>
                        <td class="text-center align-items-center">{{$article->short_info}}</td>
                        <td class="text-center align-items-center">{{$article->body}}</td>
                        <td class="text-center align-items-center">{{$article->slug}}</td>
                        <td class="text-center align-items-center">{{$article->getCategory->name}}</td>
                        <td class="text-center align-items-center">{{$article->tags}}</td>
                        <td class="text-center align-items-center">{{$article->hit}}</td>
                        <td class="text-center align-items-center">{{$article->created_at->diffForHumans()}}</td>
                        <td class="text-center align-items-center">
                            <input class="switch" article-id="{{$article->id}}" type="checkbox" data-onstyle="success" data-offstyle="danger" data-on="Active" data-off="Passive"
                                   @if($article->status == 1) checked @endif data-toggle="toggle">
                        </td>
                        <td class="text-center align-items-center">
                            <a href="{{route('blogs.show',$article->id)}}" title="Show Blog" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                            <a href="{{route('admin.blogs.edit', $article->id)}}" title="Edit" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                            <a href="{{route('admin.blogs.delete', $article->id)}}" title="Delete" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                            <a href="{{route('admin.comment.show', $article->id)}}" title="Comments" class="btn btn-sm btn-warning"><i class="fas fa-comments"></i></a>
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
                const id = $(this)[0].getAttribute('article-id');
                const statu = $(this).prop('checked');
                $.get("{{route('admin.blogs.switch')}}",{id:id,statu:statu}, function (data, status){
                    console.log(data);
                });
            })
        })
    </script>
@endsection