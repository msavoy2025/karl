<?php
/**
 * Template Name: Engage
 */

get_header(); ?>

<div class="container"><h1 class="pageTitle_pages"><?php echo wpautop(carbon_get_the_post_meta( 'intro_title' )); ?></h1></div>

<div class="container">
  <div class="subheader">
    <p class="boldestDinger"><?php echo carbon_get_the_post_meta('engage_subtitle'); ?></p>
    <p><?php echo carbon_get_the_post_meta('engage_text'); ?> <span class="boldestDinger">–  Karl Schoemer</span></p>
  </div>
</div>

<div class="engage_calendly" style="background-image:url(<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('calendly_bg'), 'full' ); ?>);">
  <div class="engage_absolute" style="background-image:url(<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('calendly_bg'), 'full' ); ?>);"></div>
  <div class="container">
    <div class="engage">
      <div class="engageLeft">
        <h2><?php echo carbon_get_the_post_meta('calendly_section_title'); ?></h2>
        <p class="engageText"><?php echo carbon_get_the_post_meta('calendly_subtitle'); ?></p>
        <div class="engage_contact">
          <p class="boldestDinger engage_email">Email</p>
          <a href="mailto:<?php echo carbon_get_the_post_meta('calendly_email'); ?>"><p class="semibold"><?php echo carbon_get_the_post_meta('calendly_email'); ?></p></a>
          <p class="boldestDinger engage_phone">Phone</p>
          <a href="tel:<?php echo carbon_get_the_post_meta('calendly_phone'); ?>"><p class="semibold"><?php echo carbon_get_the_post_meta('calendly_phone'); ?></p></a>
        </div>
      </div>
      <div class="engageRight">
        <?php echo wpautop(carbon_get_the_post_meta( 'calendly_script' )); ?>
      </div>

    </div>
  </div>
</div>

<?php get_footer(); ?>
