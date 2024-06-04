@extends('layouts.app')
@section('content')
<main>
      <div class="allcategorys-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <ul class="top-title-all-pages d-flex">
                <li> Home </li>
                <li>
                  <img src="{{asset('images/arrowm.png')}}">
                </li>
                <li>
                  <a href="">{{ $product->category ? $product->category->category_name : '' }}</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
            @include('layouts.categories_sidebar')
            <div class="col-md-9 slider-productsingle">
              <div class="row">
                <div class="col-md-6">

                  <div id="sync1" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="productsliderimgactive">
                            <img src="{{ asset($product->product_image) }}" alt="">
                        </div>
                    </div>
                    
                </div>
                
                </div>
                <div class="col-md-6">
                  <div class="prodict-detail">
                    <h2>{{$product->product_name}} {{$product->id}}</h2>
                    <h6>
                      <span class="pricenow">Rs {{$product->sale_price}}</span>
                      <span class="priceold">Rs {{$product->regular_price}}</span>
                    </h6>
                    <div class="startreview d-flex">
                     <ul class="star">
                       <li>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                       </li>
                       <li>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                       </li>
                       <li>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                       </li>
                       <li>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                       </li>
                       <li>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                       </li>
                     </ul>
                     <p class="instoks text-success">In Stock</p>
                    </div>
                    <div class="selectcolorproduct">
                      <h5 class="product-titleh5 mt-0">Categories: <span>{{$product->category->category_name}}</span>  / <span>{{$product->product_name}}</span></h5>
                      
                     
                    </div>
                 
                    <div class="qtybox">
                      <h5 class="product-titleh5">QTY:</h5>
                      <div class="number-spinner">
                        <span class="ns-btn">
                          <a data-dir="dwn">
                            <img class="minicon" src="{{asset('images/minicon.png')}}">
                          </a>
                        </span>
                        <input type="text" class="pl-ns-value" id="itemQty" value="1"   disabled>
                        <span class="ns-btn">
                          <a data-dir="up">
                            <img class="plusicon" src="{{asset('images/plusicon.png')}}">
                          </a>
                        </span>
                      </div>
                    </div>
                    <div class="productbtnbox">
                      <input class="btn-color btn-border btn-style btn-bk-color" type="submit" @guest onclick="location.href='{{route('user/login')}}'" @endguest  @auth id="addToCart" @endauth data-id="{{encrypt_value($product->id)}}" value="Add to cart">
                    </div>
                    
                  
                  </div>
                </div>
                <div class="col-md-12 product-desc-wrapper mt-4">
                  <h3 class="title-custom">Description {{$product->id}}</h3>
                  <div class="descriptionbox">
                    <p>{{$product->description}}</p>
                  </div>
                </div>
              </div>
            
             
             
         
            </div>
          </div>
          <div class="similer-product">
            <div class="bestsaller">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="heading-custom-shopping text-center">
                      <h3 class="heading-custom-top-shopping">YOU MAY ALSO LIKE</h3>
                      <h4 class="heading-custom-bottom-shopping custome-pos-shopping">YOU MAY ALSO LIKE</h4>
                    </div>
                  </div>
                  <div class="slider-deail">
                    <div class="main-slider owl-carousel owl-theme" id="bestsaller">
                    @foreach($similar_products as $similar_product)
                      <div class="bestsallerslideritem">
                        <a href="{{ route('products', ['category' => $product->category->category_slug, 'product' => $similar_product->product_slug]) }}">
                        <div class="slideritemimg">
                          <img src="{{asset($similar_product->product_image)}}">
                        </div>
                        <h4>{{$similar_product->product_name}}</h4>
                        <ul class="star">
                          <li>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                          </li>
                          <li>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                          </li>
                          <li>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                          </li>
                          <li>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                          </li>
                          <li>
                           <i class="fa fa-star-o" aria-hidden="true"></i>
                          </li>
                        </ul>
                        <h6>
                          <span class="pricediscount">Rs {{$similar_product->sale_price}}</span>
                          <span class="pricemain">Rs {{$similar_product->regular_price}}</span>
                        </h6>
                        
                      </a>
                      </div>
                     @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection
@push('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).on('click', '#addToCart', function() {
        let qty = $('#itemQty').val();
        let productId = $(this).data('id');

        $.ajax({
            url: "{{ route('add-to-cart') }}",
            type: 'POST',
            data: {
                qty: qty,
                productId: productId,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
              $('.cart_counter').html(response.cart_count);

                swal("Good job!", response.message, "success");
            },
            error: function(jqXHR, textStatus, errorThrown) {
                let errorResponse = jqXHR.responseJSON ? jqXHR.responseJSON.message : 'Something went wrong';
                swal("Oops!", errorResponse, "error");
            }
        });
    });

</script>

  
@endpush