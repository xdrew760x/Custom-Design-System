
<section id="{{ $block['keywords'][0] }}" class="w-full brm-hero" role="region" aria-label="Hero">
  @if( get_field('hero_mp4_video_file') && get_field('hero_video_webm_file') )
  <section class="section-brm--hero hero--video has-video relative">
    <video class="hero__video" preload="auto" autoplay loop muted playsinline>
      <source src="{!! get_field('hero_mp4_video_file') !!}" type="video/mp4"/>
      <source src="{{ get_field('hero_video_webm_file') }}" type="video/webm"/>
    </video>

    @php
    $hero_message = get_field('hero_content');
    $content_width = get_field('content_width');
    $content_position = get_field('content_position');
    $max_height = get_field('hero_height');

    //Animation
    $hero_animation = get_field('hero_animation');
    @endphp
    <div class="hero_content text-white mx-auto block {{ $content_width === 'w-full' ? 'w-full' : ' w-full md:w-1/2' }} {{ $content_position === 'ml-0' ? 'ml-0' : 'full' }} {{ $content_position === 'mr-0' ? 'mr-0' : 'full' }}" style="max-height: {!! $max_height !!}px;">
      <div class="hero_content--container container @if(!is_admin()){!! $hero_animation !!}@endif">
        {!! $options['content'] !!}
      </div>
    </div>
  </section>
  @endif
</section>
