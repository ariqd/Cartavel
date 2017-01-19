@extends('layouts.main')

@section('title')
    Cart - Cartavel
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li class="active">Cart</li>
                </ol>

                <h1>Cart</h1>
            </div>
            @if (!$cart->isEmpty())
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th width="20%">Qty</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $item)
                                <tr>
                                    <td><img src="{{url('img/products/'.$item->options->image)}}" class="cart-img"></td>
                                    <td><h4>{{$item->name}}</h4></td>
                                    <td><h4>Rp {{ number_format($item->price) }}</h4></td>
                                    <td>
                                        {!! Form::open(['method' => 'PUT', 'route' => ['cart.update', $item->rowId]]) !!}
                                        <div class="input-group">
                                          <input type="number" class="form-control" name="qty" value="{{$item->qty}}" min="0">
                                          <span class="input-group-btn">
                                            <button type="submit" name="submit" class="btn btn-warning btn-block">Update</button>
                                          </span>
                                        </div>
                                        {!! Form::close() !!}
                                    </td>
                                    <td><h4>Rp {{ number_format($item->price * $item->qty) }}</h4></td>
                                    <td>
                                        {!! Form::open(['method' => 'POST', 'route' => ['cart.destroy', $item->rowId]]) !!}
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i></button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            Summary
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed">
                            <tr>
                                <td><h4>Qty :</h4></td>
                                <td><h4>{{ Cart::count() }}</h4></td>
                            </tr>
                            <tr>
                                <td><h4>Total :</h4></td>
                                <td><h4>Rp {{ Cart::total() }}</h4></td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <a href="{{route('checkout.shipping')}}" class="btn btn-primary btn-lg btn-block">
                            <i class="fa fa-check"></i> Checkout
                        </a>
                    </div>
                </div>
            </div>
        @else
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                            <h2>No products yet.</h2>
                            <a href="{{url('/')}}" class="btn btn-primary btn-lg">Start Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        </div>
    </div>
@endsection
