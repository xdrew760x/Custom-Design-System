{{--
  Title: Full Column Block
  Description: Produces a row containing One column with various styling controls
  Category: columns_blocks
  Icon: format-quote
  Keywords: two-column column split
  Mode: preview
  Align: full
  --}}

  @php
  // Define background images
  $bg_mobile = get_field('section_builder_background')['sizes']['w960x800'];
  $bg_desktop = get_field('section_builder_background')['sizes']['w1920x800'];

  // Background State
  $background_state = !empty(get_field('section_builder_background')) ? 'js-background' : null;

  // Background Color State
  $background_color_state = get_field('section_builder_background_color');

  // Text State
  $text_state = get_field('section_builder_text_center') === 'yes' ? 'text-center' : null;

  // Action State
  $action_state = get_field('section_builder_action') === 'yes' ? 'has-action' : null;

  // Content
  $content = get_field('section_builder_content');

  // Animation
  $animate = get_field('animate_content');

  // Section Padding
  $pad_y = get_field('section_padding_y');
  $pad_x = get_field('section_padding_x');

  // Container Transparent color
  $t_bg_color = get_field('t_bg_color');

  // Border Styling
  $border_style = get_field('border_style') === 'yes';

  // text color
  $text_color = get_field('text_color');


  @endphp


  <section class="section section--full {{ $background_state }} {{ $background_color_state }} {!! $text_color !!} bg-center bg-cover bg-no-repeat"
  style="
  background-image:url({{ $bg_desktop }});
  padding: {!! $pad_y !!}px {!! $pad_x !!}px;
  "
  data-mobile="{{ $bg_mobile }}"
  data-desktop="{{ $bg_desktop }}">
  @if( $content )
  <div class="container p-30 md:p-45 @if(!is_admin()){!!$animate !!}@endif @if($border_style) border-style-left @endif"
  style="
  background-color: {!! $t_bg_color !!};
  "
  >
  {!! $content !!}
</div>
@endif
</section>
