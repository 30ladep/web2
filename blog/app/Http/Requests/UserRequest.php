<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
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

            'username' => ['required', 'string', 'max:255','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone'=>['required','string','min:8','max:11'],
            'comfirmpassword'=>['required','same:password'], 
            'role_id'=>[
                'required',
                Rule::in(['1', '2','3']),
            ],
        ];

        
    }
 
    public function messages(){
        return [
            'username.required'=>'Nhap username',
            'username.unique'=>'Username đã tồn tại',
            'email.email'=>'Vui lòng điền đúng định dạng email',
            'email.unique'=>'email đã tồn tại',
            'password.min'=>'Password phải lớn hơn 8 kí tự',
            'phone.min'=>'Phone phải lớn hơn 8 kí tự',
            'phone.max'=>'Phone phải bé hơn 11 kí tự',
            'password.required'=>'Nhap password',
            'comfirmpassword.required'=>'Nhap xac nhan password',
            'comfirmpassword.same'=>'Xác nhận lại mật khẩu không đúng',
            'role_id.required'=>'Chưa cấp quyền cho user'
        ];
    }
}
