<?php
/**
 * Template Name: Consulting
 */
$s_lists = carbon_get_the_post_meta('crb_speaking');
get_header(); ?>

<div class="container"><h1 class="pageTitle_pages"><?php echo wpautop(carbon_get_the_post_meta( 'intro_title' )); ?></h1></div>

<div class="container">
  <div class="consulting_subheader">
    <h2><?php echo carbon_get_the_post_meta( 'speaking_title' ); ?></h2>
    <div class="consulting_subheader_bot">
      <ul class="consulting_subheader_bot_left">
        <?php foreach ( $s_lists as $s_list ) : ?>
          <li class="boldDinger"><?php echo esc_html( $s_list['s_list_text'] ); ?></li>
        <?php endforeach ?>
      </ul>
      <div class="consulting_subheader_bot_right">
        <?php echo wpautop(carbon_get_the_post_meta( 'speaking_text' )); ?>
      </div>
    </div>
  </div>
</div>

<div class="transform_consulting" style="background-image:url(<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('future_img'), 'full' ); ?>)">
  <div class="container">
    <div class="transform_consulting_content">
      <h1><?php echo carbon_get_the_post_meta('future_title'); ?></h1>
      <?php echo wpautop(carbon_get_the_post_meta( 'future_text' )); ?>
    </div>
  </div>
</div>

<div class="shape">
  <div class="container">
    <div class="shape_top">
      <div class="shape_top_left">
        <?php echo wpautop(carbon_get_the_post_meta( 'shape_mission' )); ?>
      </div>
      <div class="shape_top_right">
        <img src="<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('shape_logo'), 'full' ); ?>">
      </div>
    </div>
    <div class="shape_bot">
      <div class="shape_bot_left" style="background-image:url(<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('shape_img'), 'full' ); ?>)"></div>
      <div class="shape_bot_right">
        <h1><?php echo carbon_get_the_post_meta('shape_title'); ?></h1>
        <?php echo wpautop(carbon_get_the_post_meta( 'shape_text' )); ?>
      </div>
    </div>
  </div>
</div>

<div class="workshop_cta">
  <div class="container">
    <h1><?php echo carbon_get_the_post_meta('schedule_title'); ?></h1>
    <h2><?php echo carbon_get_the_post_meta('schedule_sub'); ?></h2>
    <div class="workshop_cta_btn"><a href="/engage"><button class="btn">engage today</button</a></div>
  </div>
</div>

<?php get_footer(); ?>
