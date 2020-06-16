@if( class_exists('ACF') )
@php

$bg_color = get_field('contact_background_color','options');
$contact_type = get_field('contact_components', 'options');
$contact_bg_image = get_field('contact_background_image', 'options');

// Define background images
$contact_bg_mobile = get_field('contact_background_image', 'options')['sizes']['w960x800'];
$contact_bg_desktop = get_field('contact_background_image', 'options')['sizes']['w1920x800'];

// Background State
$background_state = !empty(get_field('contact_background_image', 'options')) ? 'js-background text-white bg-cover bg-right' : null;

@endphp
      @switch( get_field('contact_components', 'options') )
        @case('contact-a')
        <section id="{{ $block['keywords'][0] }}" class="bg-{{$bg_color}} {!! $contact_type !!} {{ $background_state }} relative z-40" role="region" aria-label="Contact" data-mobile="{{ $contact_bg_mobile }}" data-desktop="{{ $contact_bg_desktop }}">
          @include('partials.contacts.contacts-a')
        </section>
        @break
        @case('contact-b')
        <section id="{{ $block['keywords'][0] }}" class="bg-{{$bg_color}} {!! $contact_type !!} {{ $background_state }} relative z-40" role="region" aria-label="Contact" data-mobile="{{ $contact_bg_mobile }}" data-desktop="{{ $contact_bg_desktop }}">
          @include('partials.contacts.contacts-b')
        </section>
        @break
        @case('contact-c')
        <section id="{{ $block['keywords'][0] }}" class="bg-{{$bg_color}} {!! $contact_type !!} {{ $background_state }} relative z-40" role="region" aria-label="Contact" data-mobile="{{ $contact_bg_mobile }}" data-desktop="{{ $contact_bg_desktop }}">
          @include('partials.contacts.contacts-c')
        </section>
        @break
        @default
          <!-- Display nothing -->
        @break
      @endswitch
@endif
