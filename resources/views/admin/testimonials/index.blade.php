@inject('request', 'Illuminate\Http\Request')
@extends('layouts.admin')

@section('content')
    <h3 class="page-title">@lang('global.testimonials.title')</h3>
    @can('testimonials_create')
    <p>
        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
        
    </p>
    @endcan

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($testimonials) > 0 ? 'datatable' : '' }} @can('testimonials_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('testimonials_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan
                        <th>@lang('global.testimonials.fields.image')</th>
                        <th>@lang('global.testimonials.fields.client')</th>
                        <th>@lang('global.testimonials.fields.position')</th>
                        <th>@lang('global.testimonials.fields.title')</th>
                        <th>@lang('global.testimonials.fields.created_at')</th>
                                                <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($testimonials) > 0)
                        @foreach ($testimonials as $testimonial)
                            <tr data-entry-id="{{ $testimonial->id }}">
                                @can('testimonials_delete')
                                    <td></td>
                                @endcan

                                <td>@if($testimonial->image)<a href="{{ asset('uploads/' . $testimonial->image) }}" target="_blank"><img src="{{ asset('uploads/thumb/' . $testimonial->image) }}"/></a>@endif</td>
                                <td>{{ $testimonial->client }}</td>
                                <td>{{ $testimonial->position }}</td>
                                <td>{{ $testimonial->title }}</td>
                                <td>{{ $testimonial->created_at }}</td>
                                <td>
                                    @can('testimonials_view')
                                    <a href="{{ route('admin.testimonials.show',[$testimonial->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('testimonials_edit')
                                    <a href="{{ route('admin.testimonials.edit',[$testimonial->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('testimonials_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.testimonials.destroy', $testimonial->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('testimonials_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.testimonials.mass_destroy') }}';
        @endcan

    </script>
@endsection