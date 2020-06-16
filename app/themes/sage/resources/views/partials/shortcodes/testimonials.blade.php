@if( $posts )
<div class="brm-testimonials js-testimonials">
  @foreach( $posts as $testimonial )
  @php

  $review_source = get_field('review_source');

  @endphp

  <blockquote class="mb-10 brm-testimonial">
    <img src="/app/themes/sage/resources/assets/images/raiting-stars.png" alt="testimonial-ratings" class="type-c-graphic">
    <span>{!! apply_filters('the_content', $testimonial->post_content) !!}</span>
    <footer class="mt-30">
      <strong class="text-p">&#8211; {{ $testimonial->post_title }} on {{ $testimonial->review_source }}</strong>
    </footer>
  </blockquote>
  @endforeach
</div>
@endif
