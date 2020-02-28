@php
  // Define background images
  $bg_mobile = get_sub_field('section_builder_background')['sizes']['w960x800'];
  $bg_desktop = get_sub_field('section_builder_background')['sizes']['w1920x800'];

  // Background State
  $background_state = !empty(get_sub_field('section_builder_background')) ? 'js-background' : null;

  // Background Color State
  $background_color_state = get_sub_field('section_builder_background_color');

  // Text State
  $text_state = get_sub_field('section_builder_text_center') === 'yes' ? 'text-center' : null;

  // Action State
  $action_state = get_sub_field('section_builder_action') === 'yes' ? 'has-action' : null;

  // Content
  $content = get_sub_field('section_builder_content');

  $i = 1;
@endphp
<section class="section section--{{ $i++ }} section--{{ $section_state }} {{ $background_state }} {{ $background_color_state }} bg-center bg-cover bg-no-repeat {{ $action_state }}" style="background-image:url({{ $bg_desktop }})" data-mobile="{{ $bg_mobile }}" data-desktop="{{ $bg_desktop }}">
  @if( $content )
    <div class="container {{ $text_state }}">
      {!! $content !!}
    </div>
  @endif
</section>
