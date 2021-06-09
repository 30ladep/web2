<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Validator;
use Hash;
use Illuminate\Validation\Rule;
use Gate;
use Illuminate\Support\Facades\Crypt;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
       
        return view('admin-pages.User.ListUser',compact('users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
   
        //$this->authorize('create');
       if(Gate::allows('add-user')){
        return view('admin-pages.User.AddUser');
       }else{
           abort(403);
       }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
   
        $user = new User();
        $user->username = $request->username;
        $user->email=$request->email;
        $user->password =Hash::make($request->password);
        $user->phone=$request->phone;
        $user->type_user_id = 3;
        $user->role_id=$request->role_id;

       $user->save();
      return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
         $user = User::findOrFail($id);
        // dd(Crypt::decryptString($user->password));
        // try{
        //     $decrypted = Crypt::decryptString($user->getOriginal(password));
        //     dd($decrypted);
        // }catch(DecryptException  $e){

        // }
       
        return view('admin-pages.User.EditUser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
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

        $messages = [
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
        $validator = Validator::make($request->all(), $rules, $messages);
        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->email=$request->email;
        $user->password =Hash::make($request->password);
        $user->phone=$request->phone;
        $user->type_user_id = 3;
        $user->role_id=$request->role_id;

        $user->save();
        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
