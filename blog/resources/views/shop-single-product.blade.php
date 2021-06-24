@extends('layout.master_layout')
@section('content')


<!-- Breadcrumbs -->
<div class="container">
      <ol class="breadcrumb">
        <li>
          <a href="index.html">Home</a>
        </li>
        <li>
          <a href="index.html">Shop</a>
        </li>
        <li class="active">
          Catalog Grid
        </li>
      </ol> <!-- end breadcrumbs -->
    </div>


    <!-- Single Product -->
    <section class="section-wrap single-product">
      <div class="container relative">
        <div class="row">
          <div class="col-sm-6 col-xs-12 mb-60">
            <div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">
              @foreach ($products->ImageProduct  as $item => $value)
              <div class="gallery-cell">
                <a href="{{url('img/image_product/'.$value->image_product)}}" class="lightbox-img">
                  <img src="{{url('img/image_product/'.$value->image_product)}}" alt="" />
                  <i class="icon arrow_expand"></i>
                </a>
              </div>
              @endforeach
       
             
             
            </div> <!-- end gallery main -->

            <div class="gallery-thumbs">
          
              @foreach ($products->ImageProduct  as $item => $value)
                  <div class="gallery-cell">
                    <img src="{{url('img/image_product/'.$value->image_product)}}" alt="" />
                  </div>
              @endforeach
            
              

            </div> <!-- end gallery thumbs -->

          </div> <!-- end col img slider -->

          <div class="col-sm-6 col-xs-12 product-description-wrap">
          <h1 class="product-title">{!!$products->product_name !!}</h1>
            <span class="rating">
              <a href="#">3 Reviews</a>
            </span>
            <span class="price">
              <del>
                <span>{!!number_format(($products->price)*2).' vnd'!!}</span>
              </del>
              <ins>
                <span class="ammount">>{!!number_format($products->price).' vnd'!!}</span>
              </ins>
            </span>
            <p class="product-description">{!!$products->note!!}</p>

            <div class="select-options">
              <div class="row row-20">
                <div class="col-sm-6">
                  Size: {!!$products->size!!}
                </div>
              </div>
            </div>

            <ul class="product-actions clearfix">
              
              <li>
              <a href="{!!url('add-cart',[$products->id,$products->alias])!!}" class="btn btn-color btn-lg add-to-cart left"><span>Add to Cart</span></a>
              </li>                
              {{-- <li>
                <div class="icon-add-to-wishlist left">
                  <a href="#"><i class="icon icon_heart_alt"></i></a>
                </div>
              </li>           --}}
            </ul>

            <div class="product_meta">
              <span class="sku">SKU: <a href="#">{!!$products->product_name !!}</a></span>
              <span class="posted_in">Category: <a href="#">{!!$products->Manufacture->manu_name!!}</a></span>
              <span class="tagged_as">Tags: <a href="#">{!!$products->TypeProduct->type_name!!}</a></span>
            </div>

            <div class="socials-share clearfix">
              <div class="social-icons rounded">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-vimeo"></i></a>
              </div>
            </div>
          </div> <!-- end col product description -->
        </div> <!-- end row -->

        <!-- tabs -->
        <div class="row">
          <div class="col-md-12">
            <div class="tabs tabs-bb">
              <ul class="nav nav-tabs">                                 
                <li class="active">
                  <a href="#tab-description" data-toggle="tab">Description</a>
                </li>                                                                              
                <li>
                  <a href="#tab-reviews" data-toggle="tab">Reviews</a>
                </li>                                 
              </ul> <!-- end tabs -->
              
              <!-- tab content -->
              <div class="tab-content">
                
                <div class="tab-pane fade in active" id="tab-description">
                  <p>
           
                  {!! $products->note !!}
                  </p>
                </div>
                
               
                
                <div class="tab-pane fade" id="tab-reviews">

                  <div class="reviews">
                    @if ($DuocDanhGia == 1 || $DuocDanhGia == 2)
                        <form action="{{url('/AddComment')}}" method="post">
                          {{ csrf_field() }}
                          <input type="number" name="rate" id="rate" hidden>
                          <input type="number" name="ProductID" value="{{$products->id}}" hidden>
                          <a href="javascript:;" style="color: gray"><i class="fas fa-star rr" data-id="1"></i></a>
                          <a href="javascript:;" style="color: gray"><i class="fas fa-star rr" data-id="2"></i></a>
                          <a href="javascript:;" style="color: gray"><i class="fas fa-star rr" data-id="3"></i></a>
                          <a href="javascript:;" style="color: gray"><i class="fas fa-star rr" data-id="4"></i></a>
                          <a href="javascript:;" style="color: gray"><i class="fas fa-star rr" data-id="5"></i></a>
                          <br><br>
                          <textarea name="Comment" id="" cols="10" rows="5" style="resize: none" placeholder="Nhập đánh giá"></textarea>
                          <input type="submit" value="Xác nhận" class="btn btn-primary">
                        </form>
                    @endif
                    <ul class="reviews-list">
                      @foreach ($comment as $item)
                        <li>
                          <div class="review-body">
                            <div class="review-content">
                              <p class="review-author"><strong>{{$users->where('id', $item->user_id)->first() == null ? "*Người dùng không tồn tại" : $users->where('id', $item->user_id)->first()->username}}</strong> - {{$item->createDate}}</p>
                              <div class="">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $item->rate)
                                        <a href="javascript:;" style="color: yellow; font-size: 12px"><i class="fas fa-star"></i></a>
                                    @else
                                        <a href="javascript:;" style="color: gray; font-size: 12px"><i class="fas fa-star"></i></a>
                                    @endif
                                @endfor
                              </div>
                              <p>{{$item->comment}}</p>
                            </div>
                          </div>
                        </li>
                      @endforeach
                    </ul>         
                  </div> <!--  end reviews -->
                </div>
                
              </div> <!-- end tab content -->

            </div>
          </div> <!-- end tabs -->
        </div> <!-- end row -->

        
      </div> <!-- end container -->
    </section> <!-- end single product -->


    <!-- Related Items -->
    <section class="section-wrap related-products pt-0">
      <div class="container">
        <div class="row heading-row">
          <div class="col-md-12 text-center">
            <h2 class="heading uppercase"><small>Related Products</small></h2>
          </div>
        </div>
        
        <div class="row row-10">

          <div id="owl-related-products" class="owl-carousel owl-theme nopadding">

            @foreach ($productRelated as $item)
               <div class="product-item">
              <div class="product-img">
                <a href="{{url('shop-single-product?id='.$item->id)}}">
                  <img src="{{url('img/image_product/'.$item->image)}}" alt="">
                  <img src="{{url('img/image_product/'.$item->image)}}" alt="" class="back-img">
                </a>
                <div class="product-label">
                  <span class="sale">sale</span>
                </div>            
                <a href="{{url('shop-single-product?id='.$item->id)}}" class="product-quickview">Quick View</a>
              </div>
              <div class="product-details">
                <h3>
                  <a class="product-title"href="{{url('shop-single-product?id='.$item->id)}}">{{$item->product_name}}</a>
                </h3>
                <span class="price">
                  <del>
                    <span>{{ number_format( ($item->price)*2).' vnd'}}</span>
                  </del>
                  <ins>
                    <span class="ammount">{{number_format(($item->price)).' vnd'}}</span>
                  </ins>
                </span>
              </div>
            </div>
            @endforeach
            {{-- <div class="product-item">
              <div class="product-img">
                <a href="#">
                  <img src="{{url('img/shop/single_img_5.jpg')}}" alt="">
                  <img src="{{url('img/shop/single_img_5.jpg')}}" alt="" class="back-img">
                </a>
                <div class="product-label">
                  <span class="sale">sale</span>
                </div>
                <div class="product-actions">
                  <a href="#" class="product-add-to-compare" data-toggle="tooltip" data-placement="bottom" title="Add to compare">
                    <i class="fa fa-exchange"></i>
                  </a>
                  <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                    <i class="fa fa-heart"></i>
                  </a>                    
                </div>
                <a href="#" class="product-quickview">Quick View</a>
              </div>
              <div class="product-details">
                <h3>
                  <a class="product-title" href="shop-single-product.html">Night Party Dress</a>
                </h3>
                <span class="price">
                  <del>
                    <span>$388.00</span>
                  </del>
                  <ins>
                    <span class="ammount">$159.99</span>
                  </ins>
                </span>
              </div>
            </div> --}}

           

          </div> <!-- end owl -->

        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end related products -->
<script>
  $('.rr').on('click', function(){
    var NamSao = $('.rr');
    //console.log(NamSao);
    var DanhGia = $(this).attr('data-id');
    for(var i = 0; i < NamSao.length; i++){
      if(i < DanhGia){
        $(NamSao[i]).css('color','yellow');
      }
      else{
        $(NamSao[i]).css('color','gray');
      }
    }
    $('#rate').val(DanhGia);
  });
</script>
@endsection