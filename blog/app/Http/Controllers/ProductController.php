<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Product;
use DB;

class ProductController extends Controller
{
    //get all product
    function getAllProduct(){
        $products= DB::table('products')->take(4)->get();
        return view('index',array(
            'products' => $products
        ));
    }

    //get detail product
    function getDetailProductByID($id){
        $productsDetailByID = Product::get()->where('id',$id)->toArray();
        return view('shop-single-product',['products'=>$products]);
    }
}
