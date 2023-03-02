<?php
/**
 * Template Name: Speaking
 */
$speaking_videoURL = carbon_get_the_post_meta('speaking_video_embed');
$topics = carbon_get_the_post_meta('crb_topics');
$s_lists = carbon_get_the_post_meta('crb_speaking');
get_header(); ?>

<div class="container"><h1 class="pageTitle_pages"><?php echo wpautop(carbon_get_the_post_meta( 'intro_title' )); ?></h1></div>

<div class="container">
  <div class="consulting_subheader">
    <h2><?php echo carbon_get_the_post_meta( 'speaking_title' ); ?></h2>
    <div class="consulting_subheader_bot">
      <div class="consulting_subheader_bot_right">
        <?php echo wpautop(carbon_get_the_post_meta( 'speaking_text' )); ?>
      </div>
      <ul class="consulting_subheader_bot_left">

        <?php foreach ( $s_lists as $s_list ) : ?>
          <li class="boldDinger"><?php echo esc_html( $s_list['s_list_text'] ); ?></li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>
</div>

<div class="video_section speaking_video_section" style="background-image:url(<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('speaking_video_bg'), 'full' ); ?>)">
  <div class="container">
    <div class="speaking_videoPlay">
      <p class="boldestDinger"><?php echo carbon_get_the_post_meta( 'speaking_video_playbtn' ); ?></p>
      <div class="play"><img src="<?php echo get_theme_file_uri('/resources/images/play.svg') ?>"></div>
    </div>
    <div class="videoWrap">
      <div class="video_close"><img src="<?php echo get_theme_file_uri('/resources/images/close.svg'); ?>"></div>
      <div class="video">
        <?php echo wp_oembed_get($speaking_videoURL); ?>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="innovative">
    <h1 class="innovative_title"><?php echo carbon_get_the_post_meta( 'innovative_title' ); ?></h1>
    <div class="technique technique_first">
      <p class="boldestDinger"><?php echo carbon_get_the_post_meta( 'innovative_section1_title' ); ?></p>
      <p><?php echo carbon_get_the_post_meta( 'innovative_section1_text' ); ?></p>
    </div>
    <div class="technique_image technique_image_mobile" style="background-image:url(<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('innovative_img'), 'full' ); ?>)"></div>
    <div class="technique_flex">
      <div class="technique">
        <p class="boldestDinger"><?php echo carbon_get_the_post_meta( 'innovative_section2_title' ); ?></p>
        <p><?php echo carbon_get_the_post_meta( 'innovative_section1_text' ); ?></p>
      </div>
      <div class="technique">
        <p class="boldestDinger"><?php echo carbon_get_the_post_meta( 'innovative_section3_title' ); ?></p>
        <p><?php echo carbon_get_the_post_meta( 'innovative_section1_text' ); ?></p>
      </div>
    </div>
    <div class="technique_flex">
      <div class="technique">
        <p class="boldestDinger"><?php echo carbon_get_the_post_meta( 'innovative_section4_title' ); ?></p>
        <div><?php echo wpautop(carbon_get_the_post_meta( 'innovative_section4_text' )); ?></div>

      </div>
      <div class="technique_image technique_image_desktop" style="background-image:url(<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('innovative_img'), 'full' ); ?>)"></div>
    </div>
  </div>
</div>

<div class="topics_section">
  <div class="container">
    <h1 class="topics_section_title"><?php echo carbon_get_the_post_meta( 'topic_section_title' ); ?></h1>

    <div class="topics_text">
      <div class=topic_text>
        <p class="boldDinger"><?php echo carbon_get_the_post_meta( 'topic_section1_title' ); ?></p>
        <p><?php echo carbon_get_the_post_meta( 'topic_section1_text' ); ?></p>
      </div>
      <div class=topic_text>
        <p class="boldDinger"><?php echo carbon_get_the_post_meta( 'topic_section2_title' ); ?></p>
        <p><?php echo carbon_get_the_post_meta( 'topic_section2_text' ); ?></p>
      </div>
      <div class=topic_text>
        <p class="boldDinger"><?php echo carbon_get_the_post_meta( 'topic_section3_title' ); ?></p>
        <p><?php echo carbon_get_the_post_meta( 'topic_section3_text' ); ?></p>
      </div>
      <div class="workshop_swipe">
        <p class="boldestDinger">swipe</p>
        <img src="<?php echo get_theme_file_uri('resources/images/arrowLeft.svg') ?>">
      </div>
    </div>
  </div>

  <div class="topics scroller">
    <?php foreach ( $topics as $topic ) : ?>
      <div class="topic topic_closeButton" style="background-image:url(<?php echo wp_get_attachment_image_url( $topic['topic_bg'], 'full' ); ?>)">
        <div class="topic_innerWrap">
          <div class="play_topic"><img src="<?php echo get_theme_file_uri('/resources/images/play.svg') ?>"></div>
          <div class="topic_title boldestDinger"><?php echo esc_html( $topic['topic_title'] ); ?></div>
          <div class="videoWrap_topic">
            <div class="video_close_topic"><img src="<?php echo get_theme_file_uri('/resources/images/close.svg'); ?>"></div>
            <div class="video_topic">
              <?php echo wp_oembed_get($topic['topic_video_embed']); ?>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  <div class="space"></div>
  </div>
</div>

<div class="workshop_cta impact_cta">
  <div class="container">
    <h1><?php echo carbon_get_the_post_meta('schedule_title'); ?></h1>
    <h2><?php echo carbon_get_the_post_meta('schedule_sub'); ?></h2>
    <div class="workshop_cta_btn"><a href="/engage"><button class="btn">engage today</button></a></div>
  </div>
</div>

<?php get_footer(); ?>
