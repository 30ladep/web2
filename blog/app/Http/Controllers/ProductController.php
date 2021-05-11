<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Product;
use DB;

class ProductController extends Controller
{
 
    function getAllProduct(){
        $products= Product::all();
        return view('index',array(
            'products' => $products
        ));
    }

    //get detail product
    function getDetailProductByID(Request $request){       
        $id = $request->id;
        // $productsDetailByID = Product::find($id)->first();   
        $productsDetailByID = Product::where('id',$id)->first();
        return view('shop-single-product',['products'=>$productsDetailByID]);
    }        
    

    //get product related 
    function getProductRelated(Request $request){
        $id = $request->id;
        $typeIDproduct = Prododuct::where('id',$id)->select('type_id');
        $productsRelated = Product::where('type_id',$id)->get();
    }

   
    
}
