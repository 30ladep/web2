<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function Index($controller = "welcome" ,$name = "Xin chào :))"){
        $data['name'] = $name;
        $data['fullname'] = "Day la full name trang chu";
        $data['lastname'] = $name;

        if($controller == "admin" && $name == true){
            $data['message'] = "Bạn đã đăng nhập thành công!";
            return view($controller, $data);
        }

        return view($controller, $data);
    }
    // public function TrangChu($name = "Đây là trang chủ"){
    //     $data['name'] = 'Đây là trang chủ vip pro';
    //     return view('trangchu', $data);
    // }
    // public function GioiThieu(){
    //     return view('gioithieu');
    // }
    // public function LienHe(){
    //     return view('lienhe');
    // }
    // public function SanPham($product = "Bàn và ghế"){
    //     $data['name'] = "Bàn và Ghế!";
    //     if($product == "ban"){
    //         $data['name'] = "Đây là sản phẩm bàn!";
    //     }
    //     if($product == "ghe"){
    //         $data['name'] = "Đây là sản phẩm ghế!";
    //     }
    //     return view('sanpham', $data);
    // }
}
