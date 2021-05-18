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
        Cart::add(array('id'=>$id,'name'=>$productByID->product_name,'qty'=>1,'price'=>$productByID->price,'weight'=>0,'options'=>array( 'image'=>$productByID->image,'sold'=>$productByID->sold,'hot'=>$productByID->hot,'note'=>$productByID->note,'create_date'=>$productByID->create_date)));
       
        $detailBill = New DetailBill();
        // $productByID = Product::where('id',$id)->first();
        // $isCheckItem = DetailBill::find();
        // // $productByID = DB::table('products')->where('id',$id)->first();
        // Cart::add(array('id'=>$id,'name'=>$productByID->product_name,'qty'=>1,'price'=>$productByID->price,'weight'=>0,'options'=>array( 'image'=>$productByID->image,'sold'=>$productByID->sold,'hot'=>$productByID->hot,'note'=>$productByID->note,'create_date'=>$productByID->create_date)));
        $detailBill->product_id = $id;
        $detailBill->count_product = 1;
        $detailBill->count_price = $productByID->price ;
        $detailBill->save();
        

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
        if($row->qty > 0){
            $product_id =   $row->id; 
            Cart::update($rowID,$row->qty -1);
            $detailBill = DetailBill::find( $product_id);
            $newRow = Cart::get($rowID);
            $detailBill->count_product =$newRow->qty;
            $detailBill->count_price = $row->price ;

            echo "<pre>";
            print_r($detailBill);
            echo "</pre>";

            //$detailBill->save();
        }
        if($row->qty ==0){
           
            $product_id =   $row->id; 
            $detailBill = DetailBill::find( $product_id);
            $detailBill->deltete();
            echo "<pre>";
            print_r($detailBill);
            echo "</pre>";
            Cart::remove($rowID);
            //return redirect()->route('cart');
        }      
        echo "<pre>";
        print_r($detailBill);
        echo "</pre>";
        Cart::remove($rowID);
   

      //  return redirect()->route('cart');
    }
    
    //increment quality
    function inQuality($rowID){
        $row = Cart::get($rowID);
        $product_id =   $row->id; 
        Cart::update($rowID,$row->qty +1);
     
        $detailBill = DetailBill::find( $product_id);
        $newRow = Cart::get($rowID);
        $detailBill->count_product =$newRow->qty;
        $detailBill->count_price = $row->price ;
        $detailBill->save();
        
        return redirect()->route('cart');
    }

    //delete item
    function deleteItem($rowID){
        Cart::remove($rowID);
        return redirect()->route('cart');
    }
}
