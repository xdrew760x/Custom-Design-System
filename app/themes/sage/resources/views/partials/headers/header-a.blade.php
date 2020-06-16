@php

$header_cta = get_field('header_cta', 'options');

$header_booking = get_field('book_now_url', 'options');

@endphp

<div class="header-a">
  @if($phone || $header_booking || $header_cta)
  <div class="header__top">
    <div class="container md:flex md:flex-row md:items-center md:justify-end">

      @if( $phone )
      <a class="hidden md:inline-block text-sm" href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}"><i class="fas fa-phone-volume"></i> {{ $phone }}</a>
      @endif

      @if($header_cta)
      <h6 class="mobile-none">{!! $header_cta !!}</h6>
      @endif

      @if($header_booking)
      <a class="button button--secondary mobile-none" href="{!! $header_booking !!}">Book Now</a>
      @endif
    </div>
  </div>
  @endif

  <div class="header__bottom">
    <div class="container">
      <div class="flex flex-row flex-wrap items-center md:items-center justify-center md:justify-between">

        <a class="header__branding w-full max-w-brand md:w-auto md:max-w-initial md:mx-0" href="{{ home_url('/') }}">
          @if( $branding )
          <img src="{{ $branding }}" alt="{{ get_bloginfo('name', 'display') }}" />
          @else

          <img src="/app/themes/sage/resources/assets/images/bigrigxpress.svg" alt="{{ get_bloginfo('name', 'display') }}" />

          @endif
        </a>

        @if( $phone )
        <a class="ml-0 md:ml-auto md:mr-0" href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}" aria-labelledby="call">
          <span id="call" hidden>Call Us: {{ $phone }}</span>
          <span class="desktop-none"><i class="fas fa-phone-volume"></i></span>
        </a>
        @endif

        <button class="w-hamburger h-hamburger ml-0 mr-15 md:hidden nav-toggle js-hamburger" aria-labelledby="toggle-navigation">
          <span id="toggle-navigation" hidden>Toggle Navigation</span>
          <span class="block relative w-full h-hamburger"></span>
        </button>

        <nav>
          @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'primary-nav-a w-full md:w-auto nav', 'container' => '']) !!}
          @endif
        </nav>

      </div>
    </div>
  </div>
</div>
