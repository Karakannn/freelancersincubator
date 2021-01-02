@extends('layouts.home')

@section('main')

<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ $header['Contact']->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $header['Contact']->image) }}">
        <div class="container pt-120 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-theme-colored2 font-36">@lang('global.menu.contact')</h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">@lang('global.menu.contact')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider">
        <div class="container">
            <div class="row pt-30">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0">@lang('global.contact.OFFICE_LOCATION')</h5>
                                    <p>{{ $info[0]->office_location }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left"> <i class="pe-7s-call text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0">@lang('global.contact.CONTACT_NUMBER')</h5>
                                    <p>{{ $info[0]->contact_number }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left"> <i class="pe-7s-mail text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0">@lang('global.contact.EMAIL_ADDRESS')</h5>
                                    <p>{{ $info[0]->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    @if(session('message'))
                        <div class='alert alert-success'>
                            {{ session('message') }}
                        </div>
                    @endif
                    <h3 class="line-bottom mt-0 mb-30">@lang('global.contact.CONTACT_FORM_TITLE')</h3>
                    <!-- Contact Form -->
                    <form role="form" action="{{ url('contact') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>@lang('global.contact.CONTACT_FORM_NAME_LABEL') <small>*</small></label>
                                    <input name="name" class="form-control required" type="text" placeholder="@lang('global.contact.CONTACT_FORM_NAME')" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>@lang('global.contact.CONTACT_FORM_EMAIL_LABEL') <small>*</small></label>
                                    <input name="email" class="form-control required email" type="email" placeholder="@lang('global.contact.CONTACT_FORM_EMAIL')" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>@lang('global.contact.CONTACT_FORM_SUBJECT_LABEL') <small>*</small></label>
                                    <input name="subject" class="form-control required" type="text" placeholder="@lang('global.contact.CONTACT_FORM_SUBJECT')" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>@lang('global.contact.CONTACT_FORM_PHONE_LABEL')</label>
                                    <input name="phone" class="form-control" type="text" placeholder="@lang('global.contact.CONTACT_FORM_PHONE')">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>@lang('global.contact.CONTACT_FORM_MESSAGE_LABEL')</label>
                            <textarea name="message" class="form-control required" rows="5" placeholder="@lang('global.contact.CONTACT_FORM_MESSAGE')" required></textarea>
                        </div>
                        <div class="form-group">
                            <input name="form_botcheck" class="form-control" type="hidden" value="" />
                            <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">@lang('global.contact.CONTACT_FORM_SEND')</button>
                            <button type="reset" class="btn btn-default btn-flat btn-theme-colored">@lang('global.contact.CONTACT_FORM_RESET')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
