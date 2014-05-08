   
/* =================================
   LOADER                     
=================================== */
// makes sure the whole site is loaded
// jQuery(window).load(function() {
//         // will first fade out the loading animation
// 	jQuery(".status").fadeOut();
//         // will fade out the whole DIV that covers the website.
// 	jQuery(".preloader").delay(1000).fadeOut("slow");
// })
/* ================================
===  DROPDOWN               ====
================================= */
$(function() {
  // Setup drop down menu
  $('.dropdown-toggle').dropdown();
 
  // Fix input element click problem
  $('.dropdown input, .dropdown label').click(function(e) {
    e.stopPropagation();
  });
});

/* =================================
===  Bootstrap Fix              ====
=================================== */
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  var msViewportStyle = document.createElement('style')
  msViewportStyle.appendChild(
    document.createTextNode(
      '@-ms-viewport{width:auto!important}'
    )
  )
  document.querySelector('head').appendChild(msViewportStyle)
}

/* =================================
===  STICKY NAV                 ====
=================================== */
// ~~~$#
// $(document).ready(function() {
//   $('.main-nav-list').onePageNav({
//     scrollThreshold: 0.2, // Adjust if Navigation highlights too early or too late
//     scrollOffset: 75 //Height of Navigation Bar
//   });
  
//   // Sticky Header - http://jqueryfordesigners.com/fixed-floating-elements/         
//   var top = $('#main-nav').offset().top - parseFloat($('#main-nav').css('margin-top').replace(/auto/, 0));
  
//   $(window).scroll(function (event) {
//     // what the y position of the scroll is
//     var y = $(this).scrollTop();
    
//     // whether that's below the form
//     if (y >= top) {
//       // if so, ad the fixed class
//       $('#main-nav').addClass('fixed');
//     } else {
//       // otherwise remove it
//       $('#main-nav').removeClass('fixed');
//     }
//   });
  
// });

/*=================================
===  DARKEN NAV                ====
=================================== */



var mainbottom = $('#main-nav').offset().top + $('#main-nav').height();

// // on scroll, 
$(window).on('scroll',function(){

    // we round here to reduce a little workload
    stop = Math.round($(window).scrollTop());
    if (stop > mainbottom) {
        $('.navbar').addClass('past-main');
    } else {
        $('.navbar').removeClass('past-main');
    }

});
/*=================================
===  DROPDOWN                  ====
=================================== */

$('.dropdown').click(function(){
      if($('#nav-searchform').hasClass('in'))
        $('#nav-searchform').collapse('hide');
});

/*=================================
===  SMOOTH SCROLL             ====
=================================== */
// var scrollAnimationTime = 1200,
//         scrollAnimation = 'easeInOutExpo';
//     $('a.scrollto').bind('click.smoothscroll',function (event) {
//         // event.preventDefault();
//         var target = this.hash;
//         $('html, body').stop().animate({
//             'scrollTop': $(target).offset().top
//         }, scrollAnimationTime, scrollAnimation, function () {
//             window.location.hash = target;
//         });
//     });   
/* 
/*=================================
===  TESTIMONIALS              ====
=================================== */


// jQuery.fitHeights by Paravel™

// Author: Dave Rupert
// Author URL: http://daverupert.com/
// Based on: https://github.com/filamentgroup/jQuery-Equal-Heights 

// (function(){
  
//   $.fn.fitHeights = function() {
    
//     var items = $(this);
//     function setHeights() {
      
//       var currentTallest = 0;
  
//       items.css({ 'min-height' : currentTallest });  // unset min-height to get actual new height

//       // right now this causes a noticeable shift in height on resize. workarounds?
      
//       items.each(function(){
        
//         if( $(this).height() > currentTallest ) { currentTallest = $(this).height(); }
//       });

//       items.css({ 'min-height' : currentTallest });
    
//     }
    
//     setHeights();
//     $(window).on('resize', setHeights);
//     return this;
//   };
// })(jQuery);

// $(window).load(function(){
//   /* $(groupOfItems).fitHeights(); */
//   $('.grid-testimonials p').fitHeights();
// });
/**

    <script>
      $( function() {
        /*
        - how to call the plugin:
        $( selector ).cbpNTAccordion( [options] );
        - destroy:
        $( selector ).cbpNTAccordion( 'destroy' );
        */
/* ================================
===  ACCORDION                 ====
================================= */
      $( function() {
        /*
        - how to call the plugin:
        $( selector ).cbpNTAccordion( [options] );
        - destroy:
        $( selector ).cbpNTAccordion( 'destroy' );
        */

        $( '#cbp-ntaccordion' ).cbpNTAccordion();
      } );

/* ================================
===  MENU                 ====
================================= */

$(function(){ //DOM Ready
 
    $(".gridster ul").gridster({
        widget_margins: [10, 10],
        widget_base_dimensions: [140, 140]
    });
 
});

/* ================================
===  PARALLAX                  ====
================================= */
// $(document).ready(function(){
//   var $window = $(window);
//   $('div[data-type="background"], header[data-type="background"], section[data-type="background"]').each(function(){
//     var $bgobj = $(this);
//     $(window).scroll(function() {
//       var yPos = -($window.scrollTop() / $bgobj.data('speed'));
//       var coords = '50% '+ yPos + 'px';
//       $bgobj.css({ 
//         backgroundPosition: coords 
//       });
//     });
//   });
// });

/* ================================
===  circular-curved           ====
================================= */
      // var $headline = $('#headline').hide();
    
      // var $word1    = $('#arc-wrapper').find('h3').hide();
      // var $word2    = $('#arc-wrapper').find('h4').hide();
      
      // var $example1 = $('#example1').hide();
      
      // google.load('webfont','1');
      
      // google.setOnLoadCallback(function() {
      //   WebFont.load({
      //     google    : {
      //       families  : ['Lato']
      //     },
      //     fontactive  : function(fontFamily, fontDescription) {
      //       init();
      //     },
      //     fontinactive  : function(fontFamily, fontDescription) {
      //       init();
      //     }
      //   });
      // });
      
      // function init() {
      
      //   $headline.show().arctext({radius: 400});
          
      //   $word1.show().arctext();
      //   $word2.show().arctext({radius: 148, dir: -1});
        
      //   $example1.show().arctext({radius: 300});
      //   $example2.show().arctext({radius: 400, dir: -1});
      //   $example3.show().arctext({radius: 500, rotate: false});
      //   $example4.show().arctext({radius: 300});
        
      //   $('#button_set').on('click', function() {
      //     $example4.arctext('set', {
      //       radius    : 140,
      //       dir     : -1
      //     });
      //     return false;
      //   });
      //   $('#button_anim1').on('click', function() {
      //     $example4.arctext('set', {
      //       radius    : 300, 
      //       dir     : -1,
      //       animation : {
      //         speed : 300,
      //         easing  : 'ease-out'
      //       }
      //     });
      //     return false;
      //   });
      //   $('#button_anim2').on('click', function() {
      //     $example4.arctext('set', {
      //       radius    : 200, 
      //       dir     : 1, 
      //       animation : {
      //         speed : 300
      //       }
      //     });
      //     return false;
      //   });
      //   $('#button_reset').on('click', function() {
      //     $example4.arctext('set', {
      //       radius    : 300, 
      //       dir     : 1
      //     });
      //     return false;
      //   });
      
      // };
$('.toggleModal').on('click', function (e) {
  
  $('.modal').toggleClass('active');
  
});
/* ================================
===  WOW ANIMAT                ====
================================= */
new WOW().init();


