@php
//Animation
$testimonial_animation = get_field('test_animation_control');
@endphp

<script type="text/javascript">
// Handle testimonials
jQuery(document).ready( function($){


  if ($('.js-testimonials').length) {
    $('.js-testimonials').slick({
      accessibility: true,
      adaptiveHeight: true,
      autoplay: true,
      autoplaySpeed: 5000,
      arrows: false,
      nextArrow: '<div class="next"><i class="fas fa-chevron-right"></i></div>',
      prevArrow: '<div class="prev"><i class="fas fa-chevron-left"></i></div>',
      dots: false,
      fade: false,
      pauseOnFocus: false,
      pauseOnHover: false,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,
    })
  }


});

</script>

<div class="container py-90">
  <div class="@if(!is_admin()){!! $testimonial_animation !!}@endif text-center">
    @php
    $testimonials_cnt = get_field('testimonial_content');
    @endphp

    @if( $testimonials_cnt )
    {!! apply_filters('the_content', $testimonials_cnt) !!}
    @endif

    {!! do_shortcode('[testimonials]') !!}
  </div>
</div>
