function smoothscroll(){$(function(){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);if(e=e.length?e:$("[name="+this.hash.slice(1)+"]"),e.length)return $("html,body").animate({scrollTop:e.offset().top-100},300,"easeInOutExpo"),!1}})})}function carousel(){if($(".featured").royalSlider({addActive:!0,arrowsNav:!1,controlNavigation:"none",autoScaleSlider:!0,autoScaleSliderWidth:1280,autoScaleSliderHeight:600,slidesOrientation:"vertical",slidesSpacing:0}),$(".carousel").length){var e=$(".carousel").data("royalSlider");$(".project-nav .ss-navigatedown").on("click",function(a){a.preventDefault(),e.next()}),$(".project-nav .ss-navigateup").on("click",function(a){a.preventDefault(),e.prev()}),e.ev.on("rsBeforeAnimStart",function(a){var t=e.currSlide.content.attr("data-hue");$("#header, #home_rsvp").removeClass("dark, light"),$("#header, #home_rsvp").addClass(t)})}}$(document).ready(function(){$(".carousel").carousel(),$(".background").background(),$(".gallery-zoom").lightbox(),$(".widget").imagesLoaded(function(){$(".widget").equalize({target:".equal"})}),carousel(),smoothscroll()});