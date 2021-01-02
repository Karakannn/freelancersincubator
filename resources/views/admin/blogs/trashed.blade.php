@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Trashed Posts</h3>


    <p>
    <ul class="list-inline">
        <li><a href="{{ route('admin.blogs.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">All</a></li>
    </ul>
    </p>


    <div class="panel panel-default">
        <div class="panel-heading">
            Trashed Blog List
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
                            <a href="{{route('admin.blogs.recover', $article->id)}}" title="Recover Post" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i></a>
                            <a href="{{route('admin.blogs.harddelete', $article->id)}}" title="Delete Completely" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

