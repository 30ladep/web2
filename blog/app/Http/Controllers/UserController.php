<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //lay danh sach
    // public function layDanhSach(){
    //     $List = User::all();
    //     return view();
    // }

    //get register   
    public function getThem(){
        return view('login');
    }
    //post register
    public function postThem(Request $request){
        $this->validate($request,[
            'username'=>'required|min:3',
            'fullname'=>'required|min:3|max:30',
            'email'=>'required|email|unique:users,email',
            'phone'=>'required',
            'password'=>'required|min:3|max:30',
            'passwordmatch'=>'required|same:password'
           
        ],[
            'username.required'=>'Ban chua nhap ten',
            'username.min'=>'Ten phai hon 3 ky tu',
            'fullname.required'=>'Ban chua  ten day du',
            'fullname.min'=>'Ten day du lon hon 3 ky tu',
            'fullname.max'=>'Ten day be hon 30 ky tu',
            'phone.required'=>'Ban chua nham so dien thoai',
            
            'email.required'=>'Ban chua nhap email',

            'email.email'=>'Ban chua nhap  dung dinh dang email',
            'email.unique'=>'Email da ton tai',
            'password.required'=>'Ban chua nhap mat khau',
            'password.min'=>'Mat khau phai co it nhat 3 ky tu',
            'password.max'=>'Mat khau toi da 30 ky tu',
            'passwordmatch.required'=>'Ban chua nhap lai mat khau',
            'passwordmatch.same'=>'Mat khau khong match'
        ]);
        $user =new User;
        $user->username =$request->username;
        $user->fullname =$request->fullname;
        $user->email =$request->email;
        $user->phone=$request->phone;
        $user->create_date= Carbon::now();
        $user->login_cart="";
        $user->token_cart="";
        $user->password = Hash::make($request->password);
        $user->type_user_id=0;
        $user->save();
        return redirect('user/them')->with('thongbao','them thanh cong');
        
    }

    //get login
    public function getLogin(){
        return view('login');
    }

    //post login
    public function postLogin(Request $request){
        $this->validate($request,[
            'email'=>'required|',
            'password'=>'required|min:3|max:30'

        ],
        [
            'email.required'=>'Ban chua nhap email',
            'password.required'=>'Ban chua nhap password',
            'password.min'=>'Password phai co hon 3 ky tu',
            'password.man'=>'Password toi da 30 ky tu'
        ]);

        //Auth
        $passwordd=Hash::make($request->password);
        if(Auth::attempt(['email'=>$request->email,'password'=> $passwordd])){
            return redirect ('loginthanhcong');
        }
        else
        {
            return redirect ('user/login')->with('thongbao','dang nhap khong thanh cong');
        }
    }

    //logout
    public function Logout(){
         Auth::logout();
         return ridirect('user/login');
    }
}
