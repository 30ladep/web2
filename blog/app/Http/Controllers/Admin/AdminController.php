<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Manufacture;
use App\TypeProduct ;
use Auth;
use Hash;
use App\User;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::all();
        // $manu = Manufacture::all();
        // $typeProduct = TypeProduct::all();
        // return view('admin-pages.ListProduct',compact('products','manu','typeProduct'));

      
        $id = Auth::user()->id;
        $user = User::where('id',$id)->first();
        
        return view('admin-pages.Admin.infoAdmin',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //dd($user);
        return view('admin-pages.Admin.editAdmin',compact('user'));
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
        //dd($request);
        $user = User::findOrFail($id);
        if($request->input('password')){
            $this->validate($request,[
                'username'=>[Rule::unique('users')->ignore($user->id)],
                'email' => ['string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
                'password' => [ 'string', 'min:8'],
                'phone'=>['string','min:8','max:11'],
                'comfirmpassword'=>['same:comfirmpassword']
            ]
            ,
            [
                'comfirmpassword.same'=>'Xác nhận lại mật khẩu không đúng',  
                'username.unique'=>'Username đã tồn tại',
                'email.email'=>'Vui lòng điền đúng định dạng email',
                'password.min'=>'Password phải lớn hơn 8 kí tự',
                'phone.min'=>'Phone phải lớn hơn 8 kí tự',
                'phone.max'=>'Phone phải bé hơn 11 kí tự',
                                           
            ]);
            
            $pass = $request->input('password');
            $user->password =Hash::make($pass);
            $user->username= $request->username;
            $user->email=$request->email;
            $user->phone=$request->phone;
            $user->save();
            return view('admin-pages.Admin.infoAdmin',compact('user'));
        }else{
            $user->username = $request->username;
            $user->email=$request->email;
            $user->password =Hash::make($request->password);
            $user->phone=$request->phone;
           $user->save();
           return view('admin-pages.Admin.infoAdmin',compact('user'));
        }
    
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
