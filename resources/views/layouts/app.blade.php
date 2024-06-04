<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/png">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
   
    <link href="{{asset('css/media.css')}}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>HOME</title>
  </head>
  <body>
    <header>
      <div class="topheaderbar desktophide">
        <div class="">
          <div class="row m-0">
            <div class="col-md-6">
              <ul class="headertop d-flex align-items-center">
                <li class="mr-1">Connect With Us:</li>
                <li>
                  <a href="">
                    <img src="{{asset('images/head1.png')}}" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="{{asset('images/head2.png')}}" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="{{asset('images/head3.png')}}" alt="">
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="headertop d-flex justify-content-end w-100">
                <li>
                  <a href="mailto:info@ayvea.com">
                    <img src="{{asset('images/head5.png')}}" alt="">info@ayvea.com </a>
                </li>
                <li>
                  <a href="callto:7428350035">
                    <img src="{{asset('images/head6.png')}}" alt="">7428350035 </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="topheaderbar desktophide">
        <div class="headerinnersection">
          <nav class="navbar navbar-expand-lg  customnavbarsetting ">
            <a class="navbar-brand" href="#">
              <img src="{{asset('images/mainlogo.png')}}" class="mainlogosetting">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav customulheadersetting">
                <li class="nav-item customlisetting">
                  <a class="nav-link  customheaderalinksetting {{isActiveRoute(['/'])}}" aria-current="page" href="{{route('/')}}">Home</a>
                </li>
                <li class="nav-item customlisetting">
                  <a class="nav-link  customheaderalinksetting {{isActiveRoute(['products'])}}" href="{{route('products')}}">Shop</a>
                </li>
               
              </ul>
            
              <ul class="header-icons d-flex">
                <li class="" id="toggleSearchbox">
                  <a class="" aria-current="page" href="javascript:void(0)">
                    <img class="headericon1" src="{{asset('images/headericon1.png')}}" class="mainlogosetting">
                    <img class="headericon1active" src="{{asset('images/headericon1active.png')}}" class="mainlogosetting">
                  </a>
                </li>
                            <!-- seacrchbar html  start-->
                <div class="searchbox" style="display:none">
                  <li class="menuright closeiconsearch">
                    <a href="javascript:void(0)">
                      <span class="spone"></span>
                      <span class="sptwo"></span>
                    </a>
                  </li>
                  <div class="container-fluid">
                    <div class="row justify-content-center">
                      <div class="col-sm-6">
                        <input class="form-control form-control-search " id="searchProducts" type="search" placeholder="Search here...">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- seacrchbar html  end-->
                @guest
                <li class="">
                  <a class="" aria-current="page" href="{{route('user/login')}}">
                    <img class="headericon1" src="{{asset('images/headericon2.png')}}" class="mainlogosetting">
                    <img class="headericon1active" src="{{asset('images/headericon2active.png')}}" class="mainlogosetting">
                  </a>
                </li>
                @endguest
                
                <li class="">
                  <span class="count-had cart_counter">@guest 0 @endguest @auth {{ cart_count() }} @endauth</span>
                  <a class="" aria-current="page" href="{{route('cart')}}">
                    <img class="headericon1" src="{{asset('images/headericon4.png')}}" class="mainlogosetting">
                    <img class="headericon1active" src="{{asset('images/headericon4active.png')}}" class="mainlogosetting">
                  </a>
                </li>
                
              </ul>
              @auth
              <div class="btn-group dropdownloginuser ">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="dropdownloginuser-text">{{strtoupper(substr(auth()->user()->first_name, 0, 1))}}</span>
                </button> 
                <ul class="dropdown-menu">
                  <a href="#" class=""> My Profile <img src="{{asset('images/dropdownarrow.png')}}">
                  </a>
                
                  <a class="{{ isActiveRoute(['logout']) }} dropdown-item custom-dropdown" href="{{route('user/logout')}}">
                                
                                    Log out <img src="{{asset('images/dropdownarrow.png')}}">
                                
                            </a>
                 
                  </a>
                </ul>
              </div>
              @endauth
             
            </div>
          </nav>
        </div>
      </div>
      <div class="mobile-header-wrpper mobilehide">
        <div class="menulist-box">
          <ul class="topmenumob">
            <li class="activelimenu">
              <img src="{{asset('images/menucolor.png')}}" class="menucolor"> Menu
            </li>
            <li class="loginmenu">
              <a href="">
                <img src="{{asset('images/headericon2active.png')}}" class="menucolor">Log In </a>
            </li>
          </ul>
          <ul class="menulist">
            <li>
              <a href="">Home</a>
            </li>
            <li>
              <a href="">Shop</a>
            </li>
            <li>
              <a href="">Contact</a>
            </li>
            <li>
              <a href="">My Profile</a>
            </li>
            <li>
              <a href="">My Orders</a>
            </li>
            <li>
              <a href="">Change Password</a>
            </li>
            <li>
              <a href="">Logout</a>
            </li>
          </ul>
          <span class="closebtn">Close</span>
        </div>
      
      <div class="mobile-header">
        <span class="menu">
          <img src="{{asset('images/menu.png')}}" class="menu">
        </span>
        <a class="navbar-brand" href="#">
          <img src="{{asset('images/mainlogo.png')}}" class="mainlogosetting">
        </a>
        <div class="mobileheader-right">
          <div class="searchmobilebtn position-relative">
            <span class="count-had">3</span>
            <img class="headericon1" src="{{asset('images/headericon4.png')}}">
          </div>
        </div>
      </div>
      </div>
      
    </header>
            @yield('content')
            <footer>
      <div class="mainfootersectionbottom">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="newsletter d-flex">
                <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                <div class="input-group input-group-custom-subscribe">
                  <input type="text" class="form-control subscribeinput" placeholder="Enter Your Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <input class="btn btn-outline-secondary subscribebtn" type="submit" id="button-addon2" value="Subscribe">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer-left">
                <h4 class="ourservicessetting">Contact Information</h4>
                <h6>Call us 24/7 Free</h6>
                <h2>1001234678</h2>
                <h5>
                  <a href="">support@gmail.com</a>
                </h5>
                <address>Shop No 44-45, Old Delhi Gurgaon Road, Sector 18, Gurugram, Haryana - 122006, India</address>
              </div>
            </div>
            <div class="col-md-3 custom-col-md-3">
              <div class="footerinnersection ">
                <h4 class="ourservicessetting">Company</h4>
                <ul class="customserviceulsetting">
                  <li class="">
                    <a href="#" class="">About Us</a>
                  </li>
                  <li class="">
                    <a href="#" class="">Shop products</a>
                  </li>
                  <li class="">
                    <a href="#" class="">My Cart</a>
                  </li>
                  <li class="">
                    <a href="#" class="">Checkout</a>
                  </li>
                  <li class="">
                    <a href="#" class="">contact us</a>
                  </li>
                  <li class="">
                    <a href="#" class="">Order Tracking</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 custom-col-md-3">
              <div class="footerinnersection ">
                <h4 class="ourservicessetting">Explore</h4>
                <ul class="customserviceulsetting">
                  <li class="">
                    <a href="#" class="">FAQ</a>
                  </li>
                  <li class="">
                    <a href="#" class="">Terms</a>
                  </li>
                  <li class="">
                    <a href="#" class="">Privacy policy</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footerinnersection ">
                <h4 class="ourservicessetting">Our Location</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.4863269896887!2d77.05876801542719!3d28.4950123970417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1974be359b11%3A0xfc7db07455306142!2sShop%20No%2044%2C%2045%2C%20Old%20Delhi%20Gurgaon%20Rd%2C%20Maruti%20Udyog%2C%20Sec21%2C%20Gurugram%2C%20Haryana%20122001!5e0!3m2!1sen!2sin!4v1679999166697!5m2!1sen!2sin" width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="footer-bottom">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <p class="copyrightp">Copyright @2023 ayvea. All Rights Reserved</p>
            </div>
            <div class="col-md-6 text-end">
              <img src="{{asset('images/bootomfooter.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  <script>
    //search box toggles
    $(document).ready(function() {
      $('#toggleSearchbox').click(function() {
        $('.searchbox').toggle();
        $('#searchProducts').focus();
        $(this).hide();
      });
    });
    //search box toggles focus out
    $('#searchProducts').focusout(function() {
      $('.searchbox').toggle();
      $('#toggleSearchbox').show();
      
    });

  </script>
   <script>
         function fetchProducts(page) {
            var query = $('#searchProducts').val(); // Get the current search query
            $.ajax({
                url: "{{ route('search-products') }}",
                type: 'POST',
                data: {
                    page: page,
                    query: query,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $('main').html(response.html);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + ': ' + errorThrown);
                }
            });
        }
        var query = null;
        $(document).on('input', '#searchProducts', function() {
            // query = $(this).val();
            fetchProducts(1); // Fetch first page when search query changes
        });

        $(document).on('click', '.serach-pagination .pagination a.page-link', function(event) {
            event.preventDefault(); // Prevent default link behavior
            var page = $(this).attr('href').split('page=')[1]; // Extract page number from link
            fetchProducts(page); // Fetch products for the clicked page
        });
    </script>

  @stack('scripts')
</html>