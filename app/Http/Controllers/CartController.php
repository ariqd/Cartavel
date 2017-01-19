<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$cart = Cart::content();
      	return view('front.cart.cart', compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		Cart::update($id, $request->qty);
      	if ($request->qty == 0) {
        	return back()->with('success', 'Product deleted');
      	}
      	return back()->with('success', 'Product quantity updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		Cart::remove($id);
	 	return back()->with('success', 'Product deleted');
    }

	/**
    * Add item / product to cart.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function addItem(Request $request, $id)
    {
      $product = Product::find($id);

      Cart::add($id, $product->name, $request->input('qty'), $product->price, ['image' => $product->image]);

      return back()->with('success', $product->name.' added to cart');
    }
}
