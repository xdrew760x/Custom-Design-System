{{--
  Title: Meet the Team
  Description: Display a specified number of Team members
  Category: brm_blocks
  Icon: star-filled
  Keywords: Meet-The-Team
  Mode: preview
  Align: full
  --}}

@php
  // Background Color State
  $background_color_state = get_field('featured_bg_color');
@endphp

  @if( class_exists('ACF') )
  <section id="{{ $block['keywords'][0] }}" class="section section--team" role="region" aria-label="Meet the Team">
    <div class="container">
      @include('partials.team.our-team')
    </div>
  </section>
  @endif
