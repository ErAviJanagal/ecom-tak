<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <ul class="top-title-all-pages d-flex">
          <li>
           Home
          </li>
          <li>
            <img src="images/arrowm.png">
          </li>
          <li>
            <a href="">My Cart</a>
          </li>
        </ul>
      </div>
    </div>
    @if(!$user_cart)
    <div class="row">
      <div class="col-md-12 text-center emptycart-col">
        <img src="images/shopping-cart.png" alt="">
        <h4>Your cart is currently empty.</h4>
        <p>Before proceed to checkout you must add some products to your shopping cart.
          You will find a lot of interesting products on our "Shop" page.</p>
          <div class="btnsubmit mt-2">
            <a class="btn-color btn-border btn-style" href="">Return to Shop</a>
          </div>
      </div>
    </div>
    @endif
    <div class="productincat">
      <div class="row top-throw">
        <div class="col-md-5">
          <b>Product</b>
        </div>
        <div class="col-md-2">
          <b>Price</b>
        </div>
        <div class="col-md-2 text-center">
          <b>Quantity</b>
        </div>
        <div class="col-md-3 text-end">
          <b>Total</b>
        </div>
      </div>
      @foreach ($user_cart->cart_items as $item)
        <div class="row productrow align-items-center d-flex">
            <div class="col-md-5">
            <div class="d-flex align-items-center">
                <span class="deleteprocart" onclick="removeItem('{{encrypt_value($item->id)}}')"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                <div class="cartproduct-img">
                <img src="{{asset($item->product->product_image)}}" alt="">
                </div>
                <div class="cartproduct-des">
                <h5>{{$item->product->product_name}}</h5>
                <p>Color:<span class="procol">White</span></p>
                </div>
            </div>
            </div>
            <div class="col-md-2">
            <p class="cartproductprice"><span>Rs </span>{{$item->product->sale_price}}</p>
            </div>
            <div class="col-md-2 qycol">
            <div class="number-spinner cart-qty">
                <span class="ns-btn">
                <a data-dir="dwn" >
                    <img class="minicon" src="images/minicon.png" onclick="decreseQty('{{encrypt_value($item->id)}}')">
                </a>
                </span>
                <input type="text" class="pl-ns-value" value="{{$item->qty}}" maxlength="2" disabled="">
                <span class="ns-btn">
                <a data-dir="up">
                    <img class="plusicon" src="images/plusicon.png" onclick="increaseQty('{{encrypt_value($item->id)}}')">
                </a>
                </span>
            </div>
            </div>
            <div class="col-md-3 text-end">
            <p class="finalprice">Rs {{$item->price}}</p>
            </div>
        </div>
      @endforeach
      <div class="row couponcode">
        <div class="col-md-7">
          <div class="input-group input-group-custom">
            <input type="text" class="form-control subscribeinput giftinput" placeholder="Gift card or discount code">
            <div class="input-group-append">
              <input class="btn btn-outline-secondary applybtn" type="submit" id="" value="Apply">
            </div>
          </div>
        </div>
       
      </div>
    </div>
    <div class="row total-payment-detail">
      <div class="col-md-6 col-6">
        <p class="ts">Subtotal</p>
      </div>
      <div class="col-md-6 col-6 text-end">
        <h6 class="tsl">Rs {{$user_cart->total}}</h6>
        
      </div>
      
      <div class="col-md-6 col-6">
        <h5 class="tst">Total</h5>
      </div>
      <div class="col-md-6 text-end col-6">
        <h5 class="tst">Rs {{$user_cart->total}}</h5>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="customformgroup text-end mt-3">
          <a class="btn-color btn-border btn-style btn-bk-color" href="">Continue to shipping</a>
        </div>
        </div>
    </div>
  </div>