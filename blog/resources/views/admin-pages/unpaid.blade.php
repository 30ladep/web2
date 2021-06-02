@extends('admin-layout.admin-layout')
@section('content')
@php
    $stt = 1;
@endphp
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Đơn hàng chờ xác nhận</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead class="table-secondary">
                    <tr>
                        <th>Mã bill</th>
                        <th>Ngày tạo bill</th>
                        <th>Hình ảnh</th>
                        <th>Giá</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($unnn as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{(date('d-m-Y', strtotime($item->create_date)))}}</td>
                        <td><a href="{{url('/img/image_bill/'.$item->image_check_out)}}" target="_blank" ><img style="width: 50px" src="{{url('/img/image_bill/'.$item->image_check_out)}}" alt=""></a></td>
                        <td>{{$item->price}}</td>
                        <td><a class="btn btn-success" href="{{url('/bill/XacNhanDonHang/'.$item->id)}}">Xác nhận đơn hàng</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection