/*====================================
  Setting
====================================*/

$(document).ready(function(){
/*====================================
  Initialization
====================================*/
/*=== Window width/height ===*/
  var windowW = window.innerWidth;
  var windowH = window.innerHeight;
  var device = deviceDet(windowW);
  $(window).on('resize', function() {
    windowW = window.innerWidth;
    windowH = window.innerHeight;
    device = deviceDet(windowW);
  });
/*=== Device detection by width ===*/
  function deviceDet(windowW) {
    if (windowW < 415) {
      device = 'sp';
    } else if (windowW < 769) {
      device = 'tb';
    } else {
      device = 'pc';
    }
    return device;
  }
/*====================================
  Operation
====================================*/
/*=== Smooth scroll ===*/
  $('a[href^="#"]').on('click', function() {
    var margin = 100;
    var href = $(this).attr('href');
    var target = $((href=='#' || href=='') ? 'html' : href);
    var posY = target.offset().top - margin;
    $('html, body').animate({scrollTop:posY}, 500, 'swing');
    return false;
  });
/*=== Hamberger ===*/
  var $target = $('header');
  $('.navBtn').on('click', function() {
    $target.toggleClass('open');
  });
  $('nav a').on('click', function() {
    $target.removeClass('open');
  });

});


/*====================================
  Memo
======================================
console.log();
for (var i=0; i<array.length; i++) {}
$('').each(function(i, elm){});
var ua = navigator.userAgent;
if (((ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0) && ua.indexOf('Mobile') > 0) && windowW < 415 && !flagScrStopCancel ) {}
var i = $('li').index();
$('').on('click', function() {});
$('').on('mousedown', function(){});
$('').on('mousemove', function(){});
$('').on('mouseup mouseleave', function(){});
$('').on('touchstart', function(){});
$('').on('touchmove', function(){});
$('').on('touchend', function(){});
$(window).scrollTop()
$(window).on('scroll', function(){});
$(window).on('resize', function(e) {});
$('').offset().top
$('')[0].scrollHeight
.addClass('right')
.children('')
.find('*')
.append('<span></span>')
.outerWidth();
.attr('', )
.prop('disabled', true)
.animate({'': ''}, 100, 'linear', function(){});
var timer = setTimeout(function() {}, 100);
clearTimeout(timer);
*/