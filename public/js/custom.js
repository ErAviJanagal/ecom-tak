$('#bannerslider').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    autoplay:true,
slideSpeed: 5000,
autoplayTimeout:6000,
    navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>' , '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$(document).ready(function() {
    // Get the header element
    var header = $('header');
    
    // Listen for the scroll event
    $(window).scroll(function() {
      // Check if the user has scrolled down the page
      if ($(this).scrollTop() > 10) {
        // If so, add the "scrolled" class to the header element
        header.addClass('scrolled');
      } else {
        // If not, remove the "scrolled" class from the header element
        header.removeClass('scrolled');
      }
    });
  });


  
        $('#deailslider,#bestsaller').owlCarousel({
            loop:true,
            margin:20,
            nav:true,
            autoplay:true,
        slideSpeed: 4000,
        autoplayTimeout:5000,
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>' , '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            responsive:{
                0:{
                    items:2,
                    margin:10
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })


        $(document).ready(function() {
            // Get the header element
            var header = $('header');
            
            // Listen for the scroll event
            $(window).scroll(function() {
              // Check if the user has scrolled down the page
              if ($(this).scrollTop() > 100) {
                // If so, add the "scrolled" class to the header element
                header.addClass('scrolled');
              } else {
                // If not, remove the "scrolled" class from the header element
                header.removeClass('scrolled');
              }
            });
          });

         //side menu
          function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });




         //side menu
		$('.menu').on('click', function(){
		  $('.menulist-box').addClass('is-active');
		});
		$('.closebtn').on('click', function(){
		  $('.menulist-box').removeClass('is-active');
		});




          //pricefilter left side 
          const rangeInput = document.querySelectorAll(".range-input input"),
          priceInput = document.querySelectorAll(".price-input input"),
          range = document.querySelector(".slider .progress");
        let priceGap = 1000;
        
        priceInput.forEach((input) => {
          input.addEventListener("input", (e) => {
            let minPrice = parseInt(priceInput[0].value),
              maxPrice = parseInt(priceInput[1].value);
        
            if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
              if (e.target.className === "input-min") {
                rangeInput[0].value = minPrice;
                range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
              } else {
                rangeInput[1].value = maxPrice;
                range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
              }
            }
          });
        });
        
        rangeInput.forEach((input) => {
          input.addEventListener("input", (e) => {
            let minVal = parseInt(rangeInput[0].value),
              maxVal = parseInt(rangeInput[1].value);
        
            if (maxVal - minVal < priceGap) {
              if (e.target.className === "range-min") {
                rangeInput[0].value = maxVal - priceGap;
              } else {
                rangeInput[1].value = minVal + priceGap;
              }
            } else {
              priceInput[0].value = minVal;
              priceInput[1].value = maxVal;
              range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
              range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
            }
          });
        });
         //pricefilter left side  end


         //category slide links
         jQuery(function ($) {

          $(".sidebar-dropdown > a").click(function() {
        $(".sidebar-submenu").slideUp(200);
        if (
          $(this)
            .parent()
            .hasClass("active")
        ) {
          $(".sidebar-dropdown").removeClass("active");
          $(this)
            .parent()
            .removeClass("active");
        } else {
          $(".sidebar-dropdown").removeClass("active");
          $(this)
            .next(".sidebar-submenu")
            .slideDown(200);
          $(this)
            .parent()
            .addClass("active");
        }
      });  
      });
        //category slide links


        
// spinner 
var numberSpinner = (function() {
  $('.number-spinner>.ns-btn>a').click(function() {
    var btn = $(this),
      oldValue = btn.closest('.number-spinner').find('input').val().trim(),
      newVal = 0;

    if (btn.attr('data-dir') === 'up') {
      newVal = parseInt(oldValue) + 1;
    } else {
      if (oldValue > 1) {
        newVal = parseInt(oldValue) - 1;
      } else {
        newVal = 1;
      }
    }
    btn.closest('.number-spinner').find('input').val(newVal);
  });
  $('.number-spinner>input').keypress(function(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
    }
    return true;
  });
})();
// spinner 


// Product slider js 
$(document).ready(function() {

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 3; //globaly define number of elements per page
  var syncedSecondary = true;

  sync1.owlCarousel({
      items: 1,
      slideSpeed: 2000,
      nav: true,
      autoplay: false, 
      dots: true,
      loop: true,
      responsiveRefreshRate: 200,
      navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
  }).on('changed.owl.carousel', syncPosition);

  sync2
      .on('initialized.owl.carousel', function() {
          sync2.find(".owl-item").eq(0).addClass("current");
      })
      .owlCarousel({
          items: slidesPerPage,
          dots: true,
          nav: true,
          smartSpeed: 200,
          slideSpeed: 500,
          slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
          responsiveRefreshRate: 100
      }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
      //if you set loop to false, you have to restore this next line
      //var current = el.item.index;

      //if you disable loop you have to comment this block
      var count = el.item.count - 1;
      var current = Math.round(el.item.index - (el.item.count / 2) - .5);

      if (current < 0) {
          current = count;
      }
      if (current > count) {
          current = 0;
      }

      //end block

      sync2
          .find(".owl-item")
          .removeClass("current")
          .eq(current)
          .addClass("current");
      var onscreen = sync2.find('.owl-item.active').length - 1;
      var start = sync2.find('.owl-item.active').first().index();
      var end = sync2.find('.owl-item.active').last().index();

      if (current > end) {
          sync2.data('owl.carousel').to(current, 100, true);
      }
      if (current < start) {
          sync2.data('owl.carousel').to(current - onscreen, 100, true);
      }
  }

  function syncPosition2(el) {
      if (syncedSecondary) {
          var number = el.item.index;
          sync1.data('owl.carousel').to(number, 100, true);
      }
  }

  sync2.on("click", ".owl-item", function(e) {
      e.preventDefault();
      var number = $(this).index();
      sync1.data('owl.carousel').to(number, 300, true);
  });
});
// Product slider js 


// add billing address js 
function addDivClass() {
  const myDiv = document.getElementById("shippingaddressform");
  myDiv.classList.add("my-class");
}
function removeDivClass() {
  const myDiv = document.getElementById("shippingaddressform");
  myDiv.classList.remove("my-class");
}
// add billing address js 
        
// profile image js 
function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
          $('#imagePreview').css('background-image', 'url('+e.target.result +')');
          $('#imagePreview').hide();
          $('#imagePreview').fadeIn(650);
      }
      reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload").change(function() {
  readURL(this);
});
//  profile image js 



      //mobile open category
        $('#btn-hide').on('click', function(){
          $('.catgorycontainer').addClass('opencatgory');
        });
        $('#btn-show').on('click', function(){
          $('.catgorycontainer').removeClass('opencatgory');
        });

        $('#btn-hide').click(function() {
          $('#btn-hide').hide();
          $('#btn-show').show();
        });

      $('#btn-show').click(function() {
        $('#btn-hide').show();
        $('#btn-show').hide();
      });


