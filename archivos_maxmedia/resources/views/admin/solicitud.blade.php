@extends('admin.tempalte-2')

<style>
    .combobox{
        position: relative;
        display: inline-block;
    }
    .custom-combobox-toggle {
        position: absolute;
        top: 0;
        bottom: 0;
        margin-left: -1px;
        padding: 0;
    }
    .custom-combobox-input {
        margin: 0;
        padding: 0px 0px;
    }
</style>

@section('content')

<link href="{{ asset('/css/sweetalert.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
@include('admin.partials.nav')
@include('admin.partials.errors')
@include('admin.partials.message')
<div class="subnavbar">
    <div class="subnavbar-inner">
        <div class="container">
            <ul class="mainnav">
                <li ><a href="{{ url('admin/home') }}"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
                <li class="active"><a href="{{ url('admin/report') }}"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
                <li><a href="{{ route('admin.payment.index') }}"><i class="icon-money"></i><span>Payments</span> </a></li>
                <li><a href="{{ url('admin/placement') }}"><i class="icon-bar-chart"></i><span>Placement</span> </a> </li>
            </ul>
        </div>
    </div>
</div>
<br>
<br>
<br>
<div class="">
    <div class="main-inner">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-header">
                            <i class="icon-list"></i>
                            <h3>Request</h3>
                        </div>
                        <div class="widget-content" >
                            <table id="tbl_request" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Cancel</th>
                                    <th>Date</th>
                                    <th>Quantity</th>
                                    <th>Description</th>
                                    <th>User</th>
                                    <th>Paid</th>
                                    <th>Paypal Email</th>
                                    <th>Paypal Name</th>
                                    <th>Deliver</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($solicitudes as $solicitud)
                                <tr>
                                    <td>
                                        {!! Form::open(['route' => ['admin.payment.destroy', $solicitud->id]]) !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button onClick="return confirm('Delete register?')" class="btn btn-danger">
                                            <span class="glyphicon glyphicon-edit" aria-hidden="true">Destroy</span>
                                        </button>
                                        {!! Form::close() !!}
                                    </td>
                                    <td>{{ date('Y-m-d',strtotime($solicitud->created_at)) }}</td>
                                    <td>
                                     @if($solicitud->pagada == 0)
                                        <input
                                            style="min-height: 25px; max-width: 90px"
                                            type="number"
                                            min="1"
                                            step="10"
                                            max="{{ $solicitud->cantidad}}"
                                            value="{{ $solicitud->cantidad}}"
                                            id="product_{{ $solicitud->id }}"
                                            >
                                        <a
                                            href="#"
                                            class="btn btn-warning btn-update-item"
                                            data-href="{{ route('update-quantity', $solicitud->id) }}"
                                            data-id = "{{ $solicitud->id }}"
                                            >
                                            <i class="icon icon-refresh"></i> </td>
                                    @else
                                    <input
                                        style="min-height: 25px; max-width: 90px"
                                        type="number"
                                        min="1"
                                        step="10"
                                        max="{{ $solicitud->cantidad}}"
                                        value="{{ $solicitud->cantidad}}"
                                        readonly
                                    >
                                    @endif
                                    <td>{{ $solicitud->descripcion}}</td>
                                    <td>{{ $solicitud->email }}</td>
                                    <td>@if($solicitud->pagada == 1) SI @else NO @endif </td>
                                    <td>{{ $solicitud->paypal_email }}</td>
                                    <td>{{ $solicitud->paypal_name }}</td>
                                    <td>
                                        @if($solicitud->pagada == 0)
                                        {!! Form::open(['route' => ['paid']]) !!}
                                        <input type="hidden" name="_method" value="POST">
                                        <input type="hidden" name="cantidad" value="{{ $solicitud->cantidad }}"/>
                                        <input type="hidden" name="id" value="{{ $solicitud->id }}"/>
                                        <input type="hidden" name="id_user" value="{{ $solicitud->id_user }}"/>
                                        <button id="payment" onClick="return confirm('Pai register?')" class="btn btn-primary">
                                            <span class="glyphicon glyphicon-edit" aria-hidden="true">Pai</span>
                                        </button>
                                        {!! Form::close() !!}
                                        @endif
                                    </td>
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
<br>
<br>
<br>
<br>
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
@include('admin.partials.footer')

<script src="{{ asset('js/sweetalert.min.js') }}"></script>
@include('maxmedia.partials.notify')
@stop
@section('script')
<script>
    $(document).ready(function() {
        $(".btn-update-item").on('click', function(e){
            e.preventDefault();

            var id = $(this).data('id');
            var href = $(this).data('href');
            var quantity = $("#product_" + id).val();
            window.location.href = href + "/" + quantity;
        });
    });
</script>
<script type="text/javascript" src="{{ asset('js/admin/admin-report.js') }}"></script>
<script type="text/javascript">
$(document).ready(function($) {
    $('#tbl_request').DataTable({
        ordering: false,
        searching: true
    });
});
</script>
@stop
