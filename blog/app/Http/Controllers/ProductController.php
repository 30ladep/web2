<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Product;
use DB,Cart;

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
         $products_search = Product::where('product_name','like',"%$keysword%")->orWhere('note','like',"%$keysword%")->take(16)->paginate(8);
        $productsBestSeller = Product::all()->take(8)->sortBy('sold');
        return view('searchproduct',['products_search'=>$products_search,'tukhoa'=>$keysword,'productsbestseller'=>$productsBestSeller]);
    }

    //get product best seller 
    function getProductBestSeller(){
        $products = Product::all()->sort('sold');
    }

    //addcart
    function addCart($id){
        $productByID = DB::table('products')->where('id',$id)->first();
        Cart::add(array('id'=>$id,'name'=>$productByID->product_name,'qty'=>1,'price'=>$productByID->price,'weight'=>0,'options'=>array( 'image'=>$productByID->image,'sold'=>$productByID->sold,'hot'=>$productByID->hot,'note'=>$productByID->note,'create_date'=>$productByID->create_date)));
        
        return redirect()->route('cart');
    }
   
    //cart
    function cart(){
        $cart = Cart::content(); 
        $cart_priceTotal = Cart::priceTotal();
        return view('shop-cart',compact('cart','cart_priceTotal'));
    }

    //decrement quality
    function deQuality($rowID){
        $row = Cart::get($rowID);
        Cart::update($rowID,$row->qty -=1);
        $content = Cart::content();  
        return redirect()->route('cart');
    }
    
    //increment quality
    function inQuality($rowID){
        $row = Cart::get($rowID);
        Cart::update($rowID,$row->qty +=1);
        $content = Cart::content();
        return redirect()->route('cart');
    }
}
