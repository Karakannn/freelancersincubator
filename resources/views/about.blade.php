@extends('layouts.home')

@section('main')

<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ $header['About']->image == '' ? 'http://placehold.it/1920x1280' : asset('uploads/' . $header['About']->image) }}">
        <div class="container pt-120 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-theme-colored2 font-36">@lang('global.menu.about')</h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="{{ route('/') }}">Home</a></li>
                            <li class="active">@lang('global.menu.about')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section About -->
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-uppercasetext-theme-colored mt-0 mb-0 mt-sm-30">@lang('global.about.LABEL_TOP_TITLE')</h2>
                        <h4 class="mt-5 mb-15">@lang('global.about.LABEL_TOP_SUBTITLE')</h4>
                        <p>@lang('global.about.LABEL_TOP_BODY')</p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fullwidth" src="{!! url('/imgs/ab1.jpg'); !!}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section mission -->
    <section>
        <div class="container pt-20">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fullwidth hidden-md" src="{!! url('/imgs/ab2.jpg'); !!}" alt="">
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30">@lang('global.about.LABEL_MIDDLE_TITLE')</h2>
                        <p>@lang('global.about.LABEL_MIDDLE_BODY')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About -->
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-uppercasetext-theme-colored mt-0 mb-0 mt-sm-30">@lang('global.about.LABEL_BOTTOM_TITLE')</h2>
                        <h4 class="mt-5 mb-15">@lang('global.about.LABEL_BOTTOM_SUBTITLE')</h4>
                        <p>@lang('global.about.LABEL_BOTTOM_BODY')</p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fullwidth" src="{!! url('/imgs/ab3.jpg'); !!}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
