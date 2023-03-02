<?php
/**
 * Template Name: Impact
 */
$cases = carbon_get_theme_option('crb_studies');
$bm_lists = carbon_get_the_post_meta('crb_bm_list');
$bm_imgs = carbon_get_the_post_meta('crb_bm_images');
$hc_lists = carbon_get_the_post_meta('crb_hc_list');
$hc_imgs = carbon_get_the_post_meta('crb_hc_images');
$it_imgs = carbon_get_the_post_meta('crb_it_images');
$np_imgs = carbon_get_the_post_meta('crb_np_images');
$rg_imgs = carbon_get_the_post_meta('crb_rg_images');

get_header(); ?>

<div class="container"><h1 class="pageTitle_pages"><?php echo wpautop(carbon_get_the_post_meta( 'intro_title' )); ?></h1></div>

<div class="workshop_subheader" style="background-image:url(<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('sub_bg'), 'full' ); ?>)">
  <div class="container">
    <div class="workshop_subheader_top">
      <p  class="boldestDinger"><?php echo carbon_get_the_post_meta('sub_title'); ?></p>
      <div class="workshop_subheader_top_text">
        <?php echo wpautop(carbon_get_the_post_meta( 'sub_text' )); ?>
      </div>
    </div>
    <h1><?php echo carbon_get_the_post_meta('sub_mission'); ?></h1>
  </div>
</div>

<div class="affiliates_section">
  <div class="container">
    <h1 class="affiliates_section_title"><?php echo carbon_get_the_post_meta('bm_section_title'); ?></h1>
    <h2 class="affiliates_section_subtitle"><?php echo carbon_get_the_post_meta('bm_subtitle'); ?></h2>
    <div class="affiliates">
      <?php foreach ( $bm_imgs as $bm_img ) : ?>
        <div class="affiliate_img"><img src="<?php echo wp_get_attachment_image_url( $bm_img['bm_img'], 'full' ); ?>"></div>
      <?php endforeach ?>
      <div class="space"></div>
    </div>
    <ul class="affiliates_extra">
      <?php foreach ( $bm_lists as $bm_list ) : ?>
        <li class="boldDinger"><?php echo esc_html( $bm_list['bm_list_title'] ); ?></li>
      <?php endforeach ?>
    </ul>
  </div>
</div>

<div class="affiliates_section affiliates_topBorder">
  <div class="container">
    <h1 class="affiliates_section_title"><?php echo carbon_get_the_post_meta('hc_section_title'); ?></h1>
    <h2 class="affiliates_section_subtitle"><?php echo carbon_get_the_post_meta('hc_subtitle'); ?></h2>
    <div class="affiliates">
      <?php foreach ( $hc_imgs as $hc_img ) : ?>
        <div class="affiliate_img"><img src="<?php echo wp_get_attachment_image_url( $hc_img['hc_img'], 'full' ); ?>"></div>
      <?php endforeach ?>
      <div class="space"></div>
    </div>
    <ul class="affiliates_extra">
      <?php foreach ( $hc_lists as $hc_list ) : ?>
        <li class="boldDinger"><?php echo esc_html( $hc_list['hc_list_title'] ); ?></li>
      <?php endforeach ?>
    </ul>
  </div>
</div>

<div class="affiliates_section affiliates_topBorder">
  <div class="container">
    <h1 class="affiliates_section_title"><?php echo carbon_get_the_post_meta('it_section_title'); ?></h1>
    <h2 class="affiliates_section_subtitle"><?php echo carbon_get_the_post_meta('it_subtitle'); ?></h2>
    <div class="affiliates affiliates_noExtra">
      <?php foreach ( $it_imgs as $it_img ) : ?>
        <div class="affiliate_img"><img src="<?php echo wp_get_attachment_image_url( $it_img['it_img'], 'full' ); ?>"></div>
      <?php endforeach ?>
      <div class="space"></div>
    </div>
  </div>
</div>

<div class="affiliates_section affiliates_topBorder">
  <div class="container">
    <h1 class="affiliates_section_title"><?php echo carbon_get_the_post_meta('np_section_title'); ?></h1>
    <h2 class="affiliates_section_subtitle"><?php echo carbon_get_the_post_meta('np_subtitle'); ?></h2>
    <div class="affiliates affiliates_noExtra">
      <?php foreach ( $np_imgs as $np_img ) : ?>
        <div class="affiliate_img"><img src="<?php echo wp_get_attachment_image_url( $np_img['np_img'], 'full' ); ?>"></div>
      <?php endforeach ?>
      <div class="space"></div>
    </div>
  </div>
</div>

<div class="affiliates_section affiliates_topBorder">
  <div class="container">
    <h1 class="affiliates_section_title"><?php echo carbon_get_the_post_meta('rg_section_title'); ?></h1>
    <h2 class="affiliates_section_subtitle"><?php echo carbon_get_the_post_meta('rg_subtitle'); ?></h2>
    <div class="affiliates affiliates_noExtra">
      <?php foreach ( $rg_imgs as $rg_img ) : ?>
        <div class="affiliate_img"><img src="<?php echo wp_get_attachment_image_url( $rg_img['rg_img'], 'full' ); ?>"></div>
      <?php endforeach ?>
      <div class="space"></div>
    </div>
  </div>
</div>

<div class="workshop_cta impact_cta">
  <div class="container">
    <h1><?php echo carbon_get_the_post_meta('schedule_title'); ?></h1>
    <h2><?php echo carbon_get_the_post_meta('schedule_sub'); ?></h2>
    <div class="workshop_cta_btn"><a href="/engage"><button class="btn">engage today</button></a></div>
  </div>
</div>

<div class="studies_section" style="background-image:url(<?php echo wp_get_attachment_image_url( carbon_get_theme_option('adapt_bg'), 'full' ); ?>)">
  <div class="container">
    <p class="boldestDinger caseOpener">case studies</p>
    <h1 class="studies_title"><?php echo carbon_get_theme_option('adapt_title'); ?></h1>
    <h2><?php echo carbon_get_theme_option('adapt_sub'); ?></h2>
    <p class="studies_text"><?php echo carbon_get_theme_option('adapt_text'); ?></p>
    <div class="studies_swipe">
      <p class="boldestDinger">swipe</p>
      <img src="<?php echo get_theme_file_uri('resources/images/arrowLeft.svg') ?>">
    </div>
  </div>
    <div class="studies_wrap">
      <div class="studies scroller">
        <?php foreach ( $cases as $case ) : ?>
          <div class="study">
            <div class="study_text"><?php echo esc_html( $case['case_text'] ); ?></div>
            <div class="study_img"><img src="<?php echo wp_get_attachment_image_url( $case['case_image'], 'full' ); ?>"></div>
            <a class="study_link" href="<?php echo esc_html( $case['case_link'] ); ?>"><p class="boldestDinger">view case study</p></a>
          </div>
        <?php endforeach ?>
          <div class="space"></div>
      </div>
    </div>
</div>

<?php get_footer(); ?>
