@extends('layouts.admin')

@section('content')
    <h3 class="page-title">@lang('global.header.title')</h3>
    
    {!! Form::model($header, ['method' => 'PUT', 'route' => ['admin.header.update', $header->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($header->image)
                        <a href="{{ asset('uploads/'.$header->image) }}" target="_blank"><img src="{{ asset('uploads/thumb/'.$header->image) }}"></a>
                    @endif
                    {!! Form::label('image', 'Header Image', ['class' => 'control-label']) !!}
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