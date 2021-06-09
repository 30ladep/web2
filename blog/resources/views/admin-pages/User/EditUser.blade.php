@extends('admin-layout.admin-layout')
@section('content')
<style>
    body{
        position: relative;
    }
    img:hover{
        width: 300px !important;
        position: absolute;
        transition: width 1s;
    }
</style>

    <div class="ml-2">
        <h3>Edit User</h3>
        @if($errors->any())
        <div class="row collapse">
            <ul class="alert-box warning radius">
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
        @endif
        {{-- {{dd($user)}} --}}
        <form class="row" action="{{route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PATCH')
            <div class="col-5">
                <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" class="form-control" value="{{$user->username}}"required>
                <label>Password:</label>
                <input type="password" name="password" class="form-control" value="{{$user->password}}"required>
                <label>Comfirm Password:</label>
                {{-- <input type="password" name="comfirmpassword" class="form-control" value="{{$user->password}}" required> --}}
                  <input type="password" name="comfirmpassword" class="form-control" value="{{$user->password}}" required>
                <label>Email:</label>
                <input type="text" name="email" class="form-control" value="{{$user->email}}"required>
                <label>Số điện thoại:</label>
                <input type="text" name="phone" class="form-control" value="{{$user->phone}}" required>
                <h3>Type User:</h3>
                @if ($user->type_user_id === 1)
                <input type="radio" id="type_user_id" name="type_user_id" value="1" checked>Customer<br>
                <input type="radio" id="type_user_id" name="type_user_id" value="2">Vip   <br>
                <input type="radio" id="type_user_id" name="type_user_id" value="3">Admin<br>
                @endif
                @if ($user->type_user_id === 2)
                <input type="radio" id="type_user_id" name="type_user_id" value="1">Customer<br>
                <input type="radio" id="type_user_id" name="type_user_id" value="2" checked>Vip   <br>
                <input type="radio" id="type_user_id" name="type_user_id" value="3">Admin<br>
                @endif
                @if ($user->type_user_id === 3)
                <input type="radio" id="type_user_id" name="type_user_id" value="3" checked>Admin<br>
                <input type="radio" id="type_user_id" name="type_user_id" value="1">Customer<br>
                <input type="radio" id="type_user_id" name="type_user_id" value="2" >Vip   <br>
                @endif
               
                <h3>Role:</h3>
                @if ($user->role_id === 1)
                <input type="radio" id="role_id" name="role_id" value="1" checked>User<br>
                <input type="radio" id="role_id" name="role_id" value="2">Admin<br>  
                <input type="radio" id="role_id" name="role_id" value="3">Super Admin<br> 
                @endif
                @if ($user->role_id === 2)
                <input type="radio" id="role_id" name="role_id" value="2" checked>Admin<br>  
                <input type="radio" id="role_id" name="role_id" value="1">User<br>
                <input type="radio" id="role_id" name="role_id" value="3">Super Admin<br> 
                @endif   
                            
            </div>           
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
   

    

<div style="margin-bottom: 100px"></div>


@endsection