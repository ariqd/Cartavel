<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function shipping()
    {
        $addresses = Address::where('user_id', Auth::user()->id)->get();
        return view('front.checkout.shipping', compact('addresses'));
    }
}
