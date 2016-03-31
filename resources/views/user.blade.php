@extends('layouts.master')

@section('title')
    p3 | user
@stop

@section('user')
        class="active"
@stop

@section('head')
@stop

@section('content')

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-sm-4 sidebar-offcanvas" id="sidebar">
            <form method="POST" action="/user">
                {{ csrf_field() }}
                <div class="form-group">
                    <lable>number of paragraphs:</lable>
                    <input class="form-control" type="text" name="number_of_paragraphs">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary form-control" type=submit>
                </div>
            </form>
        </div><!--/.sidebar-offcanvas-->

        <div class="col-sm-8">
            <div class="jumbotron">
                <h2>Here is the outcome...</h2>
                </br>
                <div>
                    @foreach($output as $key => $value)
                        <p>{{ $value }}</p>
                    @endforeach
                <div>
            </div>

        </div><!--/.col-sm-8-->

    </div>

@stop
