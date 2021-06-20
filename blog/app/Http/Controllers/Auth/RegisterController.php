<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
       
         return Validator::make($data, [
            'username' => ['required', 'string', 'max:255','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'max:255','confirmed'],       
            'password_confirmation' => ['same:password'],
            'phone'=>['required','digits:10'],
        ],
        [
            'username.unique'=>'Username đã tồn tại',          
            'username.max'=>'Quá số chữ qui định ',
            'email.required'=>'Vui lòng điền email',           
            'email.unique'=>'Email đã có người đăng kí',
            'email.email'=>'Email phải đúng định dạng',
            'password.min'=>'Password phải lớn hơn 8 kí tự',
            'password.max'=>'Password không vượt quá 255 kí tự',    
            'password.confirmed'=>'Password không khớp',    
            'password_confirmation.same'=>'Password không khớp',                              
            'phone.digits'=>'Số điện thoại chỉ chứa  kí tự số',
            'phone.10'=>'Số điện thoại chỉ đúng 10 kí tự số',
        ]);
        
    }

    
    /**
     * Create a new user instance after a valid registration.
     *@
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'type_user_id' => 1,
            'role_id' =>1,
        ]);
    }

        
    
}
