$(document).ready(function () {

    $(".filter-button").click(function () {
        var value = $(this).attr('data-filter');

        if (value == "all") {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else {
            //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
            //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.' + value).hide('3000');
            $('.filter').filter('.' + value).show('3000');

        }
    });

    if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
    }
    $(this).addClass("active");


    $(".backbtn").click(function () {
        $(".mouseover").toggleClass("close");
        $('.mouseover').hide();
        $(".close").toggle();
        $(".backbtn").hide();
    })

    $(".nav-link").click(function () {
        $(".backbtn").show();
    });

    $(".hide").show();
    $(".hamburger").click(function () {
        $(".show").toggle();
        $("#nav_bar").toggleClass("hide");
        $("#nav_bar").toggleClass("show");

    })

    $(".icon_faqs").click(function () {
        $(this).find(".fa-plus").toggleClass("fa-minus");
        $(this).find(".fa-minus").toggleClass("fa-plus");
        var elem_id = $(this).attr("data-id");
        $("#" + elem_id).slideToggle(500);
    });

            $(".hamburger").click(function () {
                $(this).toggleClass("is-active");
            });
            

            $(".dropdown-toggle").on("click", function() {
                $(".dropdown-menu").fadeToggle( "fast");
                });

                $(".dropdown-menu-search").hide()
$(".dropdown-toggle-search").on("click", function() {
$(".dropdown-menu-search").fadeToggle( "fast");
});

$(".dropdown-toggle-cart").on("click", function() {
    $(".dropdown-menu-cart").fadeToggle( "fast");
    });

    $(".dropdown-toggle-md").on("click", function() {
        $(".dropdown-menu").fadeToggle( "fast");
        });

        $(".create_account").click(function(){
            $(".login-form-1").fadeIn(500)
            $(".login-form-1").css("display","block")
            $(".login-form").css("display","none")
        })

        $(".login_here").click(function(){
            $(".login-form-1").css("display","none")
            $(".login-form").fadeIn(500)
            $(".login-form").css("display","block")
        })



        $(".recover_password").click(function(){
            $(".login-form").css("display","none")
            $(".login-form-2").fadeIn(500)
            $(".login-form-2").css("display","block")
        })

        $(".back_to_login").click(function(){
            $(".login-form-2").css("display","none")
            $(".login-form").fadeIn(500)
            $(".login-form").css("display","block")
        })

        $(".view_more_icon").click(function(){  

            if($(".view_more_icon i").hasClass("fa-plus") == true){
                $(".view_more_icon a").html('<i class="far fa-minus mr-3" aria-hidden="true"></i> View more');
                $(".set_height").animate({height :$(".set_height").get(0).scrollHeight},"fast");
            }else{

                $(".view_more_icon a").html('<i class="far fa-plus mr-3" aria-hidden="true"></i> View more');
                $(".set_height").animate({height : "250px"},"fast");

            }
    });


    $(".detail_image_sub img").click(function(){
        var checked= $(this).attr("src");
        $(".exzoom_img_ul li img").attr("src",checked).hide().fadeIn();
    })



var minVal = 1, maxVal = 20; // Set Max and Min values
// Increase product quantity on cart page
$(".page_item_plus").on('click', function(){
		var $parentElm = $(this).parents(".pagination");
		$(this).addClass("clicked");
		var value = $parentElm.find(".page-link").val();
		if (value < maxVal) {
			value++;
		}
		$parentElm.find(".page-link").val(value);
});
// Decrease product quantity on cart page

$(".page_item_minus").on('click', function(){
		var $parentElm = $(this).parents(".pagination");
		$(this).addClass("clicked");
		var value = $parentElm.find(".page-link").val();
		if (value > 1) {
			value--;
		}
		$parentElm.find(".page-link").val(value);
	});

    $(".service_cards_item_section .cards").first().addClass("active");
    $(".service_card_item_menu").first().addClass("active");
    $(".service_card_item_menu").hide();
    $(".service_card_item_menu").first().show();
    $(".service_cards_item_section .cards").click(function(){
        $(".service_card_item_menu").hide();
        $(".service_cards_item_section .cards").removeClass("active");
        $(".service_card_item_menu").removeClass("active");
        var elemt_id=$(this).attr("data-id");
        $("#"+elemt_id).addClass("active");
        $(this).addClass("active");
        $("#"+elemt_id).fadeToggle(500);
    })


});

    (function($) {
    var size;
    
      //SMALLER HEADER WHEN SCROLL PAGE
    function smallerMenu() {
      var sc = $(window).scrollTop();
      if (sc > 40) {
          $('#header-sroll').addClass('small');
      }else {
          $('#header-sroll').removeClass('small');
      }
    }
    
    // VERIFY WINDOW SIZE
    function windowSize() {
      size = $(document).width();
      if (size >= 991) {
          $('body').removeClass('open-menu');
          $('.hamburger-menu .bar').removeClass('animate');
      }
    };
    
    // ESC BUTTON ACTION
    $(document).keyup(function(e) {
      if (e.keyCode == 27) {
          $('.bar').removeClass('animate');
          $('body').removeClass('open-menu');
          $('header .desk-menu .menu-container .menu .menu-item-has-children a ul').each(function( index ) {
              $(this).removeClass('open-sub');
          });
      }
    });
    
    $('#cd-primary-nav > li').hover(function() {
      $whidt_item = $(this).width();
      $whidt_item = $whidt_item-8;
    
      $prevEl = $(this).prev('li');
      $preWidth = $(this).prev('li').width();
      var pos = $(this).position();
      pos = pos.left+4;
      $('header .desk-menu .menu-container .menu>li.line').css({
          width:  $whidt_item,
          left: pos,
          opacity: 1
      });
    });
    
    // ANIMATE HAMBURGER MENU
    $('.hamburger-menu').on('click', function() {
      $('.hamburger-menu .bar').toggleClass('animate');
      
          $('body').toggleClass('open-menu');
          $('#main_header').toggleClass('header_fixed');
      
    });
    
    $('header .desk-menu .menu-container .menu .menu-item-has-children ul').each(function(index) {
      $(this).append('<li class="back"><a href="#"><i class="fas fa-chevron-left"></i>Back</a></li>');
    });
    
    // RESPONSIVE MENU NAVIGATION
    $('header .desk-menu .menu-container .menu .menu-item-has-children > a').on('click', function(e) {
      e.preventDefault();
      if(size <= 991){
          $(this).next('ul').addClass('open-sub');
      }
    });
    
    // CLICK FUNCTION BACK MENU RESPONSIVE
    $('header .desk-menu .menu-container .menu .menu-item-has-children ul .back').on('click', function(e) {
      e.preventDefault();
      $(this).parent('ul').removeClass('open-sub');
    });
    
    $('body .over-menu').on('click', function() {
      $('body').removeClass('open-menu');
      $('.bar').removeClass('animate');
    });
    
    $(document).ready(function(){
      windowSize();
    });
    
    
    $(window).resize(function(){
      windowSize();
    });
    
    })(jQuery);
    
    
  
