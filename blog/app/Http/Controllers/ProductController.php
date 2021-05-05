<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Product;
use DB;

class ProductController extends Controller
{
    //get all product
    // function getAllProduct(){
    //     $products= DB::table('products')->take(4)->get();
    //     return view('index',array(
    //         'products' => $products
    //     ));
    // }
    function getAllProduct(){
        $products= Product::all();
        return view('index',array(
            'products' => $products
        ));
    }

    //get detail product
    function getDetailProductByID(Request $request){       
        $id = $request->id;
        $productsDetailByID = Product::where('id',$id)->first();     
        return view('shop-single-product',['products'=>$productsDetailByID]);
    }        
    // function getDetailProductByID($id){
    //     $productsDetailByID = DB::table('products')->where('id',$id)->first();
    //     //dd($productsDetailByID);
    //    //$productsDetailByID = DB::table('products')->where('id',$id)->first();
      

    //     //return view('shop-single-product',compact('productsDetailByID'));
    //    return view('shop-single-product',['products'=>$productsDetailByID]);
    // }

   
    
}
