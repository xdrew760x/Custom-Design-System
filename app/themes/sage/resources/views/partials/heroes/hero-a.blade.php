@php

$content_width = get_field('content_width');

@endphp
<div class="section-brm--hero flex flex-col flex-wrap justify-center bg-center bg-cover bg-no-repeat js-background" style="background-image:url({{ $options['desktop'] }})" data-mobile="{{ $options['mobile'] }}" data-desktop="{{ $options['desktop'] }}">
  <div class="w-full max-w-10xl mx-auto px-buffer py-10 md:py-0 text-white">
    <div class="{{ $content_width === 'w-full' ? 'w-full' : ' w-full md:w-2/3 block mx-auto' }}">
      {!! $options['content'] !!}
    </div>
  </div>
</div>
