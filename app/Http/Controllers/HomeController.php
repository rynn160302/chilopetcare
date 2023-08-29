<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if($request->user()) {
            $products = Product::get();
            return view('home', compact('products'));
        }else{
            return view('welcome');
        }
    }
}
