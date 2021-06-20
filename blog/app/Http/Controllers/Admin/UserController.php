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
        $user = User::findOrFail($id);
        if($request->input('password')){
            $this->validate($request,[
                'comfirmpassword'=>'same:comfirmpassword'
            ],[
                'comfirmpassword.same'=>'Xác nhận lại mật khẩu không đúng'
            ]);

            $pass = $request->input('password');
            $user->password =Hash::make($pass);
        }
        $user->type_user_id = 3;
        $user->role_id=$request->role_id;

       
        $user->save();
        return redirect()->route('users.index')->with(['flash_level'=>'Cập nhật thành công']);

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
        if( $user->Role->id === 3){
          
            // session()->flash('danger','Không có quyền xóa');
      
           return redirect()->route('users.index');
        }
        else{
                    
            $user->delete();
            return redirect()->route('users.index');
        }
    
    
    }
}
