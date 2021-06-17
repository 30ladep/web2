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
       
        <form class="row" action="{{route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PATCH')
            <div class="col-5">
                <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" class="form-control"  value="{{$user->username}}" disabled required> 
                @error('Username')
                    <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
                <label>Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Nhập password mới" >
                 @error('password')
                    <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
                <label>Comfirm Password:</label>             
                <input type="password" name="comfirmpassword" class="form-control" placeholder="Nhập lại password mới" >
                 @error('comfirmpassword')
                    <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
                <label>Email:</label>
                <input type="text" name="email" class="form-control" value="{{$user->email}}"disabled required>
                 @error('email')
                    <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
                <label>Số điện thoại:</label>
                <input type="text" name="phone" class="form-control" value="{{$user->phone}}" disabled required>
                 @error('phone')
                    <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
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
                @error('type_user_id')
                    <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
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
                @if ($user->role_id === 3)
                <input type="radio" id="role_id" name="role_id" value="2" checked>Super Admin<br>  
                <input type="radio" id="role_id" name="role_id" value="1">User<br>
                <input type="radio" id="role_id" name="role_id" value="3">Admin<br> 
                @endif   
                 @error('role_id')
                    <div class="alert alert-danger">{{ $message  }}</div>
                @enderror  
            </div>           
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
   

    

<div style="margin-bottom: 100px"></div>


@endsection