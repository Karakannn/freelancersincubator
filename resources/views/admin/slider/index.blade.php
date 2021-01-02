@inject('request', 'Illuminate\Http\Request')
@extends('layouts.admin')

@section('content')
<h3 class="page-title">@lang('global.slider.title')</h3>
@can('slider_create')
<p>
    <a href="{{ route('admin.slider.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
</p>
@endcan
<div class="panel panel-default">
    <div class="panel-heading">
        @lang('global.app_list')
    </div>

    <div class="panel-body table-responsive">
        <table class="table table-bordered table-striped {{ count($slider) > 0 ? 'datatable' : '' }} @can('slider_delete') @if ( request('slider_delete') != 1 ) dt-select @endif @endcan">
            <thead>
                <tr>
                    @can('slider_delete')
                    @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                    @endcan

                    <th>@lang('global.slider.fields.image')</th>
                    <th>@lang('global.slider.fields.line_1')</th>
                    <th>@lang('global.slider.fields.line_2')</th>
                    <th>@lang('global.slider.fields.line_3')</th>
                    <th>@lang('global.slider.fields.button_text')</th>
                    <th>@lang('global.slider.fields.button_url')</th>
                    @if( request('show_deleted') == 1 )
                    <th>&nbsp;</th>
                    @else
                    <th>&nbsp;</th>
                    @endif
                </tr>
            </thead>

            <tbody>
                @if (count($slider) > 0)
                @foreach ($slider as $single_slider)
                <tr data-entry-id="{{ $single_slider->id }}">
                    @can('slider_delete')
                    @if ( request('show_deleted') != 1 )<td></td>@endif
                    @endcan

                    <td>@if($single_slider->image)<a href="{{ asset('uploads/' . $single_slider->image) }}" target="_blank"><img src="{{ asset('uploads/thumb/' . $single_slider->image) }}" /></a>@endif</td>
                    <td>{{ $single_slider->line_1 }}</td>
                    <td>{{ $single_slider->line_2 }}</td>
                    <td>{{ $single_slider->line_3 }}</td>
                    <td>{{ $single_slider->button_text }}</td>
                    <td>{{ $single_slider->button_url }}</td>
                    @if( request('show_deleted') == 1 )
                    <td>
                        {!! Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'POST',
                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                        'route' => ['admin.slider.restore', $single_slider->id])) !!}
                        {!! Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                        {!! Form::close() !!}
                        {!! Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'DELETE',
                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                        'route' => ['admin.slider.perma_del', $single_slider->id])) !!}
                        {!! Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                        {!! Form::close() !!}
                    </td>
                    @else
                    <td>
                        @can('slider_view')
                        <a href="{{ route('admin.slider.show',['id' => $single_slider->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                        @endcan
                        @can('slider_edit')
                        <a href="{{ route('admin.slider.edit',[$single_slider->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                        @endcan
                        @can('slider_delete')
                        {!! Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'DELETE',
                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                        'route' => ['admin.slider.destroy', $single_slider->id])) !!}
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

@section('javascript')
    <script>
        @can('slider_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.slider.mass_destroy') }}';
        @endcan

    </script>
@endsection