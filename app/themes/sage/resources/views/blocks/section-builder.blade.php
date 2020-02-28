{{--
  Title: Section Builder
  Description:
  Category: common
  Icon: image-flip-horizontal
  Keywords: section-builder
  Mode: edit
  Align: full
  --}}

  @if( class_exists('ACF') )
  @php

  $i = 1;

  @endphp

  @if(have_rows('section_builder'))
  @while(have_rows('section_builder')) @php the_row() @endphp
  @php
  // Section Type State
  // Defines if it's a normal full width section or split section
  $section_state = get_sub_field('section_type');
  @endphp

  @switch( get_sub_field('section_type') )
  @case('full')
  @include('partials.sections.full', [$options])
  @break
  @case('split')
  @include('partials.sections.split', [$options])
  @break
  @case('contained')
  @include('partials.sections.contained', [$options])
  @break
  @default
  @break
  @endswitch

  @php $i++ @endphp
  @endwhile
  @endif
  @endif
