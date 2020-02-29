@php

$header_cta = get_field('header_cta', 'options');

$header_booking = get_field('header_booking', 'options');

@endphp

<div class="header-a">
  <div class="container">

    <div class="header__top md:flex md:flex-row md:justify-end md:-mb-5">
      @if( $phone )
      <a class="hidden md:inline-block text-sm" href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}">{{ $phone }}</a>
      @endif

      @if($header_cta)
        <h6 class="mobile-none">{!! $header_cta !!}</h6>
      @endif

      @if($header_booking)
      <a class="button button--primary mobile-none" href="{!! $header_booking !!}">Place Order</a>
      @endif

    </div>

    <div class="flex flex-row flex-wrap md:flex-no-wrap items-center md:items-end justify-between">

      <button class="w-hamburger h-hamburger ml-0 mr-auto md:hidden nav-toggle js-hamburger" aria-labelledby="toggle-navigation">
        <span id="toggle-navigation" hidden>Toggle Navigation</span>
        <span class="block relative w-full h-hamburger"></span>
      </button>

      <a class="header__branding w-full max-w-brand md:w-auto md:max-w-initial md:mx-0" href="{{ home_url('/') }}">
        @if( $branding )
        <img src="{{ $branding }}" alt="{{ get_bloginfo('name', 'display') }}" />
        @else

        <img src="/app/themes/sage/resources/assets/images/bigrigxpress.svg" alt="{{ get_bloginfo('name', 'display') }}" />

        @endif
      </a>

      @if( $phone )
      <a class="ml-auto mr-0" href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}" aria-labelledby="call">
        <span id="call" hidden>Call Us: {{ $phone }}</span>
        <img src="/app/themes/sage/resources/assets/images/telephone.svg" alt="Contact us button" class="desktop-none">
      </a>
      @endif

      <nav>
        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'w-full md:w-auto nav', 'container' => '']) !!}
        @endif
      </nav>

    </div>
  </div>
</div>
