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
        <h3>Thêm User</h3>
        @if($errors->any())
        <div class="row collapse">
            <ul class="alert-box warning radius">
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
        @endif
        <form class="row" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-5">
                <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" class="form-control" value="{{old('username')}}"required>
                <label>Password:</label>
                <input type="password" name="password" class="form-control" required>
                <label>Comfirm Password:</label>
                <input type="password" name="comfirmpassword" class="form-control" required>
                <label>Email:</label>
                <input type="text" name="email" class="form-control" required>
                <label>Số điện thoại:</label>
                <input type="text" name="phone" class="form-control" required>
                <h3>Type User:</h3>
                <input type="radio" id="type_user_id" name="type_user_id" value="1">Customer<br>
                <input type="radio" id="type_user_id" name="type_user_id" value="2">Vip   <br>
                <input type="radio" id="type_user_id" name="type_user_id" value="3">Admin<br>
                <h3>Role:</h3>
                <input type="radio" id="role_id" name="role_id" value="1">User<br>
                <input type="radio" id="role_id" name="role_id" value="2">Admin<br>       
            </div>           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
   

    

<div style="margin-bottom: 100px"></div>


@endsection