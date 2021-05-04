<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //lay danh sach
    // public function layDanhSach(){
    //     $List = User::all();
    //     return view();
    // }

    //getThem
    public function postThem(Request $request){
        $this->validate($request,[
            'username'=>'required|min:3',
            'fullname'=>'required|min:3|max:30',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:3|max:30',
            'passwordmatch'=>'required|same:password'
           
        ],[
            'username.required'=>'Ban chua nhap ten',
            'username.min'=>'Ten phai hon 3 ky tu',
            'fullname.required'=>'Ban chua  ten day du',
            'fullname.min'=>'Ten day du lon hon 3 ky tu',
            'fullname.max'=>'Ten day be hon 30 ky tu',
            'email.required'=>'Ban chua nhap email',

            'email.email'=>'Ban chua nhap  dung dinh dang email',
            'email.unique'=>'Email da ton tai',
            'password.required'=>'Ban chua nhap mat khau',
            'password.min'=>'Mat khau phai co it nhat 3 ky tu',
            'password.max'=>'Mat khau toi da 30 ky tu',
            'passwordmatch.required'=>'Ban chua nhap lai mat khau',
            'passwordmatch.same'=>'Mat khau khong match'
        ]);
    }

}
