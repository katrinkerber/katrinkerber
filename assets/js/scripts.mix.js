/*
THIS FILE IS MINIMISED AND SAVED AS 'scripts.min.js'
*/

/* ############## IMPORT PLUGINS ############## */
@import "libs/jquery-1.9.1.min.js";
@import "libs/prism.js";



/* ############## SET FUNCTIONS ############## */
function backtotop() {
  var $backtotopLink = $('.backtotop');
  var windowHeight = $(window).height();
  var pageHeight = $('body').height();
  if ( pageHeight < windowHeight ) {
    $backtotopLink.hide();
  } else {
    $backtotopLink.show();
  }
  $backtotopLink.click(function() {
    $('html,body').animate({scrollTop:0}, 500)
    return false;
  });
}

/* ############## CALL FUNCTIONS ############## */
$(document).ready(function() {
  backtotop();
});

$( window ).resize(function() {
  backtotop();
});
