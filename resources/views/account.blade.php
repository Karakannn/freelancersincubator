@extends('layouts.home')

@section('main')

    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ $header['My Profile']->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $header['My Profile']->image) }}">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">@lang('global.menu.my_profile')</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="{{ url('/') }}">@lang('global.menu.home')</a></li>
                                <li class="active">@lang('global.menu.my_profile')</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Doctor Details -->
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sx-12 col-sm-4 col-md-4">
                            <div class="doctor-thumb">
                                <img src="images/about/profile1.jpg" alt="">
                            </div>
                            <div class="info p-20 bg-black-333">
                                <h4 class="text-uppercase text-white">
                                   {{ Auth::user()->name }}
                                </h4>
                                <ul class="list angle-double-right m-0">
                                    <li class="mt-0 text-gray-silver"><strong class="text-gray-lighter">@lang('global.contact.CONTACT_FORM_EMAIL_LABEL')</strong><br>
                                       {{ Auth::user()->email }}
                                    </li>
                                </ul>
                                <a class="btn btn-info btn-flat mt-10 mb-sm-30" href="{{ route('edit.index') }}">@lang('global.ACCOUNT.ACCOUNT_PROFILE')</a>
                                <a class="btn btn-danger btn-flat mt-10 mb-sm-30" href="#logout" onclick="$('#logout').submit();">@lang('global.app_logout')</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <h3 class="line-bottom mt-0 mb-30">@lang('global.ACCOUNT.YOUR_COURSES')</h3>
                            <div class="pt-20">
                                @if (count($video) == 0) 
                                <h4>@lang('global.ACCOUNT.NO_COURSES')</h4>
                                @endif
                                    @foreach ($video as $single_video)
                                        <div class="col-lg-6">
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
                                                        {{ str_limit(strip_tags($single_video->description), $limit = 80, $end = '...') }}
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
                </div>
            </div>
        </section>
    </div>
    {!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
    <button type="submit">@lang('global.logout')</button>
    {!! Form::close() !!}
@endsection