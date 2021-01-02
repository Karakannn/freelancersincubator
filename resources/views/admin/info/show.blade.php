@extends('layouts.admin')

@section('content')
    <h3 class="page-title">@lang('global.slider.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.slider.fields.line_1')</th>
                            <td>{{ $slider->line_1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.slider.fields.line_2')</th>
                            <td>{{ $slider->line_2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.slider.fields.line_3')</th>
                            <td>{{ $slider->line_3 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.slider.fields.button_text')</th>
                            <td>{{ $slider->button_text }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.slider.fields.button_url')</th>
                            <td>{{ $slider->button_url }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.slider.fields.image')</th>
                            <td>@if($slider->image)<a href="{{ asset('uploads/' . $slider->image) }}" target="_blank"><img src="{{ asset('uploads/thumb/' . $slider->image) }}"/></a>@endif</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->

            <a href="{{ route('admin.slider.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop