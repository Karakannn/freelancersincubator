@extends('layouts.admin')

@section('content')
    <h3 class="page-title">@lang('global.info.title')</h3>
    
    {!! Form::model($info, ['method' => 'PUT', 'route' => ['admin.info.update', $info->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('contact_number', 'Contact Number*', ['class' => 'control-label']) !!}
                    {!! Form::text('contact_number', old('contact_number'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('contact_number'))
                        <p class="help-block">
                            {{ $errors->first('contact_number') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('office_location', 'Office Location*', ['class' => 'control-label']) !!}
                    {!! Form::text('office_location', old('office_location'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('office_location'))
                        <p class="help-block">
                            {{ $errors->first('office_location') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', 'Email*', ['class' => 'control-label']) !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('linkedin_url', 'Linkedin url', ['class' => 'control-label']) !!}
                    {!! Form::text('linkedin_url', old('linkedin_url'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('linkedin_url'))
                        <p class="help-block">
                            {{ $errors->first('linkedin_url') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('facebook_url', 'Facebook url', ['class' => 'control-label']) !!}
                    {!! Form::text('facebook_url', old('facebook_url'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('facebook_url'))
                        <p class="help-block">
                            {{ $errors->first('facebook_url') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('twitter_url', 'Twitter url', ['class' => 'control-label']) !!}
                    {!! Form::text('twitter_url', old('twitter_url'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('twitter_url'))
                        <p class="help-block">
                            {{ $errors->first('twitter_url') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('youtube_url', 'Youtube url', ['class' => 'control-label']) !!}
                    {!! Form::text('youtube_url', old('youtube_url'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('youtube_url'))
                        <p class="help-block">
                            {{ $errors->first('youtube_url') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($info->image)
                        <a href="{{ asset('uploads/'.$info->image) }}" target="_blank"><img class="img-square" src="{{ asset('uploads/'.$info->image) }}"></a>
                    @endif
                    {!! Form::label('image', 'Logo Image', ['class' => 'control-label']) !!}
                    {!! Form::file('image', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('image'))
                        <p class="help-block">
                            {{ $errors->first('image') }}
                        </p>
                    @endif
                </div>
            </div> 
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($info->footer_image)
                        <a href="{{ asset('uploads/'.$info->footer_image) }}" target="_blank"><img class="img-square" src="{{ asset('uploads/'.$info->footer_image) }}"></a>
                    @endif
                    {!! Form::label('footer_image', 'Footer Image', ['class' => 'control-label']) !!}
                    {!! Form::file('footer_image', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('footer_image'))
                        <p class="help-block">
                            {{ $errors->first('footer_image') }}
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