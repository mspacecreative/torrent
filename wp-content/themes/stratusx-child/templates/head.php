<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="alternate" type="application/rss+xml" title="<?php echo sanitize_text_field(get_bloginfo('name')); ?> Feed" href="<?php echo esc_url(home_url('/')); ?>/feed/">
  
  <!--SHARE THIS-->
  <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c7ec0044c495400114fe6ab&product=custom-share-buttons' async='async'></script>
  <!--/ SHARE THIS-->
  
<?php wp_head(); ?>
</head>
