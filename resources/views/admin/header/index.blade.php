@inject('request', 'Illuminate\Http\Request')
@extends('layouts.admin')

@section('content')
<h3 class="page-title">@lang('global.header.title')</h3>
<div class="panel panel-default">
    <div class="panel-heading">
        @lang('global.app_list')
    </div>

    <div class="panel-body table-responsive">
        <table class="table table-bordered table-striped {{ count($header) > 0 ? 'datatable' : '' }}">
            <thead>
                <tr>
                    <th>@lang('global.header.fields.image')</th>
                    <th>@lang('global.header.fields.page')</th>
                </tr>
            </thead>

            <tbody>
                @if (count($header) > 0)
                @foreach ($header as $single_header)
                <tr data-entry-id="{{ $single_header->id }}">
                    <td>@if($single_header->image)<a href="{{ asset('uploads/' . $single_header->image) }}" target="_blank"><img src="{{ asset('uploads/thumb/' . $single_header->image) }}" /></a>@endif</td>
                    <td>{{ $single_header->page }}</td>
                    <td>
                        @can('header_edit')
                        <a href="{{ route('admin.header.edit',[$single_header->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                        @endcan
                    </td>
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