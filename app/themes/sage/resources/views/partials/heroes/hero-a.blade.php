@php

$content_width = get_field('content_width');

@endphp
<div class="section-brm--hero h-hero md:h-hero_mobile flex flex-col flex-wrap justify-center bg-center bg-cover bg-no-repeat js-background" style="background-image:url({{ $options['desktop'] }})" data-mobile="{{ $options['mobile'] }}" data-desktop="{{ $options['desktop'] }}">
  <div class="w-full max-w-10xl mx-auto px-buffer py-10 md:py-0 text-white">
    <div class="{{ $content_width === 'w-full' ? 'w-full' : 'w-1/2' }}">
      {!! $options['content'] !!}
    </div>
  </div>
</div>
