@extends('admin.tempalte-2')
@section('content')

<link href="{{ asset('/css/sweetalert.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
@include('admin.partials.nav')
@include('admin.partials.errors')
@include('admin.partials.message')
<div class="subnavbar">
    <div class="subnavbar-inner">
        <div class="container">
            <ul class="mainnav">
                <li class=""><a href="{{ url('admin/home') }}"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
                <li><a href="{{ url('admin/report') }}"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
                <li ><a href="{{ route('admin.payment.index') }}"><i class="icon-money"></i><span>Payments</span> </a></li>
                <li class="active"><a href="{{ route('placement') }}"><i class="icon-bar-chart"></i><span>Placements</span> </a> </li>

            </ul>
        </div>
    </div>
</div>
<div class="">
    <div class="main-inner">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-header">
                            <i class="icon-plus"></i>
                            <h3> Add webs</h3>
                        </div>
                        <div class="widget-container">
                            <br>
                             <a href="{{ route('admin.category.create') }}" class="btn btn-success">
                            <span class="icon-plus"></span>
                            Add ad
                            </a>
                            <br>
                            <br>
                            <table id="gest_ads_admin" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Edit</th>
                                <th>Remove</th>
                                <th>Name</th>
                                <th>Script</th>
                                <th>Date of create</th>
                                <th>Slug</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($ads as $ad)
                            <tr>
                                <td>
                                    <a href="{{ route('admin.ad.edit', $ad->id) }}" class="btn btn-primary">
                                        <span class="icon-edit" aria-hidden="true"></span>
                                    </a>
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['admin.ad.destroy', $ad->id]]) !!}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                                        <span class="icon-eraser" aria-hidden="true"></span>
                                    </button>
                                    {!! Form::close() !!}
                                </td>
                                <td>{{ $ad->nombre }}</td>
                                <td>{{ $ad->script }}</td>
                                <td>{{ $ad->created_at }}</td>
                                <td>{{ $ad->slug }}</td>
                            </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<br/>
@include('admin.partials.footer')

@stop
@section('script')
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
@include('maxmedia.partials.notify')
<script type="text/javascript" src="{{ asset('js/admin/admin-report.js') }}"></script>
<script type="text/javascript">
$(document).ready(function($) {
    $('#gest_ads_admin').DataTable({
        ordering: false,
        searching: true
    });
});
</script>
@stop
