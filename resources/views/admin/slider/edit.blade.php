@extends('layouts.admin')

@section('content')
    <h3 class="page-title">@lang('global.slider.title')</h3>
    
    {!! Form::model($slider, ['method' => 'PUT', 'route' => ['admin.slider.update', $slider->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('line_1', 'Line 1*', ['class' => 'control-label']) !!}
                    {!! Form::text('line_1', old('line_1'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('line_1'))
                        <p class="help-block">
                            {{ $errors->first('line_1') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('line_2', 'Line 2*', ['class' => 'control-label']) !!}
                    {!! Form::text('line_2', old('line_2'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('line_2'))
                        <p class="help-block">
                            {{ $errors->first('line_2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('line_3', 'Line 3*', ['class' => 'control-label']) !!}
                    {!! Form::text('line_3', old('line_3'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('line_3'))
                        <p class="help-block">
                            {{ $errors->first('line_3') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('button_text', 'Button Text', ['class' => 'control-label']) !!}
                    {!! Form::text('button_text', old('button_text'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('button_text'))
                        <p class="help-block">
                            {{ $errors->first('button_text') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('button_url', 'Button URL', ['class' => 'control-label']) !!}
                    {!! Form::text('button_url', old('button_url'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('button_url'))
                        <p class="help-block">
                            {{ $errors->first('button_url') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($slider->image)
                        <a href="{{ asset('uploads/'.$slider->image) }}" target="_blank"><img src="{{ asset('uploads/thumb/'.$slider->image) }}"></a>
                    @endif
                    {!! Form::label('image', 'Slider Image', ['class' => 'control-label']) !!}
                    {!! Form::file('image', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('image_max_size', 8) !!}
                    {!! Form::hidden('image_max_width', 4000) !!}
                    {!! Form::hidden('image_max_height', 4000) !!}
                    <p class="help-block"></p>
                    @if($errors->has('image'))
                        <p class="help-block">
                            {{ $errors->first('image') }}
                        </p>
                    @endif
                </div>
            </div>         
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}"
        });
    </script>

@stop