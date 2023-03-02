<?php
/**
 * Template Name: Virtual Workshops
 */
$workshops = carbon_get_the_post_meta('crb_workshops');
get_header(); ?>

<div class="container"><h1 class="pageTitle_pages"><?php echo wpautop(carbon_get_the_post_meta( 'intro_title' )); ?></h1></div>

<div class="workshop_subheader" style="background-image:url(<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('sub_bg'), 'full' ); ?>)">
  <div class="container">
    <div class="workshop_subheader_top">
      <p class="boldestDinger"><?php echo carbon_get_the_post_meta('sub_title'); ?></p>
      <?php echo wpautop(carbon_get_the_post_meta( 'sub_text' )); ?>
    </div>
    <h1><?php echo carbon_get_the_post_meta('sub_mission'); ?></h1>
  </div>
</div>

<div class="vision_section">
  <div class="container">
    <h1 class="vision_title">Every VisionQuest workshop is built on interactive learning and participant engagement.</h1>
    <div class="visions">
      <div class="vision">
        <div class="vision_image">
          <?php echo wp_oembed_get(carbon_get_the_post_meta('vision_section1_img')); ?>
        </div>
        <p class="boldestDinger"><?php echo carbon_get_the_post_meta('vision_section1_title'); ?></p>
        <p><?php echo carbon_get_the_post_meta('vision_section1_text'); ?></p>
      </div>

      <div class="vision">
        <div class="vision_image" >
          <?php echo wp_oembed_get(carbon_get_the_post_meta('vision_section2_img')); ?>
        </div>
        <p class="boldestDinger"><?php echo carbon_get_the_post_meta('vision_section2_title'); ?></p>
        <p><?php echo carbon_get_the_post_meta('vision_section2_text'); ?></p>
      </div>

      <div class="vision">
        <div class="vision_image">
          <?php echo wp_oembed_get(carbon_get_the_post_meta('vision_section3_img')); ?>
        </div>
        <p class="boldestDinger"><?php echo carbon_get_the_post_meta('vision_section3_title'); ?></p>
        <p><?php echo carbon_get_the_post_meta('vision_section3_text'); ?></p>
      </div>
    </div>
  </div>
</div>

<div class="workshop_section">
  <div class="container">
    <h1 class="workshop_section_title"><?php echo carbon_get_the_post_meta('workshop_section_title'); ?></h1>
    <div class="workshop_section_sub">
      <h2><?php echo carbon_get_the_post_meta('workshop_subtitle'); ?></h2>
      <p><?php echo carbon_get_the_post_meta('workshop_mission'); ?></p>
      <div class="workshop_swipe">
        <p class="boldestDinger">swipe</p>
        <img src="<?php echo get_theme_file_uri('resources/images/arrowLeft.svg') ?>">
      </div>
    </div>
  </div>

  <div class="workshops scroller">

    <?php foreach ( $workshops as $workshop ) : ?>
      <div class="workshop">
        <div class="workshop_title"><?php echo esc_html( $workshop['workshop_title'] ); ?></div>
        <p><?php echo esc_html( $workshop['workshop_text'] ); ?></p>
        <div class="workshop_absolute">
          <a class="workshop_link boldestDinger" target="_blank" href="<?php echo esc_html( $workshop['workshop_media'] ); ?>">download pdf</a>
        </div>
      </div>
    <?php endforeach ?>
    <div class="space"></div>
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
