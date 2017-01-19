<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class FrontController extends Controller
{

    public function index()
    {
        return view('front.index');
    }

    public function products($category)
    {
        if ($category == 'all') {
            $products = Product::orderBy('created_at', 'desc')
                                ->paginate(10);
            $title = 'All Products';
        } else {
            $category = Category::where('slug', $category)->first();
            $products = Product::where('category_id', $category->id)
                                ->orderBy('created_at', 'desc')
                                ->paginate(10);
            $title = $category->name;
        }

        return view('front.products.list', compact('products', 'title'));
    }

    public function product($slug)
    {
        return view('front.product.single');
    }
}
