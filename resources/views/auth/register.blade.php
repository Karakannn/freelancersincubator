@extends('layouts.home')

@section('main')

<!-- Start main-content -->
<div class="main-content" id="main">
    <!-- Section Choose Course -->
    <section class="parallax divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ $header['Register']->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $header['Register']->image) }}" data-parallax-ratio="0.4" style="padding-top:100px;">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-white mt-70 mt-sm-0 mb-0">@lang('global.home.REGISTER.REGISTER_TITLE')</h3>
                        <h2 class="text-theme-colored2 font-54 mt-0">@lang('global.home.REGISTER.REGISTER_SUBTITLE')</h2>
                        <p class="text-white font-16 mb-sm-30">@lang('global.home.REGISTER.REGISTER_BODY')</p>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-dark-transparent-4 p-30 mt-0" style="min-height: 400px;">
                            @if(session('message'))
                            <div class='alert alert-success'>
                                {{ session('message') }}
                            </div>
                            @endif
                            <h3 class="font-28 text-white mt-0">@lang('global.home.REGISTER.REGISTER_FORM_TITLE')</h3>
                            <h4 class="font-16 text-gray-darkgray mt-5" id="header_div">@lang('global.home.REGISTER.REGISTER_FORM_SUBTITLE')</h4>
                            <!-- Appilication Form Start-->
                            <form id="form" name="form" class="reservation-form mt-20" method="post" action="{{ url('/register') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="redirect_url" value="{{ request('redirect_url', '/') }}">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="@lang('global.home.REGISTER.REGISTER_FORM_NAME')" id="name" name="name" value="{{ old('name') }}" required autofocus class="form-control" type="text">
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <div class="form-group mb-20">
                                            <input placeholder="@lang('global.home.REGISTER.REGISTER_FORM_EMAIL')" id="email" name="email" value="{{ old('email') }}" required class="form-control" type="email">
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="form-group mb-20">
                                            <input placeholder="@lang('global.home.REGISTER.REGISTER_FORM_PASSWORD')" name="password" class="form-control" aria-required="true" type="password" required>
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="@lang('global.home.REGISTER.REGISTER_FORM_CONFIRM')" name="password_confirmation" class="form-control" aria-required="true" type="password" required>
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
                                            <input name="form_botcheck" class="form-control" value="" type="hidden">
                                            <button name="register" type="submit" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please wait...">
                                                @lang('global.home.REGISTER.REGISTER_FORM_REGISTER')</button>
                                            <a href="{{ route('auth.login') }}">Existing user? Log in here</a>
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
