/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

  $('.menu-icon, .menu-icon-x, .menu-icon-small').click(function(){
    $('.nav-primary-wrap').toggleClass('open');
    $('.menu-iconx, .nav-main, .menu-icon-small').toggleClass('hidden');
  });

  $('.small-menu .menu-item:not(.active)').hover(function(){
    $(this).toggleClass('active');
  });

  $('.menu-icon').hover(function(){
    $('.icon-1, .icon-3').toggleClass('hover');
  });

  // Product Actions
  $('.product-menu button').click(function(){
    var id = $(this).data('id');
    // Show content, adding active class
    $('.product-content').removeClass('active').addClass('inactive');
    $(id).removeClass('inactive').addClass('active');
    // highligh button, adding active class
    $('.product-menu button').removeClass('active');
    $(this).addClass('active');
    // Change selected display for mobile menu
     $('.mobile-menu-selected').html($(this).text());
  });

   // Mobile Menu
  $('.mobile-menu').click(function(){
    $('.mobile-menu-items').slideToggle();
  });

  $('.mobile-menu-items li').click(function(){
    var id = $(this).data('id');

    // Show content, adding active class
    $('.product-content').removeClass('active').addClass('inactive');
    $(id).removeClass('inactive').addClass('active');
    // Change selected display
    $('.mobile-menu-selected').html($(this).text());
    // Also change ativate button
    $('.product-menu button').removeClass('active');
    $('.product-menu').find('button[data-id='+id+']').addClass('active');
  });

  //OWL carousel
  jQuery.noConflict();
  (function( $ ) {
    $(function() {
      var owl = $("#owl-carousel");
 
      owl.owlCarousel({
          items : 1, //10 items above 1000px browser width
          itemsDesktop : [1000,1], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,1], // betweem 900px and 601px
          itemsTablet: [600,1], //1 items between 600 and 0
          itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
          autoPlay: 8000,
          stopOnHover: true
      });
     
      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      });
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      });

      // Training Carousel
      var owl_training = $("#training-carousel");
 
      owl_training.owlCarousel({
          items : 5, //10 items above 1000px browser width
          itemsDesktop : [1000,3], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,2], // betweem 900px and 601px
          itemsTablet: [600,1], //1 items between 600 and 0
          itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
          autoPlay: false,
          stopOnHover: true
      });

      // Custom Navigation Events
      $(".next").click(function(){
        owl_training.trigger('owl.next');
      });
      $(".prev").click(function(){
        owl_training.trigger('owl.prev');
      });

      // Enterprice Carousel
      var owl_enterprise = $("#enterprice-carousel");
 
      owl_enterprise.owlCarousel({
          items : 5, //10 items above 1000px browser width
          itemsDesktop : [1000,3], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,2], // betweem 900px and 601px
          itemsTablet: [600,1], //1 items between 600 and 0
          itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
          autoPlay: false,
          stopOnHover: true
      });

      // Custom Navigation Events
      $(".next").click(function(){
        owl_enterprise.trigger('owl.next');
      });
      $(".prev").click(function(){
        owl_enterprise.trigger('owl.prev');
      });

    });
  })(jQuery);


  // WOWjs initialize
  new WOW().init();

  // TextArea auto height
  $('textarea').each(function () {
    this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
  }).on('input', function () {
    this.style.height = 'auto';
    this.style.height = (this.scrollHeight) + 'px';
  });

  $('textarea').trigger('input');

  // Scroll to top
  $(window).scroll(function() {
      if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
          $('#return-to-top').fadeIn(200);    // Fade in the arrow
      } else {
          $('#return-to-top').fadeOut(200);   // Else fade out the arrow
      }
  });
  $('#return-to-top').click(function() {      // When arrow is clicked
      $('body,html').animate({
          scrollTop : 0                       // Scroll to top of body
      }, 500);
  });


})(jQuery); // Fully reference jQuery after this point.
