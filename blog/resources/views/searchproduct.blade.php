@extends('layout.master_layout')
@section('content')

<!-- Hero Slider -->
@if(isset($user))
  {{$user->name}}
@endif
<section class="section-wrap nopadding">
  <div class="container">
    <div class="entry-slider">
      <div class="flexslider" id="flexslider-hero">
        <ul class="slides clearfix">
          @foreach ($banners as $item)
          <li>              
               <img src="{{'img/banner/'.$item->image_slide}}" alt="">                
              <div class="hero-holder text-center right-align">
                <div class="hero-lines">                  
                  <h4 class="hero-subheading white uppercase">{{$item->content}}</h4>
                </div>
              
              </div>
            </li>
          @endforeach              
        </ul>
      </div>
    </div> <!-- end slider -->
  </div>
    </section> <!-- end hero slider -->

    <!-- Product result -->
    <section class="section-wrap new-arrivals pb-40">
      <div class="container">

        <div class="row heading-row">
          <div class="col-md-12 text-center">
          <h2 class="heading uppercase"><small>Product result: {!! $tukhoa!!}</small></h2>
          </div>
        </div>

        <div class="row row-10">              
        @if($products_search==" ")
            <div class="row heading-row">
            <div class="col-md-12 text-center">
            <h2 class="heading uppercase"><small> Khong co san pham:  {!! $tukhoa!!}</small></h2>
            </div>
            </div>
        @else
                @foreach($products_search as $item)
                
                <div class="col-md-3 col-xs-6">
                    <div class="product-item">
                    <div class="product-img">
                        <a href="#">           
                            <img src="{{url('/img/image_product/'.$item->image)}}" alt="">
                        <img src="{{url('/img/image_product/'.$item->image)}}" alt="" class="back-img"> 
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
                        <a href="{{url('shop-single-product?id='.$item->id)}}" class="product-quickview">Quick View</a>
                    </div>
                    <div class="product-details">
                        <h3>            
                    <a class="product-title" href="{{url('shop-single-product?id='.$item->id)}}">{{$item->product_name}}</a>   
                        </h3>
                        <span class="price">
                            <span>$ {{$item->price}}</span>
                        </span>
                    </div>
                    </div>
                </div> 
                @endforeach  
        @endif       
        </div> <!-- end row -->
          <!-- paginate -->
        
        <div class="row">
          <div class="col-md-12 text-center">
            {{$products_search->withQueryString()->links()}}
          </div>
        </div>
      </div>
     
  
    </section> <!-- end new arrivals -->

    <!-- Best Sellers -->
    <section class="section-wrap pb-0">
            <div class="container">
      
              <div class="row heading-row">
                <div class="col-md-12 text-center">
                  <h2 class="heading uppercase"><small>Best Sellers</small></h2>
                </div>
              </div>
      
              <div class="row row-10">              
                @foreach ($productsbestseller as $item)
                  <div class="col-md-3 col-xs-6 animated-from-left">
                      <div class="product-item">
                        <div class="product-img">
                          <a href="#">
                              <img src="{{url('/img/image_product/'.$item->image)}}" alt="">
                              <img src="{{url('/img/image_product/'.$item->image)}}" alt="" class="back-img"> 
                          </a>
                          <div class="product-actions">
                            <a href="#" class="product-add-to-compare" data-toggle="tooltip" data-placement="bottom" title="Add to compare">
                              <i class="fa fa-exchange"></i>
                            </a>
                            <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                              <i class="fa fa-heart"></i>
                            </a>                    
                          </div>
                          <a href="{{url('shop-single-product?id='.$item->id)}}" class="product-quickview">Quick View</a>
                        </div>
          
                        <div class="product-details">
                          <h3>
                              <a class="product-title" href="{{url('shop-single-product?id='.$item->id)}}">{{$item->product_name}}</a>                     
                          </h3>
                          <span class="price">
                              <ins>
                              <span>$ {{$item->price}}</span>
                            </ins>
                          </span>              
                          </span>
                        </div>                          
                      </div>
                    </div>
                @endforeach
               
              </div> <!-- end row -->   
            </div>
          </section> <!-- end best sellers -->        


@endsection