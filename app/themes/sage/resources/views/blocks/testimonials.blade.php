{{--
  Title: Testimonials
  Description: Add a testimonials carousel
  Category: general_blocks
  Icon: format-quote
  Keywords: testimonials
  Mode: preview
  Align: full
  --}}

  @if( class_exists('ACF') )
  @php
  // Define fields
  $testimonial_type = get_field('testimonial_type');
  $testimonials_wdt = get_field('testimonial_width');
  $testimonials_mbl = get_field('testimonial_background_image')['sizes']['w960x562'];
  $testimonials_dsk = get_field('testimonial_background_image')['sizes']['w1920x562'];
  $text_state = !empty(get_field('testimonial_background_image')) ? 'text-white' : null;
  $testimonials_cnt = get_field('testimonial_content');
  $testimonials_spc = $testimonials_wdt !== 'full' ? 'md:px-10' : 'md:px-0';
  @endphp
  @if(is_admin())
  <script type="text/javascript" src="/app/themes/sage/resources/assets/scripts/slick.min.js"></script>
  @endif
  <section id="{{ $block['keywords'][0] }}" class="testimonial--{{ $testimonial_type }} bg-center bg-cover bg-no-repeat {!! $text_state !!} bg-primary-4" data-mobile="{{ $testimonials_mbl }}" data-desktop="{{ $testimonials_dsk }}" style="background-image:url({{ $testimonials_dsk }})" role="region" aria-label="Testimonials">

    @switch( get_field('testimonial_type') )
    @case('type-a')
    @include('partials.testimonials.testimonial-a', [$options])
    @break
    @case('type-b')
    @include('partials.testimonials.testimonial-b', [$options])
    @break
    @case('type-c')
    @include('partials.testimonials.testimonial-c', [$options])
    @break

    @default
    @break
    @endswitch

  </section>
  @endif
