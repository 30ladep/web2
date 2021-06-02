@extends('layout.master_layout')
@section('content')

<!-- Page Title -->
<section class="page-title text-center">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1 class="uppercase">Thanh toán</h1>
          </div>
        </div>
      </div>
    </section> <!-- end page title -->

    <!-- Checkout -->
    <section class="section-wrap checkout pt-0 pb-50">
      <div class="container relative">
        <div class="row">

          <div class="ecommerce col-xs-12">

            {{-- <div class="row mb-30">
              <div class="col-md-8">
                <p class="ecommerce-info">
                  Returning Customer? 
                <a href="{{ route('login')}}" class="showlogin">Click here to login</a>
                </p>
              </div>
            </div> --}}
            <span class="text-danger">Vui lòng gửi hình ảnh chứng minh bạn đã thanh toán. Admin sẽ xác nhận và gửi hàng trong thời gian sớm nhất</span>
            <br><br>
            <form action="{{ url('/GuiAnhThanhToan') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <img class="img-show" src="" width="100px" alt="" srcset="">
              <input type="file" name="image" onchange="loadFile(event)" id="hinhanh" accept="image/*" required><br>
              <input type="submit" value="Gửi" class="btn btn-primary">
            </form>
          </div>
        </div>
      </div>
    </section>


<script>
var loadFile = function(event) {
    var image = document.getElementsByClassName('img-show');
    image[0].src = URL.createObjectURL(event.target.files[0]);
	
};
</script>
@endsection
