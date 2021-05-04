<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;

class ReportController extends Controller
{
    public function bestsale(){
        $products = DB::table('products')->orderby('sold','desc')->take(4)->get();
        return view('admin-pages.bestsale', array(
            'products' => $products
        ));
    }

    public function bestview(){
        $products = DB::table('products')->orderby('view','desc')->take(4)->get();
        return view('admin-pages.bestsale', array(
            'products' => $products
        ));
    }

    public function sales(){
        return view('admin-pages.sales');
    }
}
