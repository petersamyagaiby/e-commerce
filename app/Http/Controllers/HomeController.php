<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function get_home() {
        $products = Product::orderBy('id', 'desc')->limit(3)->get();
        // $products = Product::all();
        // dd($products);
        return view('index', ['products' => $products]);
    }

    public function category() {
        dd("asdwasd");
    }
}
