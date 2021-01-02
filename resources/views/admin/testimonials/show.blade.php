@extends('layouts.admin')

@section('content')
<h3 class="page-title">@lang('global.testimonials.title')</h3>

<div class="panel panel-default">
    <div class="panel-heading">
        @lang('global.app_view')
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>@lang('global.testimonials.fields.image')</th>
                        <td>{{ $testimonials->image }}</td>
                    </tr>
                    <tr>
                        <th>@lang('global.testimonials.fields.client')</th>
                        <td>{{ $testimonials->client }}</td>
                    </tr>
                    <tr>
                        <th>@lang('global.testimonials.fields.position')</th>
                        <td>{{ $testimonials->position }}</td>
                    </tr>
                    <tr>
                        <th>@lang('global.testimonials.fields.title')</th>
                        <td>{{ $testimonials->title }}</td>
                    </tr>
                    <tr>
                        <th>@lang('global.testimonials.fields.created_at')</th>
                        <td>{{ $testimonials->created_at }}</td>
                    </tr>
                </table>
            </div>
        </div><!-- Nav tabs -->
        <p>&nbsp;</p>
        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
    </div>
</div>
@stop