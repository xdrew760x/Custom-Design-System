<head>
  <?php if( $tag_manager ): ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-<?php echo $tag_manager; ?>');</script>
    <!-- End Google Tag Manager -->
  <?php endif; ?>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preload" href="<?= App\asset_path('fonts/trade-gothic/trade-gothic-lt.woff'); ?>" as="font" type="font/woff" crossorigin="anonymous">
  <link rel="preload" href="<?= App\asset_path('fonts/trade-gothic/trade-gothic-lt-bold.woff'); ?>" as="font" type="font/woff" crossorigin="anonymous">
  <?php wp_head() ?>
</head>