//   living room  

    $(document).ready(function () {
        $('.fa-times').on('click', function () {
            $(".filter_name").animate({width: "0px"});;
           
           });


           $('.filter').on('click', function () {
            $(".filter_name").animate({width: "100%"});;
           
           });

           $(".details").click(function () {
            $(this).find(".rotate").toggleClass("down");
        }) 
// 
      
        $(".view_icon i").click(function(){
            $(".e_comm_cards").toggleClass("list_e_comm_cards");
            $(".e_comm_cards").toggleClass("grid_e_comm_cards");
            $(".view_icon i").toggleClass("active");
            $(".e_comm_cards").hide();
            $(".e_comm_cards").fadeToggle(1000);
        });

      $(".shows").hide(); 
      $(".checkout_summary_main").click(function(){
        $(".checkout_summarys").slideToggle(500);
        $(".rotate").toggleClass("fa-chevron-down");
        $(".rotate").toggleClass("fa-chevron-up");
        $(".shows").toggle(); 
        $(".hides").toggle(); 
      });



    });


    $(document).ready(function(){
        if($( window ).width() < 1270){
            $(".no_of_products").text("1243 products");
        }else{
            $(".no_of_products").text("Showing 1 - 24 of 1308 products");
        }
     });
     $( window ).resize(function() {
         if($( window ).width() < 1270){
            $(".no_of_products").text("1243 products");
        }else{
            $(".no_of_products").text("Showing 1 - 24 of 1308 products");
        }
     });



   
//   living room  

