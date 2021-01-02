@extends('layouts.admin')

@section('content')
<h3 class="page-title">@lang('global.testimonials.title')</h3>
{!! Form::open(['method' => 'POST', 'route' => ['admin.testimonials.store'], 'files' => true,]) !!}

<div class="panel panel-default">
    <div class="panel-heading">
        @lang('global.app_create')
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('client', 'Client*', ['class' => 'control-label']) !!}
                {!! Form::text('client', old('client'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('client'))
                <p class="help-block">
                    {{ $errors->first('client') }}
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('position', 'Position*', ['class' => 'control-label']) !!}
                {!! Form::text('position', old('position'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('position'))
                <p class="help-block">
                    {{ $errors->first('position') }}
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('title', 'Testimonial*', ['class' => 'control-label']) !!}
                {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('title'))
                <p class="help-block">
                    {{ $errors->first('title') }}
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('image', 'Client image', ['class' => 'control-label']) !!}
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

{!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
@stop
