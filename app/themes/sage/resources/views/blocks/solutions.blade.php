{{--
  Title: Solutions & Image Slider
  Description: Produces a row containing two columns with Image and Slider
  Category: columns_blocks
  Icon: format-quote
  Keywords: two-column column split
  Mode: preview
  Align: full
  --}}

  @php
  // Order State
  $order_state = get_field('section_builder_split_flip');

  // Section Padding
  $pad_y = get_field('section_padding_y');
  $pad_x = get_field('section_padding_x');

  //section width
  $image_width = get_field('image_section_width');
  $content_width = get_field('content_section_width');

  // Background Color State
  $background_color_state = get_field('section_builder_background_color');

  // WYSIWYG Editor
  $section_content = get_field('section_content');

  @endphp

  @if(is_admin)
  <script type="text/javascript" src="/app/themes/sage/resources/assets/scripts/slick.min.js"></script>
  @endif

  <script type="text/javascript">
  jQuery(document).ready( function($){
    $('.gallery-slider').slick({
      accessibility: true,
      adaptiveHeight: false,
      autoplay: true,
      autoplaySpeed: 15000,
      fade: false,
      pauseOnFocus: false,
      pauseOnHover: false,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      arrows: true,
      nextArrow: '<div class="next"><i class="fas fa-chevron-right"></i></div>',
      prevArrow: '<div class="prev"><i class="fas fa-chevron-left"></i></div>',
    });
  });
  </script>


  <section class="section--solutions {{ $background_color_state }}"
  style="padding: {!! $pad_y !!}px {!! $pad_x !!}px;">
    <div class="section--content container mb-30">
      {!! $section_content !!}
    </div>
    <div class="container {{ $order_state }} md:flex md:justify-between md:items-start md:flex-row mt-60">
      <!--  Slider here  -->
      <div class="column w-full md:w-1/3 section__bg gallery-slider">
        @if( have_rows('gallery_slider'))
        @while( have_rows('gallery_slider') ) @php the_row() @endphp
        @php
        // Gallery Slider Repeater Field
        $solution_sub_image = get_sub_field('solution_image');
        @endphp
        <div class="gallery--slide" style="background-image: url({!! $solution_sub_image !!})"></div>
        @endwhile
        @endif
      </div>

      <div class="column section__content w-full md:w-2/3 md:flex md:justify-start md:items-start">
        @if( have_rows('solution_listing'))
        @while( have_rows('solution_listing') ) @php the_row() @endphp
        @php
        // Solution content Repeater Field
        $solution_icon = get_sub_field('solution_icon');
        $solution_description = get_sub_field('solution_description');
        $solution_link = get_sub_field('solution_link');
        @endphp
        <div class="solution--col md:w-1/2 flex justify-start items-start md:pr-15 mb-60 md:mb-30">
          <img src="{!! $solution_icon !!}" alt="solution-icon">
          <div class="pl-15 solution--content">
            {!! $solution_description !!}
            <a href="{!! $solution_link !!}" class="mt-15 button button--primary">Learn More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>

        @endwhile
        @endif
      </div>
    </div>
  </section>
