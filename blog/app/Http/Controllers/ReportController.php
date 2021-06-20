<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;

class ReportController extends Controller
{
    public function bestsale(){
        $products = DB::table('products')->orderby('sold','desc')->get();
        return view('admin-pages.bestsale', array(
            'products' => $products
        ));
    }

    public function bestview(){
        $products = DB::table('products')->orderby('view','desc')->get();
        return view('admin-pages.bestsale', array(
            'products' => $products
        ));
    }

    public function sales(){
        return view('admin-pages.sales');
    }

    public function KiemTraDoanhThu(Request $request){
        $TongTien = 0;
        $TuNgay = $request->TuNgay;
        $DenNgay = $request->DenNgay;
        $DSBill = DB::table('bills')->where('create_date', '>', $TuNgay)->where('create_date', '<', $DenNgay)->get();
        foreach($DSBill as $item){
            $TongTien += $item->price;
        }
        return response()->json($TongTien);
    }
}
