@extends('layouts.main')

@section('title')
  {{ $title }} - Cartavel
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <ol class="breadcrumb">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li class="active">{{$title}}</li>
                </ol>

                <h1>{{ $title }}</h1>

                <div class="row">

                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Categories
                            </div>
                            <div class="panel-body">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li class="{{ Request::is('products/all*') ? 'active' : '' }}">
                                            <a href="{{route('products.list','all')}}">All Products</a>
                                        </li>
                                      @foreach ($categories as $category)
                                          <li class="{{ Request::is('products/'.$category->slug.'*') ? 'active' : '' }}">
                                              <a href="{{route('products.list', $category->slug)}}">{{$category->name}}</a>
                                          </li>
                                      @endforeach
                                    </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @forelse ($products as $product)
                                    <div class="col-md-3">
                                        <a href="{{route('products.single', $product->slug )}}">
                                          <img src="{{url('img/products/'.$product->image)}}" class="product-img">
                                          <h4>{{ $product->name }}</h4>
                                          <p>Rp {{ number_format($product->price) }}</p>
                                        </a>
                                        {!! Form::open(['method' => 'PUT', 'route' => ['cart.addItem', $product->id]]) !!}
                                        <div class="input-group">
                                          <input type="number" class="form-control" name="qty" value="1" min="1">
                                          <span class="input-group-btn">
                                            <button type="submit" name="submit" class="btn btn-primary btn-block"><i class="fa fa-cart-plus"></i> Add to Cart</button>
                                          </span>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                @empty
                                    <h3>No Products</h3>
                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('pagination')
    <div class="row">
        <div class="text-center">
            {!! $products->links() !!}
        </div>
    </div>
@endsection
