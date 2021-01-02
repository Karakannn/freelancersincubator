@extends('layouts.home')

@section('main')

<!-- Start main-content -->
<div class="main-content" id="main">
    <!-- Section Choose Course -->
    <section class="parallax divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ $header['Forgot Password']->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $header['Forgot Password']->image) }}" data-parallax-ratio="0.4" style="padding-top:100px;">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-white mt-70 mt-sm-0 mb-0">@lang('global.login.FPASS_FORM_TITLE')</h3>
                        <h2 class="text-theme-colored2 font-54 mt-0">Lorem 1</h2>
                        <p class="text-white font-16 mb-sm-30">Lorem</p>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-dark-transparent-4 p-30 mt-0" style="min-height: 400px;">
                            <h3 class="font-28 text-white mt-0">Lorem</h3>
                            <h4 class="font-16 text-gray-darkgray mt-5" id="header_div">Lorem</h4>
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
                            <form role="form" class="mt-20" method="POST" action="{{ url('password/reset') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <input placeholder="@lang('global.login.LOGIN_FORM_EMAIL')" name="email" class="form-control" type="email" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="@lang('global.login.LOGIN_FORM_PASSWORD')" name="password" class="form-control" type="password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input placeholder="@lang('global.login.LOGIN_FORM_PASSWORD')" name="password_confirmation" class="form-control" type="password">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="g-recaptcha" data-sitekey="@lang('global.home.REGISTER.SITE_KEY')"></div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-0 mt-10">
                                            <button name="reset" type="submit" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block"> @lang('global.contact.CONTACT_FORM_RESET')</button>
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