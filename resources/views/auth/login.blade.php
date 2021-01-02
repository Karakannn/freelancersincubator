@extends('layouts.home')

@section('main')

<!-- Start main-content -->
<div class="main-content" id="main">
    <!-- Section Choose Course -->
    <section class="parallax divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ $header['Login']->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $header['Login']->image) }}" data-parallax-ratio="0.4" style="padding-top:100px;">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-white mt-70 mt-sm-0 mb-0">@lang('global.login.LOGIN_TITLE')</h3>
                        <h2 class="text-theme-colored2 font-54 mt-0">@lang('global.login.LOGIN_SUBTITLE')</h2>
                        <p class="text-white font-16 mb-sm-30">@lang('global.login.LOGIN_BODY')</p>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-dark-transparent-4 p-30 mt-0" style="min-height: 400px;">
                            @if(session('message'))
                            <div class='alert alert-success'>
                                {{ session('message') }}
                            </div>
                            @endif
                            @if(session('error'))
                            <div class='alert alert-danger'>
                                You haven't confirmed your email! If you haven't received the confirmation email please <a href = "{{ route('auth.resendemail', session('error')) }}">click here</a>
                            </div>
                            @endif
                            <h3 class="font-28 text-white mt-0">@lang('global.login.LOGIN_FORM_TITLE')</h3>
                            <h4 class="font-16 text-gray-darkgray mt-5" id="header_div">@lang('global.login.LOGIN_FORM_SUBTITLE')</h4>
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were problems with input:
                                <br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <!-- Appilication Form Start-->
                            <form role="form" class="reservation-form mt-20" method="post" action="{{ url('login') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <input placeholder="@lang('global.login.LOGIN_FORM_EMAIL')" name="email" value="{{ old('email') }}" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <input placeholder="@lang('global.login.LOGIN_FORM_PASSWORD')" name="password" class="form-control" aria-required="true" type="password">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label> <input type="checkbox" name="remember"> Remember me </label>
                                    </div>
                                    <div class="col-sm-12">
                                        <label>
                                            <i class="fa fa-arrow-circle-right mr-5"></i> <a href="{{ route('auth.password.email') }}">@lang('global.login.LOGIN_FORM_FORGOT_PASS')</a> <i class="fa fa-arrow-circle-right mr-5" style="margin-left:20px;"></i> <a href="{{ route('auth.register') }}">@lang('global.login.LOGIN_FORM_REGISTER')</a>
                                        </label>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-0 mt-10">
                                            <input name="form_botcheck" class="form-control" value="" type="hidden">
                                            <button type="submit" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please wait...">@lang('global.login.LOGIN_FORM_LOGIN')</button>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="login" value="login_user_submit" />
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