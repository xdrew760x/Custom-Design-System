// import external dependencies
import 'jquery';
import '@fancyapps/fancybox/dist/jquery.fancybox.min.js';
import 'slick-carousel/slick/slick.min';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,

  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());


var viewportWidth = $(window).width();

// logo on scroll
var header_a = $('.header-a');

if (viewportWidth >= 50) {
  $(window).scroll(function() {
    var scrollX = $(this).scrollTop();

    if (scrollX >= 10) {
      $(header_a).addClass('scroll-head--a');
    } else {
      $(header_a).removeClass('scroll-head--a');
    }
  });
}


// logo on scroll
var header_b = $('.header-b');

if (viewportWidth >= 50) {
  $(window).scroll(function() {
    var scrollX = $(this).scrollTop();

    if (scrollX >= 10) {
      $(header_b).addClass('scroll-head--b');
    } else {
      $(header_b).removeClass('scroll-head--b');
    }
  });
}

// logo on scroll
var header_d = $('.header-d');

if (viewportWidth >= 50) {
  $(window).scroll(function() {
    var scrollX = $(this).scrollTop();

    if (scrollX >= 10) {
      $(header_d).addClass('scroll-head--d');
    } else {
      $(header_d).removeClass('scroll-head--d');
    }
  });
}

/// Animation Controls
function isScrolledIntoView(elem) {
  var docViewTop = $(window).scrollTop();
  var docViewBottom = docViewTop + $(window).height();

  var elemTop = $(elem).offset().top - 200;
  var elemBottom = elemTop + $(elem).height();

  return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

$(window).scroll(function () {
  $('.animate-left').each(function () {
    if (isScrolledIntoView(this) === true) {
      $(this).addClass('slide-in-left')
    }
  });
});

$(window).scroll(function () {
  $('.bounce-left').each(function () {
    if (isScrolledIntoView(this) === true) {
      $(this).addClass('bounce-in-left')
    }
  });
});

$(window).scroll(function () {
  $('.animate-right').each(function () {
    if (isScrolledIntoView(this) === true) {
      $(this).addClass('slide-in-right')
    }
  });
});

$(window).scroll(function () {
  $('.bounce-right').each(function () {
    if (isScrolledIntoView(this) === true) {
      $(this).addClass('bounce-in-right')
    }
  });
});

$(window).scroll(function () {
  $('.animate-top').each(function () {
    if (isScrolledIntoView(this) === true) {
      $(this).addClass('slide-in-top')
    }
  });
});

$(window).scroll(function () {
  $('.animate-bottom').each(function () {
    if (isScrolledIntoView(this) === true) {
      $(this).addClass('slide-in-bottom')
    }
  });
});
