@extends('admin.tempalte-2')
@section('content')

<link href="{{ asset('/css/sweetalert.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
@include('admin.partials.nav')

@include('admin.partials.message')
<div class="subnavbar">
    <div class="subnavbar-inner">
        <div class="container">
            <ul class="mainnav">
                <li class=""><a href="{{ url('admin/home') }}"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
                <li><a href="{{ url('admin/report') }}"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
                <li ><a href="{{ route('admin.payment.index') }}"><i class="icon-money"></i><span>Payments</span> </a></li>
                <li class="active"><a href="{{ route('placement') }}"><i class="icon-bar-chart"></i><span>Placements</span> </a> </li>
                <li><a href="#"><i class="icon-code"></i><span>Shortcodes</span> </a> </li>
            </ul>
        </div>
    </div>
</div>
@include('admin.partials.errors')
<div class="container text-center">

    <div class="page-header">
        <h1>
            <i class="fa fa-user"></i> Placement <small>[ Add placement ]</small>
        </h1>
    </div>

    <div class="container">

    </div>
    <div class="page">
        <center>
            {!! Form::model($placement, array('route' => array('admin.placement.update', $placement->id))) !!}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="name">Name:</label>

                {!!
                Form::text(
                'nombre',
                null,
                array(
                'class'=>'form-control',

                'autofocus' => 'autofocus',
                'required' => 'required'
                )
                )
                !!}
            </div>


            <div class="form-group">
                <label for="address">Script:</label>

                {!!
                Form::textarea(
                'script',
                null,
                array(
                'class'=>'form-control'
                )
                )
                !!}
            </div>


            <div class="form-group">
                <label for="address">Description:</label>

                {!!
                Form::textarea(
                'descripcion',
                null,
                array(
                'class'=>'form-control'
                )
                )
                !!}
            </div>



            <div class="form-group">
                <label class="control-label" for="category_id">webs</label>
                {!! Form::select('web_id', $webs, null, ['class' => 'form-control','id' => 'comboboxa']) !!}
            </div>

            <div class="form-group">
                <label class="control-label" for="category_id">Anuncio</label>
                {!! Form::select('ad_id', $ads, null, ['class' => 'form-control ']) !!}
            </div>



            <div class="form-group">
                {!! Form::submit('Save', array('class'=>'btn btn-primary')) !!}
                <a href="{{ route('admin.placement.index') }}" class="btn btn-warning">Cancel</a>
            </div>
            {!! Form::close() !!}
        </center>

    </div>

</div>
@include('admin.partials.footer')
@include('maxmedia.partials.notify')
@stop
@section('script')

<script type="text/javascript" src="{{ asset('js/client/client-report.js') }}"></script>
@stop
