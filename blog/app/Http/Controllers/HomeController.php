<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use DB;
class HomeController extends Controller
{
    public function Index($controller = "index"){
        return view($controller);
    }
    public function getAllProducts(){
    //    // dd(1);
    //   $products=product::all();
    //  //$petani = DB::table('products')->get();
    //     dd($products);
    //     return view('index',['products'=>$products]);
    $products=DB::table('products')->take(4)->get();
   // dd($products);
    return view('index',['products'=>$products]);
    }
}
