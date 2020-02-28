<!---
Header B
----->

@php

$header_cta = get_field('header_cta', 'options')

@endphp

<div class="header-b">
  <div class="container">

    <div class="header__top md:flex md:flex-row md:items-end md:justify-end md:-mb-5">
      @if( $phone )
      <a class="hidden md:inline-block text-sm" href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}">{{ $phone }}</a>
      @endif

      @if($header_cta)
      <h6 class="mobile-none">{!! $header_cta !!}</h6>
      @endif

      <a class="button button--primary ml-30 mobile-none" href="#">Place Order</a>
    </div>

    <div class="header__bottom">

      <nav class="mobile-open">
        <button class="w-hamburger h-hamburger ml-0 mr-auto md:hidden nav-toggle js-hamburger" aria-labelledby="toggle-navigation">
          <span id="toggle-navigation" hidden>Toggle Navigation</span>
          <span class="block relative w-full h-hamburger"></span>
        </button>

        @if (has_nav_menu('primary_type_b_left'))
        {!! wp_nav_menu(['theme_location' => 'primary_type_b_left', 'menu_class' => 'nav nav--left', 'container' => '']) !!}
        @endif

        <a class="header__branding" href="{{ home_url('/') }}">
          @if( $branding )
          <img src="{{ $branding }}" alt="{{ get_bloginfo('name', 'display') }}" />
          @else
          <img src="/app/themes/sage/resources/assets/images/bigrigxpress.svg" alt="{{ get_bloginfo('name', 'display') }}" />
          @endif
        </a>

        @if (has_nav_menu('primary_type_b_right'))
        {!! wp_nav_menu(['theme_location' => 'primary_type_b_right', 'menu_class' => 'nav nav--right', 'container' => '']) !!}
        @endif

        @if( $phone )
        <a class="mobile--tele ml-auto desktop-none" href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}" aria-labelledby="call">
          <img src="/app/themes/sage/resources/assets/images/telephone.svg" alt="Contact us button" > <span class="hidden ml-15">{{ $phone }}</span>
        </a>
        @endif

        <a class="button button--primary ml-30 hidden" href="#">Place Order</a>

      </nav>
    </div>
  </div>

</div>
