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
        <h3>Thêm Admin</h3>
        <form class="row" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-5">
                <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" class="form-control" value="{{old('username')}}"required>
                @error('username')
                <div class="alert alert-danger">{{ $message  }}</div>
                 @enderror
                <label>Password:</label>
                <input type="password" name="password" class="form-control" required>
                @error('password')
                    <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
                <label>Comfirm Password:</label>
                <input type="password" name="comfirmpassword" class="form-control" required>
                @error('comfirmpassword')
                    <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
                <label>Email:</label>
                <input type="text" name="email" class="form-control"  value="{{old('email')}}" required>
                @error('email')
                    <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
                <label>Số điện thoại:</label>
                <input type="text" name="phone" class="form-control" value="{{old('phone')}}" required>
                @error('phone')
                    <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
                {{-- <h3>Type User:</h3>
                <input type="radio" id="type_user_id" name="type_user_id" value="1">Customer<br>
                <input type="radio" id="type_user_id" name="type_user_id" value="2">Vip<br>
                <input type="radio" id="type_user_id" name="type_user_id" value="3">Admin<br> --}}
                <h3>Role:</h3>
                <input type="radio" id="role_id" name="role_id" value="2">Admin<br>    
                <input type="radio" id="role_id" name="role_id" value="3">Super Admin<br> 
                @error('role_id')
                <div class="alert alert-danger">{{ $message  }}</div>
                 @enderror
            </div>           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
   

    

<div style="margin-bottom: 100px"></div>


@endsection