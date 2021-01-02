@extends('layouts.admin')

@section('content')
<h3 class="page-title">@lang('global.users.title')</h3>

{!! Form::model($user, ['method' => 'PUT', 'route' => ['admin.users.update', $user->id], 'files' => true,]) !!}

<div class="panel panel-default">
    <div class="panel-heading">
        @lang('global.app_edit')
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('name'))
                <p class="help-block">
                    {{ $errors->first('name') }}
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('email', 'Email*', ['class' => 'control-label']) !!}
                {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
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
                {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('password'))
                <p class="help-block">
                    {{ $errors->first('password') }}
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('role', 'Role*', ['class' => 'control-label']) !!}
                {!! Form::select('role[]', $roles, old('role') ? old('role') : $user->role->pluck('id')->toArray(), ['class' => 'form-control select2', 'multiple' => 'multiple', 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('role'))
                <p class="help-block">
                    {{ $errors->first('role') }}
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
                {!! Form::label('website_url', 'Website url', ['class' => 'control-label']) !!}
                {!! Form::text('website_url', old('website_url'), ['class' => 'form-control', 'placeholder' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('website_url'))
                <p class="help-block">
                    {{ $errors->first('website_url') }}
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('phone', 'Phone*', ['class' => 'control-label']) !!}
                {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('phone'))
                <p class="help-block">
                    {{ $errors->first('phone') }}
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('presentation', 'Presentation', ['class' => 'control-label']) !!}
                {!! Form::textarea('presentation', old('presentation'), ['class' => 'form-control', 'placeholder' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('presentation'))
                <p class="help-block">
                    {{ $errors->first('presentation') }}
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                @if ($user->profile_image)
                <a href="{{ asset('uploads/'.$user->profile_image) }}" target="_blank"><img src="{{ asset('uploads/thumb/'.$user->profile_image) }}"></a>
                @endif
                {!! Form::label('profile_image', 'Profile image', ['class' => 'control-label']) !!}
                {!! Form::file('profile_image', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                {!! Form::hidden('profile_image_max_size', 8) !!}
                {!! Form::hidden('profile_image_max_width', 4000) !!}
                {!! Form::hidden('profile_image_max_height', 4000) !!}
                <p class="help-block"></p>
                @if($errors->has('profile_image'))
                <p class="help-block">
                    {{ $errors->first('profile_image') }}
                </p>
                @endif
            </div>
        </div>
    </div>
</div>

{!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
@stop
