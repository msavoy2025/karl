<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_theme_file_uri('/resources/images/logo_icon.png'); ?>" type="image/x-icon">
<title>Karl Schoemer</title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="container">
    <header>
      <div class="logo">
        <div class="logo-image"><a href="/"><img src="<?php echo get_theme_file_uri('/resources/images/logo.svg'); ?>"></a></div>
      </div>
      <div class="navWrap">
        <div class="mobile-close"><img src="<?php echo get_theme_file_uri('/resources/images/close.svg'); ?>"></div>
        <?php
          wp_nav_menu( array(
            'theme_location' => 'header-menu',
            'container_class' => 'nav' ) );
        ?>
      </div>
      <div class="mobile-open"><img src="<?php echo get_theme_file_uri('/resources/images/hamburger.svg'); ?>"></div>
    </header>
  </div>
