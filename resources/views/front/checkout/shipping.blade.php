@extends('layouts.checkout')

@section('title')
    Shipping - Cartavel Checkout
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (!$addresses->isEmpty())
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Choose shipping address</h3>
                        </div>
                    </div>
                    <div style="width: 100%; height: 20px; border-bottom: 1px solid #BDBDBD; text-align: center">
                        <span style="font-size: 23px; background-color: #F3F5F6; padding: 0 10px;color:#BDBDBD">
                             Or
                        </span>
                     </div>
                @else
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Create new address
                            </div>
                        </div>
                        <div class="panel-body">
                            
                        </div>
                    </div>


                @endif

            </div>
        </div>
    </div>

@endsection
