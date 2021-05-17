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
        $products= Product::all();
        return view('index',array(
            'products' => $products
        ));
    }

    //get all product with paginate 
    function getAllProductPaginate(){
        $products = Product::paginate(12);
        $productsBestSeller = Product::all()->take(8)->sortBy('sold');
        return view('index',array(
            'products' => $products,'productsbestseller'=>$productsBestSeller
        ));
    }

    //get detail product
    function getDetailProductByID(Request $request){       
        $id = $request->id;        
        $productsDetailByID = Product::where('id',$id)->first();
      
        return view('shop-single-product',['products'=>$productsDetailByID]);
    }        
    

    //get product related 
    function getProductRelated(Request $request){
        $id = $request->id;
        $typeIDproduct = Prododuct::where('id',$id)->select('type_id');
        $productsRelated = Product::where('type_id',$id)->get();
    }
    

    //get product search
    function searchProduct(Request $request){
        $keysword = $request->timkiem;
        $products = Product::where('product_name','like',"%$keysword%")->orWhere('note','like',"%$keysword%")->take(15)->paginate(8);
        $productsBestSeller = Product::all()->take(8)->sortBy('sold');
        return view('searchproduct',['products'=>$products,'tukhoa'=>$keysword,'productsbestseller'=>$productsBestSeller]);
    }

    //get product best seller 
    function getProductBestSeller(){
        $products = Product::all()->sort('sold');
    }
   
    
}
