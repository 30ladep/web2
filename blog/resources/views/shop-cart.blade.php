@extends('layout.master_layout')
@section('content')

<!-- Page Title -->
<section class="page-title text-center">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1 class="uppercase">Shopping Cart</h1>
          </div>
        </div>
      </div>
    </section> <!-- end page title -->

    <!-- Cart -->
    <section class="section-wrap shopping-cart pt-0">
      <div class="container relative">
        <div class="row">

          <div class="col-md-12">
            <div class="table-wrap mb-30">
              <table class="shop_table cart table">
                <thead>
                  <tr>
                    <th class="product-name" colspan="2">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-subtotal">Total</th>
                  </tr>
                </thead>
                <tbody>
                {{-- {{dd($cart)}} --}}
                @foreach ($cart as $item)
                  <tr class="cart_item">
                      <td class="product-thumbnail">
                        <a href="#">
                          <img src="{{url('/img/image_product/'.$item->image)}}" alt="">
                        </a>
                      </td>
                      <td class="product-name">
                        <a href="#">{!!$item->name!!}</a>
                        <ul>
                          <li>{!!$item->size!!}</li>
                          <li>Color: {!!$item->color!!}</li>
                        </ul>
                      </td>
                      <td class="product-price">
                        <span class="amount">{!!$item->price!!}</span>
                      </td>
                      <td class="product-quantity">
                        <div class="quantity buttons_added">
                          <input type="button" value="-" class="minus" /><input type="number" step="1" min="0" value="{!!$item->qty!!}" title="Qty" class="input-text qty text" /><input type="button" value="+" class="plus">
                        </div>
                      </td>
                      <td class="product-subtotal">
                        <span class="amount">{!!number_format($item->price*$item->qty,0,",",".").'vnd' !!}</span>
                      </td>
                      <td class="product-remove">
                        <a href="#" class="remove" title="Remove this item">
                          <i class="icon icon_close"></i>
                        </a>
                      </td>
                    </tr>
                    
                @endforeach                            
                </tbody>
              </table>
            </div>

            <div class="row mb-50">
              <div class="col-md-5 col-sm-12">
                <div class="coupon">
                  <input type="text" name="coupon_code" id="coupon_code" class="input-text form-control" value placeholder="Coupon code">
                  <input type="submit" name="apply_coupon" class="btn btn-md btn-dark" value="Apply">
                </div>
              </div>

              <div class="col-md-7">
                <div class="actions right">
                  <input type="submit" name="update_cart" value="Update Cart" class="btn btn-md btn-dark">
                  <div class="wc-proceed-to-checkout">
                  <a href="{{url('shop-checkout')}}" class="btn btn-md btn-color"><span>proceed to checkout</span></a>
                  </div>
                </div>
              </div>
            </div>

          </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
         
          <div class="col-md-4 col-md-offset-2">
            <div class="cart_totals">
              <h2 class="heading relative heading-small uppercase mb-30">Cart Totals</h2>

              <table class="table shop_table">
                <tbody>
                  <tr class="cart-subtotal">
                    <th>Cart Subtotal</th>
                    <td>
                      <span class="amount">{!!$cart_priceTotal!!}</span>
                    </td>
                  </tr>
                  <tr class="shipping">
                    <th>Shipping</th>
                    <td>
                      <span>Free Shipping</span>
                    </td>
                  </tr>
                  <tr class="order-total">
                    <th><strong>Order Total</strong></th>
                    <td>
                      <strong><span class="amount">{!!$cart_priceTotal!!}</span></strong>
                    </td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div> <!-- end col cart totals -->

        </div> <!-- end row -->     

        
      </div> <!-- end container -->
    </section> <!-- end cart --> 

@endsection