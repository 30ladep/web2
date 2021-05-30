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
        <h3>Thêm mới loại sản phẩm</h3>
        <form class="row" action="{{ route('typeproducts.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-5">
                <div class="form-group">
                <label>TypeProduct name:</label>
                <input type="text" name="typeProductName" class="form-control" required>
            </div>           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
   

<div style="margin-bottom: 100px"></div>


@endsection