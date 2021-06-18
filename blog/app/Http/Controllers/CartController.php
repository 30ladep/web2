<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB,Cart;
use App\DetailBill;

class CartController extends Controller
{
    
    //addcart
    function addCart($id){
        $productByID = DB::table('products')->where('id',$id)->first();
        Cart::add([
            'id'=>$id,
            'name'=>$productByID->product_name,
            'qty'=>1,
            'price'=>$productByID->price,
            'weight'=>0,
            'options'=>[ 
                'image'=>$productByID->image,
                'sold'=>$productByID->sold,
                'hot'=>$productByID->hot,
                'note'=>$productByID->note,
                'create_date'=>$productByID->create_date] 
        ]);
       // dd(Cart::content());
        return redirect()->route('cart');
    }
   
    //cart
    function cart(){
        $cart = Cart::content(); 
       // dd($cart);
        $cart_priceTotal = Cart::priceTotal();
        return view('shop-cart',compact('cart','cart_priceTotal'));
    }

    //decrement quality
    function deQuality($rowID){
        $row = Cart::get($rowID);
        Cart::update($rowID,$row->qty -1);

       return redirect()->route('cart');
    }
    
    //increment quality
    function inQuality($rowID){
        $row = Cart::get($rowID);
        $product_id =   $row->id; 
        Cart::update($rowID,$row->qty +1);
     
   
        return redirect()->route('cart');
    }

    //delete item
    function deleteItem($rowID){
        Cart::remove($rowID);
        return redirect()->route('cart');
    }
}
