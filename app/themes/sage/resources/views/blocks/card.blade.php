{{--
  Title: Card
  Description:
  Category: brm_blocks
  Icon: image-flip-horizontal
  Keywords: cards
  Mode: edit
  Align: full
  --}}

  @if( class_exists('ACF') )
  @php
  // Define fields
  $card_mbl = get_field('card_image')['sizes']['w960x800'] ?: App\asset_path('images/placeholders/720x594.png');
  $card_dsk = get_field('card_image')['sizes']['w960x800'] ?: App\asset_path('images/placeholders/720x594.png');
  // Background State
  $background_state = !empty(get_field('card_image')) ? 'js-background' : null;

  $card_cnt = get_field('card_content') ?: 'Your Card Content';
  $card_ord = get_field('card_order') === 'default' ? 'flex-col md:flex-row' : 'flex-col-reverse md:flex-row-reverse'
  @endphp
  <div class="section-card--builder flex {{ $card_ord }} md:flex-no-wrap md:items-center md:justify-between w-full brm-card pb-45">
    <div class="card-content w-full md:w-1/2">
      <div class="content--inner">
        {!! $card_cnt !!}
      </div>
    </div>
    <div class="w-full md:w-1/2 py-32 mt-8 md:mt-0 md:py-64 bg-top bg-no-repeat bg-cover card-image js-card {{ $background_state }}" style="background-image: url({{ $card_dsk }})" data-mobile="{{ $card_mbl }}" data-desktop="{{ $card_dsk }}"></div>
  </div>
  @endif
