function ajaxSideload(){
  $('.sideload').magnificPopup({
    type: 'ajax',
    alignTop: true,
    overflowY: 'scroll',
    midClick: true,
    removalDelay: 300,
    mainClass: 'mfp-slide',
    callbacks: {
      parseAjax: function(mfpResponse) {
        mfpResponse.data = $(mfpResponse.data).find('.page-content');
        console.log('Ajax content loaded:', mfpResponse);
      },
      ajaxContentAdded: function() {
        console.log(this.content);
      }
    }
  });
}

function mobileMenu(){

  // Clone that thing
  var a = $('#header-navigation').html();
  var b = $('#mobile-menu_container').html(a);
  $('#mobile-menu_container a').removeClass('btn-nav').addClass('btn-mobile');
  $(".mobile-toggle").swap();

}

function galleryPackery(){
  var $container = $('.gallery.packed');
// init
  $container.packery({
    itemSelector: '.packed',
    gutter: 0
  });
}

function galleryPackery(){
  var $isoContainer = $('.gallery.isotoped');
// init
  $isoContainer.packery({
    itemSelector: '.packed',
    gutter: 0,
    layoutMode: 'packery',
      packery: {
      gutter: 0
    },
  });
}

function smoothscroll(){
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 100
          }, 300, 'easeInOutExpo');
          return false;
        }
      }
    });
  });
}

function carousel(){

  $('.featured').royalSlider({
    addActive: true,
    //transitionType: 'fade',
    arrowsNav: false,
    controlNavigation: 'none',
    autoScaleSlider: true,
    autoScaleSliderWidth: 1280,
    autoScaleSliderHeight: 600,
    slidesOrientation: 'vertical',
    slidesSpacing: 0,
  });

  if ( $( ".featured" ).length ) {

    var slider = $(".featured").data('royalSlider');
  
    $(".project-nav .ss-navigatedown").on('click', function(e){
      e.preventDefault();
      slider.next();  
    });
  
    $(".project-nav .ss-navigateup").on('click', function(e){
      e.preventDefault();
      slider.prev();  
    });
  
    slider.ev.on('rsBeforeAnimStart', function(event) {
  
      var hue = slider.currSlide.content.attr('data-hue');
  
      $('#header, #home_rsvp').removeClass('dark, light');
      $('#header, #home_rsvp').addClass(hue);
    
    });

  }

}

$(document).ready(function(){

  $(".carousel").carousel();
  $(".background").background();
  $(".gallery-zoom").lightbox();
  $(".widget").imagesLoaded( function() {
    $(".widget").equalize({
      target: ".equal",
      //minWidth: '500px',
    });
  });
  $(".share-toggle").swap();
  $(".mailing-toggle").swap();
  galleryPackery();
  carousel();
  smoothscroll();
  mobileMenu();
  ajaxSideload();
});