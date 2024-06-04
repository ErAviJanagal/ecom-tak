@extends('layouts.app')

@section('content')
<main>
      <div class="banner-slider-section">
        <div class="main-slider owl-carousel owl-theme" id="bannerslider">
          <div class="banner-slider-item">
            <img class="desktophide" src="{{asset('images/bannerslider1.jpg')}}">
            <img class="mobilehide" src="{{asset('images/bannerslidermob.jpg')}}">
          </div>
          <div class="banner-slider-item">
            <img class="desktophide" src="{{asset('images/bannerslider2.jpg')}}">
            <img class="mobilehide" src="{{asset('images/bannerslider2mob.jpg')}}">
          </div>
          <div class="banner-slider-item">
            <img class="desktophide" src="{{asset('images/bannerslider3.jpg')}}">
            <img class="mobilehide" src="{{asset('images/bannerslider3mob.jpg')}}">
          </div>
        </div>
      </div>
      <div class="catgorywrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
              <a href="#">
                <div class="catgorybox">
                  <h2>Bluetooth Calling Smartwatch starts at ₹1,999</h2>
                  <div class="catgoryimg">
                    <img src="{{asset('images/cat1.jpg')}}">
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <div class="catgorybox">
                  <h2>Up to 70% off | Clearance store</h2>
                  <div class="catgoryimg">
                    <img src="{{asset('images/cat2.jpg')}}">
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <div class="catgorybox">
                  <h2>Automotive essentials | Up to 60% off</h2>
                  <div class="catgoryimg">
                    <img src="{{asset('images/cat3.jpg')}}">
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <div class="catgorybox">
                  <h2>Up to 60% off | Professional tools, testing & more</h2>
                  <div class="catgoryimg">
                    <img src="{{asset('images/cat4.jpg')}}">
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <div class="catgorybox">
                  <h2>Bluetooth Calling Smartwatch starts at ₹1,999</h2>
                  <div class="catgoryimg">
                    <img src="{{asset('images/cat1.jpg')}}">
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <div class="catgorybox">
                  <h2>Up to 70% off | Clearance store</h2>
                  <div class="catgoryimg">
                    <img src="{{asset('images/cat2.jpg')}}">
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <div class="catgorybox">
                  <h2>Automotive essentials | Up to 60% off</h2>
                  <div class="catgoryimg">
                    <img src="{{asset('images/cat3.jpg')}}">
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-3">
              <a href="#">
                <div class="catgorybox">
                  <h2>Up to 60% off | Professional tools, testing & more</h2>
                  <div class="catgoryimg">
                    <img src="{{asset('images/cat4.jpg')}}">
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="today-deal">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="heading-custom-shopping">
                <h3 class="heading-custom-top-shopping">Today’s Deals</h3>
                <h4 class="heading-custom-bottom-shopping custome-pos-shopping">Today’s Deals</h4>
              </div>
            </div>
            <div class="slider-deail">
              <div class="main-slider owl-carousel owl-theme" id="deailslider">
                <div class="slideritem">
                  <a href="">
                  <div class="slideritemimg">
                    <img src="{{asset('images/td1.jpg')}}">
                  </div>
                  <div class="item-des">
                    <h5>
                      <span>Deal of the Day</span>
                      <b>40 % Off</b>
                    </h5>
                  </div>
                  <h6>Exciting Deals on Smart Watch</h6>
                  </a>
                </div>
                <div class="slideritem">
                  <a href="">
                  <div class="slideritemimg">
                    <img src="{{asset('images/td2.jpg')}}">
                  </div>
                  <div class="item-des">
                    <h5>
                      <span>Deal of the Day</span>
                      <b>40 % Off</b>
                    </h5>
                  </div>
                  <h6>Exciting Deals on Smart Watch</h6>
                  </a>
                </div>
                <div class="slideritem">
                  <a href="">
                  <div class="slideritemimg">
                    <img src="{{asset('images/td3.jpg')}}">
                  </div>
                  <div class="item-des">
                    <h5>
                      <span>Deal of the Day</span>
                      <b>40 % Off</b>
                    </h5>
                  </div>
                  <h6>Exciting Deals on Smart Watch</h6>
                  </a>
                </div>
                <div class="slideritem">
                  <a href="">
                  <div class="slideritemimg">
                    <img src="{{asset('images/td4.jpg')}}">
                  </div>
                  <div class="item-des">
                    <h5>
                      <span>Deal of the Day</span>
                      <b>40 % Off</b>
                    </h5>
                  </div>
                  <h6>Exciting Deals on Smart Watch</h6>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <a class="viewallbtn" href="#">View All</a> 
        </div>
      </div>
    
    </main>
@endsection
