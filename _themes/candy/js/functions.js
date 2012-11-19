/* This file is set to import all plugins and is minified via CodeKit as 'scripts-min.js' */

/* ############## IMPORT PLUGINS ############## */
// @codekit-prepend "plugins/fancyBoxv2.1.1.js";


/* ############## SET FUNCTIONS ############## */
function toggleBackToTopButton() {
    if ( ( $('header#site-header').height() + $('#content').height() ) < $(window).height() ) {
      $('a.go-up').hide();
    } else {
      $('a.go-up').show();
    }
}

// this function is only called on detected handheld mobile devices
function projectsAccordion() {
  var $project = $('#projects').find('article');
  var $projectHeader = $('#projects').find('article h2');
  // add 'close' btn to end of projects
  $project.append('<button class="close">Close project info <i aria-hidden="true" class="icon-chevron-up"></i></button>')
  // 'closed' class on headers and hide everything underneath header
  $projectHeader.addClass('closed').nextUntil('article').hide();
  // reveal or hide info on header click
  $projectHeader.click(function(){
    $this = $(this);
    if ( $this.hasClass('closed') ) {
      $(this).removeClass('closed').addClass('open').nextUntil('article').show();
    } else {
      $(this).removeClass('open').addClass('closed').nextUntil('article').hide();
    }
  });
  // close button selected - close project and scroll back to heading position of closed project
  $project.find('.close').on('click', function(){
    $(this).parent('article').find('h2').removeClass('open').addClass('closed').nextUntil('article').slideUp(400);
    // taking off 60px of heading top position, to give it a bit of breathing room at top
    var scrollPos = $(this).parent('article').find('h2').offset().top - 60;
    $('html, body').scrollTop(scrollPos);
  });
}

/* ############## CALL FUNCTIONS ############## */
$(document).ready(function(){
  // return to top link clicked
  $('a.go-up').click(function(){
    $('html, body').animate({ scrollTop: 0 }, 600);
    return false;
  });

  // projects accordion for mobile devices (not Android with screen width of more than 400, which would include the Samsung Galaxy Tablet)
  if ( /Android/i.test(navigator.userAgent) && screen.width < 400 ) {
    projectsAccordion();
  } else if ( /webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent) ) {
    projectsAccordion();
  }

  // fancybox screenshot gallery
  $('.screenshot-gallery').click(function(){
    // get all image URLS from the clicked links data-slideshowimages attribute
    var imagesString = $(this).attr('data-slideshowimages');
    // split the images text string into an array at each space
    var imagesArray = imagesString.split(' ');
    // the last array item is always empty because of the last bit of empty space at the end of the string, so lets pop/remove that one
    imagesArray.pop();
    // let's open those bad boys
    $.fancybox.open(imagesArray, {
        loop          : false,
        padding       : 2,
        closeBtn      : false,
        arrows        : false,
        autoCenter    : false,
        helpers       : {
          buttons : {}
        }
    });
    return false;
  });
});

// hide or show 'back to top' link - need to wait until everything is fully loaded to get correct dimensions
$(window).load(function(){
  toggleBackToTopButton();
});
