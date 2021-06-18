@extends('admin-layout.admin-layout')
@section('content')
<div>
    <h4>Doanh Thu</h4>
    <div><h5>Chọn mốc thời gian:</h5></div>
    <div class="row">
        <div class="col-md-6">
            <label for="TuNgay">Từ ngày:</label><input type="date" id="TuNgay" name="TuNgay" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="DenNgay">Đến ngày:</label><input type="date" id="DenNgay" name="DenNgay" class="form-control">
        </div>
    </div>
    <button class="btn btn-primary mt-3" id="KiemTra">Kiểm tra</button>
    <div id="DoanhThu" class="text-danger text-center mt-5" style="font-size: xxx-large;">0 VNĐ</div>
    {{ csrf_field() }}
</div>
<script>
    $('#KiemTra').on('click', function(){
        var tungay = $('#TuNgay').val();
        var denngay = $('#DenNgay').val();
        if(tungay != '' && denngay != ''){
            // $.ajax({
            //     url:"{{ route('KiemTraDoanhThu') }}",
            //     method:"POST",
            //     data:{TuNgay: tungay, DenNgay: denngay, _token: {{ csrf_token() }}},
            //     success:function(rs){
            //         $('#DoanhThu').val(rs+" VNĐ");
            //     }
            // })
            $.ajax({
                type: 'POST',
                cache: false,
                url: "{{ route('KiemTraDoanhThu') }}",
                data: {"_token": '{{ csrf_token() }}',"TuNgay": tungay, "DenNgay": denngay},
                success: function (data) {
                    $('#DoanhThu').text(data + " VNĐ");
                }
            })
        }
    })
</script>
@endsection