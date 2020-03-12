@if( $posts )
<div class="brm-testimonials js-testimonials">
  @foreach( $posts as $testimonial )
  @php

  $review_source = get_field('review_source');

  @endphp

  <blockquote class="mb-10 brm-testimonial text-center">
    {!! apply_filters('the_content', $testimonial->post_content) !!}
    <footer class="mt-30">
      <strong><cite class="text-sm">&#8211; {{ $testimonial->post_title }}</cite></strong>
      <p>{{ $testimonial->review_source }}</p>
    </footer>
  </blockquote>
  @endforeach
</div>
@endif
