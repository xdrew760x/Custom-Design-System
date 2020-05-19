@php

$content_width = get_field('content_width');
$community_title = get_field('community_title');
$community_street_address= get_field('community_street_address');
$community_city_name = get_field('community_city_name');
$community_state = get_field('community_state');
$community_zipcode = get_field('community_zipcode');

$webiste_url = get_field('webiste_url');
$homes_for_sale_url = get_field('homes_for_sale_url');
$community_telephone = get_field('community_telephone');
@endphp

<div class="section-brm--hero community--hero flex flex-col flex-wrap justify-center bg-center bg-cover bg-no-repeat js-background" style="background-image:url({{ $options['desktop'] }})" data-mobile="{{ $options['mobile'] }}" data-desktop="{{ $options['desktop'] }}">
  <div class="container">
    <div class="hero-community-content bg-white">
      <h3>{!! $community_title !!}</h3>
      @if($community_street_address)
      <p><a href="https://www.google.com/maps/place/{!! $community_street_address !!}+{!! $community_city_name !!}+{!! $community_state !!}+{!! $community_zipcode !!}">{!! $community_street_address !!}<br>
      {!! $community_city_name !!}, {!! $community_state !!} {!! $community_zipcode !!}</a></p>
      @endif
      @if($homes_for_sale_url)
      <a href="{!! $homes_for_sale_url !!}" class="flex items-center"><img src="/app/themes/sage/resources/assets/images/home-alt.svg" class="mr-2">View Available Homes</a>
      @endif
      @if($webiste_url)
      <a href="{!! $webiste_url !!}" class="flex items-center"><img src="/app/themes/sage/resources/assets/images/external-link.svg" class="mr-2">View Website</a>
      @endif
      @if($community_telephone)
      <a href="tel:{!! $community_telephone !!}" class="flex items-center"><img src="/app/themes/sage/resources/assets/images/phone-office.svg" class="mr-2">{!! $community_telephone !!}</a>
      @endif
    </div>
  </div>
</div>
