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
  
}
