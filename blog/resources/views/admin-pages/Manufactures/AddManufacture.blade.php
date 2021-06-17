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
        <h3>Thêm  nhà sản xuất</h3>
        <form class="row" action="{{ route('manufacuters.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-5">
                <div class="form-group">
                <label>Manufacture name:</label>
                <input type="text" name="manu_name" class="form-control" required>
                @error('manu_name')
                <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
            </div>           
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
   

<div style="margin-bottom: 100px"></div>


@endsection