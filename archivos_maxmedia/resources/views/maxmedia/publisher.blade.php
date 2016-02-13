@extends('maxmedia.template')

@section('content')
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"> <img class="img-responsive" src="images/logof - copia.png" width="70" height="25" alt="logof - copia"/>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li ><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><a href="{{ url('/publishers') }}">Publishers</a></li>
                <li><a href="{{ url('/advertiser') }}">Advertisers</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
            </ul>
            @include('maxmedia.partials.form-login')
        </div>
    </div>
</nav

@include('maxmedia.partials.errors')

<br>
<div class="clearfix"></div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Publishers</h1>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisici elit,
                    <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                    <br>Ut enim ad minim veniam, quis nostrud</p>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="/images/how.gif" class="img-responsive">
                <h2>How to Work it !!!</h2>
                <ol>
                    <li>One</li>
                    <li>Two</li>
                    <li>Three</li>
                </ol>

            </div>
            <div class="col-md-4">
                <img src="/images/profi.gif" class="img-responsive">
                <h2 class="text-center">$$$&nbsp;</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                    <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                    <br>Ut enim ad minim veniam, quis nostrud</p>
            </div>
            <div class="col-md-4">
                <img src="/images/worldwide.gif" class="img-responsive">
                <h2>work from anywhere</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                    <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                    <br>Ut enim ad minim veniam, quis nostrud</p>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>


@include('maxmedia.partials.footer')
@include('maxmedia.partials.notify')
@include('maxmedia.partials.message')


@stop