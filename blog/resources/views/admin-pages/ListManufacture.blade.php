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
        <h6 class="m-0 font-weight-bold text-primary">Danh sách nhà sản xuất</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead class="table-secondary">
                    <tr>
                        <th>STT</th>       
                        <th>ID</th>    
                        <th>Tên nhà sản xuất</th>                    
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($manu as $item)
                    <tr>
                    <td>{{$stt++}}</td>
                    <td>{{$item->id}}</td>
                    <td>{{$item->manu_name}}</td>
                    <td>
                    {{-- <form action="{{route('manufacuters.destroy')}}" method="get">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <a href="" class="text-danger"><i class="fas fa-trash"></i></a>

                    </form> --}}

                    <form action="{{ route('manufacuters.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" title="Delete">Delete</button>
                    </form>
                    <form action="{{ route('manufacuters.edit', $item->id) }}" method="GET">
                            @csrf
                            @method('PUT')
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