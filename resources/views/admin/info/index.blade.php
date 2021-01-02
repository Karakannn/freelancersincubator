@inject('request', 'Illuminate\Http\Request')
@extends('layouts.admin')

@section('content')
<h3 class="page-title">@lang('global.info.title')</h3>
<div class="panel panel-default">
    <div class="panel-heading">
        @lang('global.app_list')
    </div>

    <div class="panel-body table-responsive">
        <table class="table table-bordered table-striped {{ count($info) > 0 ? 'datatable' : '' }} @can('info_delete') @if ( request('info_delete') != 1 ) dt-select @endif @endcan">
            <thead>
                <tr>
                    <th>@lang('global.info.fields.header_logo')</th>
                    <th>@lang('global.info.fields.footer_logo')</th>
                    <th>@lang('global.info.fields.phone')</th>
                    <th>@lang('global.info.fields.address')</th>
                    <th>@lang('global.info.fields.email')</th>
                    @if( request('show_deleted') == 1 )
                    <th>&nbsp;</th>
                    @else
                    <th>&nbsp;</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @if (count($info) > 0)
                @foreach ($info as $single_info)
                <tr data-entry-id="{{ $single_info->id }}">
                    @can('info_delete')
                    @if ( request('show_deleted') != 1 )<td></td>@endif
                    @endcan
                    <td>@if($single_info->image)<a href="{{ asset('uploads/' . $single_info->image) }}" target="_blank"><img class="img-square" src="{{ asset('uploads/' . $single_info->image) }}" /></a>@endif</td>
                    <td>@if($single_info->footer_image)<a href="{{ asset('uploads/' . $single_info->footer_image) }}" target="_blank"><img class="img-square" src="{{ asset('uploads/' . $single_info->footer_image) }}" /></a>@endif</td>
                    <td>{{ $single_info->contact_number }}</td>
                    <td>{{ $single_info->office_location }}</td>
                    <td>{{ $single_info->email }}</td>
                    @if( request('show_deleted') == 1 )
                    <td>
                        {!! Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'POST',
                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                        'route' => ['admin.info.restore', $single_info->id])) !!}
                        {!! Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                        {!! Form::close() !!}
                        {!! Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'DELETE',
                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                        'route' => ['admin.info.perma_del', $single_info->id])) !!}
                        {!! Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                        {!! Form::close() !!}
                    </td>
                    @else
                    <td>
                        @can('info_view')
                        <a href="{{ route('admin.info.show',['id' => $single_info->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                        @endcan
                        @can('info_edit')
                        <a href="{{ route('admin.info.edit',[$single_info->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                        @endcan
                        @can('info_delete')
                        {!! Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'DELETE',
                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                        'route' => ['admin.info.destroy', $single_info->id])) !!}
                        {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                        {!! Form::close() !!}
                        @endcan
                    </td>
                    @endif
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="12">@lang('global.app_no_entries_in_table')</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@stop