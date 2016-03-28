@extends('layouts.master')

@section('title')
    p3 | home
@stop

@section('home')
        class="active"
@stop

@section('head')
    <link href="/css/home.css" rel="stylesheet">
@stop

@section('content')
    <div class="jumbotron">
        <h1>Generating</h1>
        <p class="lead">Here are two commonly used tools as developer's best friend. Press the button and start generating!</p>
        <p>
            <a class="btn btn-lg btn-success homePageBottton" href="#" role="button">Generate Text</a>
            <a class="btn btn-lg btn-success homePageBottton" href="#" role="button">Generate User</a>
        </p>
    </div>

    <div class="row marketing">
      <div class="col-md-6">
        <h4>Lorem Ipsum Generator</h4>
        <p>In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation.</p>
      </div>

      <div class="col-md-6">
        <h4>Random User Generator</h4>
        <p>In many development circumstances, random fake users are used to test drive the progrem before concrete users are inplimented.</p>
      </div>
    </div>
@stop
