@extends('layouts.home')

@section('main')

<!-- Start main-content -->
<div class="main-content" id="main">
    <!-- Section Choose Course -->
    <section class="parallax divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ $header['Become A Lecturer']->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $header['Become A Lecturer']->image) }}" data-parallax-ratio="0.4" style="padding-top:100px;">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-white mt-70 mt-sm-0 mb-0">
                            @lang('global.webinar.WEBINAR_TITLE')
                        </h3>
                        <h2 class="text-theme-colored2 font-54 mt-0">
                            @lang('global.webinar.WEBINAR_SUBTITLE')
                        </h2>
                        <p class="text-white font-16 mb-sm-30">
                            @lang('global.webinar.WEBINAR_BODY')
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-dark-transparent-4 p-30 mt-0" style="min-height: 400px;">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(session('message'))
                                    <div class='alert alert-success'>
                                        {{ session('message') }}
                                    </div>
                                @endif
                            <h3 class="font-28 text-white mt-0">@lang('global.webinar.WEBINAR_FORM_TITLE')</h3>
                            <h4 class="font-18 text-white mt-0" id="header_div">@lang('global.webinar.WEBINAR_FORM_SUBTITLE')</h4>
                            <!-- Appilication Form Start-->
                            <form role="form" class="mt-20" method="POST" action="{{ url('lecturer') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="@lang('global.home.REGISTER.REGISTER_FORM_NAME')" name="name" value="" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="@lang('global.home.REGISTER.REGISTER_FORM_EMAIL')" name="email" value="" class="form-control" type="email" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="@lang('global.home.REGISTER.REGISTER_FORM_PHONE')" name="phone" value="" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="@lang('global.webinar.WEBINAR_FORM_COUNTRY')" name="country" class="form-control" aria-required="true" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="@lang('global.webinar.WEBINAR_FORM_WEBINAR_TITLE')" name="webinar_title" class="form-control" aria-required="true" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="@lang('global.webinar.WEBINAR_FORM_HOURS_LONG')" name="hours" class="form-control" aria-required="true" type="number" step="any" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <textarea rows="4" placeholder="@lang('global.webinar.WEBINAR_FORM_INTEREST')" name="join_reason" class="form-control" aria-required="true" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <textarea rows="4" placeholder="@lang('global.webinar.WEBINAR_FORM_EXPERIENCE')" name="freelance_experience" class="form-control" aria-required="true" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <textarea rows="4" placeholder="@lang('global.webinar.WEBINAR_FORM_BRIEF')" name="description" class="form-control" aria-required="true" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <textarea rows="4" placeholder="@lang('global.webinar.WEBINAR_FORM_DETAIL')" name="detailed_description" class="form-control" aria-required="true" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="g-recaptcha" data-sitekey="@lang('global.home.REGISTER.SITE_KEY')"></div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label>
                                            <input type="checkbox" name="terms_accepted" value="1" required>
                                            <a target="_blank" href="{{ route('terms.index') }}">@lang('global.home.REGISTER.REGISTER_FORM_T&C')</a>
                                        </label>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-0 mt-10">
                                            <button name="submit" type="submit" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please wait...">@lang('global.webinar.WEBINAR_FORM_SUBMIT')</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Application Form End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('_sec_2_reg_log')
</div>

@endsection
