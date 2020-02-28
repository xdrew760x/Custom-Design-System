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
