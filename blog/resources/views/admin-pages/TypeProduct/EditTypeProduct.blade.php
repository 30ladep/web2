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
        <h3>Chỉnh sửa loại sản phẩm</h3>
        <form class="row" action="{{ route('typeproducts.update',$typeProduct->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <input type="number" name="id" value="{{$typeProduct->id}}" hidden>
            <div class="col-5">
                <div class="form-group">
                <label>Tên loại sản phẩm:</label>
                <input type="text" name="type_name" class="form-control" value="{{$typeProduct->type_name}}" required>
                @error('type_name')
                <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
            </div>       
        
            <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
            </div>
        </form>
    </div>

<div style="margin-bottom: 100px"></div>


@endsection