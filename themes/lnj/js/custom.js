$(document).ready(function() {
    "use strict";
    var biggestHeight = 0;
    var biggestInHeight = 0;
    var eventInHeight = 0;
    var InnerBannerHeight = 0;
    var ActiveBlockHeight = 0;
    var windowwidth = $(window).width();
    mobileMenu();
     youtubeVideoResize();
    
    
    
    
    $('.browse-collection-tabelcell li').hover(function() {
        var targets = $(this).find('a').attr('href');
        
        $('.collectioinImage a[href="'+targets+'"]').parent().addClass('active');
        
    }, function(){
        
        $('.collectioinImage ').removeClass('active');
        
    })
    

$('.event_slider').slick({
		slidesToShow: 1,
        slidesToScroll: 1,
		autoplay:true,
		autoplaySpeed:2500,
		arrows:true,
		responsive: [{
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
	});
	
	$('.fancypopup').fancybox();

    $(window).load(function() {
        imageHeight();
         youtubeVideoResize();
        
        
        
         /*var subscribed = sessionStorage.getItem('subscribe');
        console.log(subscribed);
        if(subscribed !== "yes"){
            setTimeout(function() {
                 $('.open-pop')[0].click();
                sessionStorage.setItem('subscribe', 'yes');                  
            }, 10000);
             $('.open-pop').fancybox();
            
        }*/

    });
    
    

    $(window).resize(function() {
        imageHeight();
        mobileMenu();
         youtubeVideoResize();
    });

  
      
    function mobileMenu(){
        var wWidth = $(window).width();
        var wHeight = $(window).height();
        if( wWidth <= 1024 ) {
        //mobile menu icon animation
        $('div#nav-icon3').click(function() {
            var margin = parseInt($('.wrapper').css('margin-right'));
            $('.wrapper, body').width(wWidth);
            if( margin < 1 ) {
                $(this).addClass('open'); 
                $('.mobileMenu').show();
                $('.wrapper').stop().animate({
                    'margin-right': 250,
                }, 600);
            }
            else{
                $(this).removeClass('open'); 
                $('.wrapper').stop().animate({
                    'margin-right': 0,
                }, 600, function() {
                    $('.mobileMenu').hide();
                });
            }
            
            $('.mobileMenu >ul >li').each(function() {
                if($(this).find('ul.sub-menu').size() > 0 ){
                    $(this).append('<i class="fa fa-plus plusMinus" aria-hidden="true"></i>');
                } 
                $(this).find('.plusMinus:gt(0)').remove();
            });

            	$(' .plusMinus').unbind('click');
			$('.plusMinus').bind('click', function() {
				$('.sub-menu:visible').slideUp( function() {
					$(this).parents().find('.plusMinus').removeClass('fa-minus').addClass('fa-plus');
                    
				});

                   $(this).parent().find('.sub-menu:hidden').slideDown();	
                $(this).removeClass('fa-plus').addClass('fa-minus')
			});
            
        });
        
        
            $('#nav-box .menu-main-menu-container > ul').appendTo('.mobileMenu');
            $('.wrapper, body').width(wWidth);
        }
        else{
            $('.mobileMenu > ul ').appendTo('#nav-box .menu-main-menu-container');
            $('.wrapper').css({'margin-left': 0, width: '100%'});
            $('#nav-icon3').removeClass('open'); 
            $('.plusMinus').remove();
            $('.sub-menu:visible').slideUp();
            $('.wrapper, body').width('auto');
        }
    }
    
    //***---  home winter 2018 slider start ---***//
     $('.home-autumn-slider').slick({
         slidesToShow: 4,
        slidesToScroll: 1,
         responsive: [{
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
         
     });
    
    
    
    
    // ***--  Logo slider start   --*** // 
    $('.logoslider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1025,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 780,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    // ***--  Logo slider end   --*** // 


    // ***--   Cleint Logo slider start   --*** // 
    $('.clientlogoslider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,

        responsive: [{
            breakpoint: 1025,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 780,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    // ***--   Cleint Logo slider end  --*** // 
    
    
    
    // ***--   Event Logo slider start   --*** // 
    $('.event_slider').slick({
        slidesToShow: 2,
         arrows: false,
        slidesToScroll: 1,

        responsive: [{
            breakpoint: 1025,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 780,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    // ***--   Event Logo slider end  --*** // 
    

    // ***--   Historic Time Line slider start   --*** // 
    if ($('.historic-timeline-slider').size() > 0) {
        $('.historic-timeline-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: false,
            speed: 1000,
            focusOnSelect: true,
            asNavFor: '.historic-slider-nav'
        });
        $('.historic-slider-nav').slick({
            speed: 1000,
            slidesToShow: 8,
            slidesToScroll: 1,
            dots: false,
            centerMode: false,
            focusOnSelect: true,
            asNavFor: '.historic-timeline-slider',
            responsive: [{
                breakpoint: 780,
                settings: {
                    slidesToShow: 3,
                    focusOnSelect: false,
                    centerMode: false,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }]
        });
    }
    // ***--  Historic Time Line slider end  --*** // 


    // ***--  Wow Js Script Start  --*** // 
    new WOW().init();
    // ***--  Wow Js Script End   --*** // 


    // ***--   make equal height function start  --*** // 
    function imageHeight() {

        $('.same-height-box').each(function() {
            if ($(this).height() > biggestHeight) {
                biggestHeight = $(this).height();
            }
        });
        $('.same-height-box').height(biggestHeight);


        $('.inner-same-height').each(function() {
            if ($(this).height() > biggestInHeight) {
                biggestInHeight = $(this).height();
            }
        });
        $('.inner-same-height').height(biggestInHeight);


        $('.inner-banner-same-height').each(function() {
            if ($(this).height() > InnerBannerHeight) {
                InnerBannerHeight = $(this).height();
            }
        });
        $('.inner-banner-same-height').height(InnerBannerHeight);


        $('.upcoming-event-section .col.span_4').each(function() {
            if ($(this).height() > eventInHeight) {
                eventInHeight = $(this).height();
            }
        });
        $('.upcoming-event-section .col.span_4').height(eventInHeight);


        $('.active-twobucket-section').each(function() {
            if ($(this).height() > ActiveBlockHeight) {
                ActiveBlockHeight = $(this).height();
            }
        });
        $('.active-twobucket-section .four-fabric-wrap').height(ActiveBlockHeight);
        
        
        // ***  make equal height end --*** // 


        // *** header equal height block start  --*** // 
        if( $('.page-id-141').size() > 0 ){
          
            var Summerhalfbox = $('.first-banner-box.summer-block-box-first').height() / 2;
           
            $('.summerhalf-banner-box').css('height', Summerhalfbox);
        }
        
        
        if( $('.banner-block-box-first').size() > 0 ){
            var tophalfblock = parseInt($('.banner-block-box-first .first-banner-box').height());
            //console.log(tophalfblock * 0.65);  
            $('.banner-block-box-first .sec-banner-box').css('height',Math.round((tophalfblock * 65)/100));
            $('.banner-block-box-first .third-banner-box').css('height',Math.round((tophalfblock * 35)/100)+1);
        }
        
      

        // *** header equal height block end  --*** // 
    }
    // ***--  make equal height function end --*** // 

    // About Scroll Js Script Start //
    var jump = function(e) {
        if (e) {
            e.preventDefault();
            var target = $(this).attr("href");
        } else {
            var target = location.hash;
        }

        $('html,body').animate({
            scrollTop: $(target).offset().top - 60
        }, 2600, function() {
            location.hash = target;
        });
    }

    $('a[href^=#]').bind("click", jump);
    if (location.hash) {
        setTimeout(function() {
            $('html, body').scrollTop(60).show();
            jump();
        }, 0);
    } else {
        $('html, body').show();
    }
    // About Scroll Js Script End // 


    // Top scroll Js Script Start // 
    
    

    $('#scrollToTop').bind("click", function() {
        $('html, body').animate({
            scrollTop: 0
        }, 1200);
        return false;
    });
  
    // Top scroll Js Script End // 
    
    //accordian start with icon
    $(".mobile-fabric-text .info-btn-icon").click(function(e){
         $(".mobile-fabric-text .mobile-fabric-textactive:visible").slideUp(function(){
              
         });
         
         $(this).parent().find(" .mobile-fabric-textactive:hidden").slideDown();
    
    });
    //accordian end with icon
    $(window).scroll(function() {
        
        if( $(window).scrollTop() > 200 ){
            $('#scrollToTop').fadeIn();
        }
        else{
            $('#scrollToTop').fadeOut();
        }
        
    });
    
    // insert before in mobile start
   $('.banner-block-section').each(function(i, obj) {
   if( windowwidth < 767 ){
       
		 $(obj).find('.sixth-banner-box').insertAfter($(obj).find('.first-banner-box'));
       
    } 
    });
// insert before in mobile end
  
    //resize youtube video automatically.
    function youtubeVideoResize() {
        var $this = jQuery('#video');
        $this.height((7/16)*$this.width());
    }
    
    
    $('#play-button').on('click', function(){
         setTimeout(function() {
        $('.customcoverImage').css({'z-index':'-11', 'position':'relative', 'transition':'all 1s ease-in-out'});
        
         }, 2000);
    });
    
 
    
}); 



