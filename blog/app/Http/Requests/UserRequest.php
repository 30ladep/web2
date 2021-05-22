<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'=>'required|unique:users',
            'email'=>'required',
            'phone'=>'required',
            'password'=>'required',
            'comfirmpassword'=>'required|same:password',      

        ];

        
    }
    public function message(){
        return [
            'username.required'=>'Nhap username',
            'username.unique'=>'User name da ton tai',
            'phone.required'=>'Nhap phone',
            'password.required'=>'Nhap password',
            'comfirmpassword.required'=>'Nhap xac nhan password',
            'comfirmpassword.same'=>'Not match',
        ];
    }
}
