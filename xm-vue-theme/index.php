<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
  <title><?php bloginfo( 'name' ); ?></title>
  <meta name="key" content="<?php echo get_option('xm_vue_options')['keywords']; ?>">
  <meta name="description" content="<?php echo get_option('xm_vue_options')['description']; ?>">
  <?php if (!empty(get_option('xm_vue_options')['all_head'])) echo get_option('xm_vue_options')['all_head']; ?>
  <link rel="icon" href="<?php echo get_option('xm_vue_options')['favicon']; ?>">
  <?php wp_head(); ?>
  <script src=//at.alicdn.com/t/font_556506_02zrofvxcsug14i.js></script>
</head>
<body>
  <div id="app"></div>
  <?php
    if (!empty(get_option('xm_vue_options')['footer_js'])) echo '<script>' . get_option('xm_vue_options')['footer_js'] . '</script>';
    wp_footer();
  ?>
</body>
</html>