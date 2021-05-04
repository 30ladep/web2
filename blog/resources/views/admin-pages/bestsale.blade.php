@extends('admin-layout.admin-layout')
@section('content')

@php
    $stt = 1;
@endphp
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm theo lượt bán và lượt xem</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead class="table-secondary">
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Size</th>
                        <th>Lượt bán</th>
                        <th>Lượt xem</th>
                        <th>Giá</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <td>{{$stt++}}</td>
                            <td>{{$item->product_name}}</td>
                            <td><img style="width: 50px" src="{{url('/img/image_product/'.$item->image)}}" alt=""></td>
                            <td>{{$item->size}}</td>
                            <td>{{$item->sold}}</td>
                            <td>{{$item->view}}</td>
                            <td>${{$item->price}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection