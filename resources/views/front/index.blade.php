@extends('layouts.main')

@section('title')
  Home - Cartavel
@endsection

@section('content')
  <div class="container">
    <div class="row">

        <div class="col-md-9 col-md-push-3">
          <div class="jumbotron">
            <h1>Welcome to {{config('app.name', 'Cartavel')}}!</h1>
            <p>Cartavel is a template for e-commerce websites based on Laravel 5.3 and Bootstrap</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">View Code on GitHub</a></p>
          </div>
        </div>


        <div class="col-md-3 col-md-pull-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        Categories
                    </div>
                </div>
                <div class="panel-body no-padding panel-home">
                    <ul class="nav nav-pills nav-stacked nav-categories">
                        @foreach ($categories as $category)
                            <li><a href="#">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>


    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="panel-title">
              Latest Products
            </div>
          </div>
          <div class="panel-body">

          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="panel-title">
              Latest Products
            </div>
          </div>
          <div class="panel-body">

          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="panel-title">
              Lorem Ipsum
            </div>
          </div>
          <div class="panel-body">

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="panel-title">
              Lorem Ipsum
            </div>
          </div>
          <div class="panel-body">

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
