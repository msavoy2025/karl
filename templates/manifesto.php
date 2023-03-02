<?php
/**
 * Template Name: Manifesto
 */

$manifestos = carbon_get_the_post_meta('crb_manifesto');

get_header(); ?>

<div class="container">
  <div class="manifesto_header">
    <h1><?php echo carbon_get_the_post_meta( 'intro_title' ); ?></h1>
    <p>Connect With Me:<span><a class="boldestDinger" href="https://www.linkedin.com/company/visionquest-solutions/">Linked In</a></span></p>
  </div>
</div>

<div class="manifesto_sliderWrap" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/manifestoBG.png') ?>);">
  <div class="container">
    <div class="manifesto_prev" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/slider_arrow.svg') ?>);"></div>
    <div class="manifesto_next" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/slider_arrow_right.svg') ?>);"></div>
    <div class="manifesto_slider">
      <?php foreach ( $manifestos as $manifesto ) : ?>
        <div class="manifesto">
          <div class="manifesto_img" style="background-image:url(<?php echo wp_get_attachment_image_url( $manifesto['manifesto_img'], 'full' ); ?>);"></div>
          <div class="manifesto_title">I believe...</div>
          <h2 class="manifesto_description"><?php echo esc_html( $manifesto['manifesto_text'] ); ?></h2>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>
