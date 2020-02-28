@php
  // Define background images
  $bg_mobile = get_sub_field('section_builder_background')['sizes']['w960x800'];
  $bg_desktop = get_sub_field('section_builder_background')['sizes']['w960x800'];

  // Background State
  $background_state = !empty(get_sub_field('section_builder_background')) ? 'js-background' : null;

  // Order State
  $order_state = get_sub_field('section_builder_split_flip');

  // Background Color State
  $background_color_state = get_sub_field('section_builder_background_color');

  // Content
  $content = get_sub_field('section_builder_content');
@endphp
<section class="section section--{{ $i }} section--{{ $section_state }} {{ $order_state }} {{ $background_color_state }} flex">
  <div class="section__bg {{ $background_state }} w-full md:w-/2 bg-cover bg-center" style="background-image: url({{ $bg_desktop }})" data-mobile="{{ $bg_mobile }}" data-desktop="{{ $bg_desktop }}"></div>
  @if( $content )
    <div class="section__content w-full md:w-/2">
      <div class="section__content__inner">
        {!! $content !!}
      </div>
    </div>
  @endif
</section>
