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
        <h3>Edit Admin</h3>

        <form class="row" action="{{route('admins.update',$user->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PATCH')
            <div class="col-5">
                <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" class="form-control"  value="{{$user->username}}" required>
                @error('username')
                    <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
                <label>Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Nhập password mới">
                @error('password')
                    <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
                <label>Comfirm Password:</label>             
                <input type="password" name="comfirmpassword" class="form-control" placeholder="Nhập lại password mới">
                @error('comfirmpassword')
                    <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
                <label>Email:</label>
                <input type="text" name="email" class="form-control" value="{{$user->email}}" required>
                @error('email')
                    <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
                <label>Số điện thoại:</label>
                <input type="text" name="phone" class="form-control" value="{{$user->phone}}"  required>
                @error('phone')
                    <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
       
            </div>           
            <button type="submit" class="btn btn-primary btn-lg">Edit</button>
        </form>
        {{-- <form action="{{route('admins.index')}}" method="get"></form>
        <button type="submit" class="btn btn-secondary btn-lg">Back</button> --}}
    </div>
   

    

<div style="margin-bottom: 100px"></div>


@endsection