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
        <h3>Chỉnh sửa nhà sản xuất</h3>
        <form class="row" action="{{ route('manufacuters.update',$manu->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <input type="number" name="id" value="{{$manu->id}}" hidden>
            <div class="col-5">
                <div class="form-group">
                <label>Manufacuture name:</label>
                <input type="text" name="manu_name" class="form-control" value="{{$manu->manu_name}}" required>
                @error('manu_name')
                <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
            </div>       
        
            <button type="submit" class="btn btn-primary">Chỉnh Sửa</button>
            </div>
        </form>
    </div>

<div style="margin-bottom: 100px"></div>


@endsection