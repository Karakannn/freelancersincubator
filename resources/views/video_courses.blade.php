@extends('layouts.app')

@section('main')



<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ $header['Video Courses']->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $header['Video Courses']->image) }}">
        <div class="container pt-120 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-theme-colored2 font-36">@lang('global.menu.video_courses')</h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="{{ route('/') }}">Home</a></li>
                            <li class="active">@lang('global.menu.video_courses')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Latest Video Courses -->
    <section id="video">
        <div class="container">
            <div class="section-title text-center mb-40">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title text-uppercase mb-5">@lang('global.home.LATEST_VIDEOS.LATEST_VIDEOS_TITLE')</h2>
                        <h5 class="font-16 text-gray-darkgray mt-5">@lang('global.home.LATEST_VIDEOS.LATEST_VIDEOS_SUBTITLE')</h5>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    @foreach ($video as $single_video)
                    <div class="col-lg-4">
                        <div class="course-single-item bg-white border-1px clearfix mb-30 cut-text">
                            <div class="course-thumb">
                                <img class="img-fullwidth img-250" alt="" src="{{ $single_video->course_image == '' ? 'http://placehold.it/360x250' : asset('uploads/' . $single_video->course_image) }}">
                            </div>
                            <div class="course-details clearfix p-20 pt-15">
                                <div class="course-top-part">
                                    <a href="{{ route('courses.show', [$single_video->slug]) }}">
                                        <h4 class="mt-5 mb-5">
                                            {{ $single_video->title }}
                                        </h4>
                                    </a>
                                </div>
                                <p class="course-description mt-15 mb-0">
                                    {{ str_limit($single_video->description, $limit = 100, $end = '...') }}
                                </p>
                                @if ($single_video->name)
                                <div class="author-thumb">
                                    <img src="{{ $single_video->profile_image == '' ? 'http://placehold.it/55x55' : asset('uploads/' . $single_video->profile_image) }}" alt="" class="img-circle">
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
