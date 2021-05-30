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
        <h6 class="m-0 font-weight-bold text-primary">Danh sách Banner</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead class="table-secondary">
                    <tr>
                        <th>STT</th>
                        <th>Content</th>
                        <th>Hình ảnh</th>                    
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($banners as $item)
               
                        <tr @php if($item->count < 10){echo "style='color:red'";} @endphp>
                        <td>{{$stt++}}</td>
                        <td>{{$item->content}}</td>
                        <td><img style="width: 50px" src="{{url('/img/banner/'.$item->image_slide)}}" alt=""></td>              
                        <td>
                           
                            <form action="{{ route('banners.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" title="Delete">Delete</button>
                            </form>
                            <form action="{{ route('banners.edit', $item->id) }}" method="GET">
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