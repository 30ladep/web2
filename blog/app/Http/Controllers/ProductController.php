<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Product;

class ProductController extends Controller
{
    function getAllProduct(){
        $products= Product::all()->toArray();
        return view('index',['products'=>$products]);
    }
}
