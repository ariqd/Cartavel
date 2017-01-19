@extends('layouts.main')

@section('title')
    Blog - Cartavel
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li class="active">Blog</li>
                </ol>
                <h1>Blog</h1>
                {{-- <hr> --}}
                <div class="row">
                    <div class="col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                    <a href="#" class="blog">
                                        <div class="row">
                                        <div class="col-md-8">
                                            <h3 class="blog-title">
                                                Hello
                                            </h3>
                                            <p><small>by Lorem</small></p>
                                            <h4 class="blog-description">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit..
                                            </h4>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="http://dummyimage.com/220x150" alt="" />
                                        </div>
                                    </div>
                                    </a>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                    <a href="#" class="blog">
                                        <div class="row">
                                        <div class="col-md-8">
                                            <h3 class="blog-title">
                                                Hello
                                            </h3>
                                            <p><small>by Lorem</small></p>
                                            <p class="blog-description">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit..
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="http://dummyimage.com/220x150" alt="" />
                                        </div>
                                    </div>
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4>Featured</h4>
                        {{-- <hr> --}}
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" class="blog">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="blog-title">
                                                Hello
                                            </h3>
                                            <p><small>by Lorem</small></p>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="http://dummyimage.com/150x100" alt="" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" class="blog">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="blog-title">
                                                Hello
                                            </h3>
                                            <p><small>by Lorem</small></p>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="http://dummyimage.com/150x100" alt="" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
