@extends('layouts.home')

@section('main')

<meta property="og:image" content="{{ asset($blog->header_image) }}" />
<meta property="og:description" content="" />
<meta property="og:title" content="{{ $blog->title }}" />
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ $blog->header_image == '' ? 'http://placehold.it/1920x1280' : asset($blog->header_image)}}">
        <div class="container pt-120 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-theme-colored2 font-36">
                            {{ $blog->title }}
                        </h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="{{ url('/') }}">@lang('global.menu.home')</a></li>
                            <li class="active">@lang('global.blog_details.LABEL_DETAILS')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Services Details -->
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-posts single-post">
                        <article class="post clearfix mb-0">
                            <div class="entry-header">
                                <div class="post-thumb">
                                    <div class="post-date"><span>{{ $blog->created_at == '' ? '' : date('d', strtotime($blog->created_at)) }} </span><br> {{ $blog->created_at == '' ? '' : date('M', strtotime($blog->created_at)) }}</div>
                                    <div class="post-description border-1px p-20">
                                        <h3 class="post-title font-weight-600 mt-0 mb-5">{{ $blog->title }}</h3>
                                    </div>
                                    <div class="post-meta">
                                        <ul class="list-inline pull-left flip">
                                            <li><i class="lnr lnr-users text-theme-colored2 font-20"></i>@lang('global.blog_details.LABEL_BY') {{ $blog->title }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-content">
                                {{ strip_tags($blog->body) }}
                                <div class="mt-30 mb-0">
                                    <h5 class="pull-left mt-10 mr-20 text-theme-colored2">Share:</h5>
                                    <ul class="styled-icons icon-circled m-0">
                                        <li><a href="https://www.facebook.com/How-to-start-as-a-Freelancer-FreelancersIncubatorcom-391466288385318" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                                        <li><a href="#" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
                                        <li><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                        <div class="tagline p-0 pt-20 mt-5">
                            <div class="row">
                                <div class="col-md-8">

                                    <div class="tags">
                                        <p class="mb-0"><i class="fa fa-tags text-theme-colored"></i> <span>Tags:</span> {{$blog->tags}}</p>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="share text-right flip">
                                        <p><i class="fa fa-share-alt text-theme-colored"></i> Share</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="author-details media-post">
                            <a href="#" class="post-thumb mb-0 pull-left flip pr-20"><img class="img-thumbnail" alt="" src="images/blog/author.jpg"></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-0"><a href="#" class="font-18">{{$blog->author_id}}</a></h5>
                                <ul class="styled-icons square-sm m-0">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
-->

                                                <div class="comments-area">
                                                    <h5 class="comments-title">Comments</h5>
                                                    <ul class="comment-list">
                                                        @foreach($comments as $comment)
                                                        <li>
                                                            <div class="media comment-author"> <a class="media-left" href="#"><img class="media-object img-thumbnail" src="images/blog/comment1.jpg" alt=""></a>
                                                                <div class="media-body">
                                                                    <h5 class="media-heading comment-heading">{{$comment->name}} says:</h5>
                                                                    <div class="comment-date">{{$comment->created_at}}</div>
                                                                    <p>{{$comment->comment}}.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                                <div class="comment-box">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h5>Leave a Comment</h5>
                                                            <div class="row">
                                                                <form role="form" action="{{route('comments.store',$blog->id)}}" method="POST" id="comment-form">
                                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                    <div class="col-sm-6 pt-0 pb-0">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" required name="name" id="contact_name" placeholder="Enter Name">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="text" required class="form-control" name="e_mail" id="contact_email2" placeholder="Enter Email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" required name="comment" id="contact_message2" placeholder="Enter Message" rows="5"></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <button type="submit" class="btn btn-dark btn-flat pull-right m-0" data-loading-text="Please wait...">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar sidebar-left mt-sm-30">



                        <div class="widget">
                            <h5 class="widget-title">Categories</h5>
                            <div class="categories">
                                <ul class="list list-border angle-double-right">
                                    @foreach($categories as $category)

                                    <li><a href="{{route('category.index',$category->slug)}}">{{$category->name}}<span>({{$category->articles->count()}})</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title">Latest Blog</h5>
                            <div class="latest-posts">
                                <li><a href="{{route('blogs.show', $lastBlog->id)}}">{{$lastBlog->title}}</a></li>
                                <p>
                                    {{$lastBlog->short_info}}
                                </p>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
