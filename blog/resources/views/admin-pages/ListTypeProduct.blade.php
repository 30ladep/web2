@extends('admin-layout.admin-layout')
@section('content')
@php
    $stt = 1;
@endphp
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
<!-- DataTales Example -->
<div class="card shadow mb-5">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách loại sản phẩm</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead class="table-secondary">
                    <tr>
                        <th>STT</th>       
                        <th>ID</th>    
                        <th>Tên loại sản phẩm</th>                    
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($typeProducts as $item)
                    <tr>
                    <td>{{$stt++}}</td>
                    <td>{{$item->id}}</td>
                    <td>{{$item->type_name}}</td>
                    <td>
                   
                    <form action="{{ route('typeproducts.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" title="Delete">Delete</button>
                    </form>
                    <form action="{{ route('typeproducts.edit', $item->id) }}" method="GET">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            @method('PATCH')
                            <button class="fas fa-edit" title="Edit">Edit</button>
                    </form>

                         
                        </td>
                    </tr>
                    @endforeach                   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection