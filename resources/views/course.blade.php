@extends('layouts.home')

@section('main')

     <meta property="og:image" content="{{ asset('uploads/' . $course->header_image) }}" />
<meta property="og:description" content="" />
<meta property="og:title" content="{{ $course->title }}" /> 
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ $course->header_image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $course->header_image) }}">
        <div class="container pt-120 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-theme-colored2 font-36">
                            {{ $course->title }}
                        </h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="{{ url('/') }}">@lang('global.menu.home')</a></li>
                            <li class="active">@lang('global.course_details.LABEL_DETAILS')</li>
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
                <div class="col-md-8">
                    <div class="single-service">
                        <h3 class="text-uppercase mt-0 mb-30">
                        </h3>
                        <img src="{{ $course->course_image == '' ? 'http://placehold.it/750x435' : asset('uploads/' . $course->course_image) }}" alt="">
                        <ul class="list-inline mt-20 mb-15">
                            @if ($course->name)
                            <li>
                                <i class="pe-7s-user text-theme-colored2 font-48"></i>
                                <div class="pull-right ml-5">
                                    <span>@lang('global.course_details.LABEL_INSTRUCTOR')</span>
                                    <h5 class="mt-0">
                                        {{ $course->name  }}
                                    </h5>
                                </div>
                            </li>
                            @endif
                            <li>
                                <i class="pe-7s-cash text-theme-colored2 font-48"></i>
                                <div class="pull-right ml-10">
                                    <span>@lang('global.course_details.LABEL_PRICE')</span>
                                    <h5 class="mt-0">
                                        @if ($course == "" || $course->price == 0)
                                        @lang('global.course_details.LABEL_FREE')
                                        @else
                                        @lang('global.course_details.CURRENCY_SYMBOL') {{$course->price}}
                                        @endif

                                    </h5>
                                </div>
                            </li>
                            <li>
                                <i class="pe-7s-clock text-theme-colored2 font-48"></i>
                                <div class="pull-right ml-10">
                                    <span>@lang('global.course_details.LABEL_DURATION')</span>
                                    <h5 class="mt-0">
                                        {{$course->duration}}
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <i class="pe-7s-rocket text-theme-colored2 font-48" style="margin-left:10px;"></i>
                                <div class="pull-right ml-10">
                                    <span>@lang('global.course_details.LABEL_START')</span>
                                    <h5 class="mt-0">
                                        {{date('F dS, Y', strtotime($course->start_date))}}
                                    </h5>
                                </div>
                            </li>
                        </ul>
                        <p>
                            {!! $course->description !!}
                        </p>
                        <ul id="myTab" class="nav nav-tabs mt-30">
                            @if ($lessons->count() != 0)
                            <li class="active"><a href="#tab1" data-toggle="tab">@lang('global.course_details.LABEL_LESSONS') ({{ $lessons->count() }})</a></li>
                            @endif
                        </ul>
                        @if ($lessons->count() != 0)
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="tab1">
                                <h4 class="line-bottom-theme-colored2 mb-15">@lang('global.course_details.LABEL_LESSONS')</h4>
                                @foreach ($lessons as $index => $single_lesson)
                                <h5 class="line-bottom-theme-colored2 mb-15">({{ $index + 1 }}) {{ $single_lesson -> title }}</h5>
                                {{ $single_lesson -> short_text }}
                                <br>
                                
                                @if($single_lesson -> url != '' && $single_lesson -> is_live == 1 && $single_lesson -> free_lesson == 1 && $is_registered != '' && strtotime($single_lesson->start_date.' '.$single_lesson->start_time) <= strtotime("now"))
                                    <a target="_blank" href="{{ Auth::check() ? $single_lesson -> url : route('auth.login') }}" class="btn btn-default mt-20" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-check"></i> @lang('global.course_details.LESSONS_BUTTON')</a>
                                @else
                                
                                <a target="_blank" class="btn btn-default mt-20 disabled" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-check"></i> @lang('global.lessons.fields.availabiliy') {{ $single_lesson->start_date == '' ? '' : date('d.m.Y', strtotime($single_lesson->start_date)) }} @if ($single_lesson->start_time) @ {{ date('h:m A', strtotime($single_lesson->start_time)) }} @endif EST </a>
                                @endif
                                @if ($index + 1 != $lessons->count())
                                <div class="separator separator-rouned">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <div>
                            @if ($is_registered == '')
                            <a class="btn btn-xl btn-theme-colored2 mt-30 pr-40 pl-40" href="{{ route('courses.register', $course->slug) }}">@lang('global.home.REGISTER.REGISTER_SUBTITLE')</a>
                            @else
                            <div id="form-result" class="alert alert-success mt-30 pr-40" role="alert">@lang('global.courses.registered')</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">
                        <div class="widget bg-silver-deep">
                            @if ($is_registered == '')
                            <a class="btn-block btn btn-xl btn-theme-colored2 mt-30 pr-40 pl-40" href="{{ route('courses.register', $course->slug) }}">@lang('global.home.REGISTER.REGISTER_SUBTITLE')</a>
                            @else
                            <div id="form-result" class="alert alert-success mt-30 pr-40" role="alert">@lang('global.courses.registered')</div>
                            @endif
                        </div>

                        @if ($course->name)
                        <div class="widget border-1px bg-silver-deep p-15">
                            <h4 class="widget-title line-bottom-theme-colored2">@lang('global.course_details.LABEL_INSTRUCTOR')</h4>
                            <div class="team-members">
                                <div class="team-thumb mr-0">
                                    <img src="{{ $course->profile_image == '' ? 'http://placehold.it/270x225' : asset('uploads/' . $course->profile_image) }}" alt="">
                                </div>
                                <div class="team-bottom-part p-15">
                                    <h4 class="text-uppercase font-weight-600 m-0 pb-5">{{$course->name}}</h4>
                                    <p class="font-13 text-gray mt-0">{{$course->presentation}}</p>
                                    <ul class="list-inline mt-15">
                                        <li class="m-0 pr-10"> <i class="fa fa-phone text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">{{$course->phone}}</a> </li>
                                        <li class="m-0 pr-10"> <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">{{$course->email}}</a> </li>
                                    </ul>
                                    <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 mt-15">
                                        @if ($course->facebook_url != "")
                                        <li><a href="{{ $course->facebook_url }}"><i class="fa fa-facebook"></i></a></li>
                                        @endif
                                        @if ($course->twitter_url != "")
                                        <li><a href="{{ $course->twitter_url }}"><i class="fa fa-twitter"></i></a></li>
                                        @endif
                                        @if ($course->linkedin_url != "")
                                        <li><a href="{{ $course->linkedin_url }}"><i class="fa fa-linkedin"></i></a></li>
                                        @endif
                                        @if ($course->website_url != "")
                                        <li><a href="{{ $course->website_url }}"><i class="fa fa-globe"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="widget border-1px bg-silver-deep p-15">
                        <h4 class="widget-title line-bottom-theme-colored2">@lang('global.course_details.SIMILAR_COURSES')</h4>
                         @foreach ($courses_right as $index => $singcour)
                             <article class="post media-post clearfix pb-0 mb-10">
                                <a class="post-thumb" href="{{ route('courses.show', [$singcour->slug]) }}"><img class="img-55" style="height:60px;" src="{{ $singcour->course_image == '' ? 'http://placehold.it/80x55' : asset('uploads/' . $singcour->course_image) }}" alt=""></a>
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-5"><a href="{{ route('courses.show', [$singcour->slug]) }}">{{ $singcour->title }}</a></h5>
                                    <p class="post-date mb-0 font-12">{{ $singcour->start_date == '' ? '' : date('F d, Y', strtotime($singcour->start_date)) }}</p>
                                </div>
                            </article>
                         @endforeach
                        </div>
                        
                        <div class="widget border-1px bg-silver-deep p-15">
                            @if(session('message'))
                            <div class='alert alert-success'>
                                {{ session('message') }}
                            </div>
                            @endif
                            <h4 class="widget-title line-bottom-theme-colored2">@lang('global.course_details.LABEL_QUICK_CONTACT')</h4>
                            <form role="form" class="quick-contact-form" action="{{ route('contact.admin') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input name="email" class="form-control" type="email" placeholder="Enter Email" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Enter Message" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="@lang('global.home.REGISTER.SITE_KEY')"></div>
                                </div>
                                <div class="form-group">
                                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                    <button type="submit" class="btn btn-default btn-flat btn-xs btn-quick-contact text-gray pt-5 pb-5" data-loading-text="Please wait...">@lang('global.contact.CONTACT_FORM_SEND')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           {{--  {{ dd(get_defined_vars()) }} --}}
    </section>
</div>
@endsection
