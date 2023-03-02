<?php
/**
 * Template Name: Front Page
 */

$videoURL = carbon_get_the_post_meta('video_embed');
$solutions = carbon_get_the_post_meta('crb_solutions');
$flows = carbon_get_the_post_meta('crb_flow');
$cases = carbon_get_theme_option('crb_studies');
$affiliates = carbon_get_the_post_meta('crb_affiliates');
$testimonials = carbon_get_the_post_meta('crb_testimonials');

get_header(); ?>

<div class="container"><h1 class="pageTitle"><?php echo wpautop(carbon_get_the_post_meta( 'intro_title' )); ?></h1></div>

<div class="textFlow" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/waterFlow.svg'); ?>)">
  <div class="container" id="panel">
    <div class="textFlow_top">
      <p class="boldestDinger"><?php echo carbon_get_the_post_meta('flow_section_text_left'); ?></p>
      <p class="textFlow_top_content"><?php echo carbon_get_the_post_meta('flow_section_text_right'); ?></p>
    </div>
    <div class="textFlow_meet">
      <div class="textFlow_meet_img"><img src="<?php echo get_theme_file_uri('/resources/images/karlEllipse.svg'); ?>"></div>
      <a href="#video_section">
        <div class="textFlow_meet_content">
          <p class="boldDinger">meet karl schoemer</p>
          <div class="textFlow_meet_content_absolute"></div>
        </div>
      </a>
    </div>
  </div>

  <ul class="textFlow_slider">
    <?php foreach ( $flows as $flow ) : ?>
      <li class="textFlow_slide"><?php echo esc_html( $flow['flow_text'] ); ?></li>
    <?php endforeach ?>
  </ul>
</div>

<div class="container">
  <div class="counterSection">
    <div class="counterSection_top">
      <h2><?php echo carbon_get_the_post_meta('counter_title'); ?></h2>
    </div>
    <div class="counterSection_bottom">
      <div class="counters">

        <div class="counter">
          <div class="number" data-count="<?php echo carbon_get_the_post_meta('counter_books'); ?>">0</div>
          <p class="boldDinger"><span class="bold">Books</span> </br>
          Authored.</p>
        </div>

        <div class="counter">
          <div class="number" data-count="<?php echo carbon_get_the_post_meta('counter_travel'); ?>">0</div>
          <p class="boldDinger"><span class="bold">Continents</span> </br>
          Traveled.</p>
        </div>

        <div class="counter">
          <div class="number" data-count="<?php echo carbon_get_the_post_meta('counter_years'); ?>">0</div>
          <p class="boldDinger"><span class="bold">Years</span> in </br>
          Change Leadership.</p>
        </div>

      </div>

      <div class="counterSection_bottom_right">
        <div class="counterSection_bottom_image" style="background-image:url(<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('counter_image'), 'full' ); ?>)">

        </div>
        <p class="boldDinger">karl schoemer</p>
      </div>

    </div>
  </div>
</div>

<div id="video_section" class="video_section" style="background-image:url(<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('video_bg'), 'full' ); ?>)">
  <div class="container">
    <h2 class="videoText"><?php echo carbon_get_the_post_meta('video_text'); ?></h2>
    <div class="videoPlay">
      <div class="play"><img src="<?php echo get_theme_file_uri('/resources/images/play.svg') ?>"></div>
      <p class="boldestDinger"><?php echo carbon_get_the_post_meta( 'video_playbtn' ); ?></p>
    </div>
    <div class="videoWrap">
      <div class="video_close"><img src="<?php echo get_theme_file_uri('/resources/images/close.svg'); ?>"></div>
      <div class="video">
        <?php echo wp_oembed_get($videoURL); ?>
      </div>
    </div>
  </div>
</div>


<div class="solutions_section">
  <div class="container">
    <h1 class="solutions_header">Solutions tailored to your specific audience, specific challenges, & specific objectives.</h1>
    <div class="solutions">
      <?php foreach ( $solutions as $solution ) : ?>
        <h2 class="solution"><?php echo esc_html( $solution['solution_text'] ); ?></h2>
      <?php endforeach ?>
    </div>
    <div class="solutions_btn">
      <a class="btn" href="/impact">explore impact</a>
    </div>
  </div>
</div>

<div class="empower_section" style="background-image:url(<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('empower_bg'), 'full' ); ?>)">
  <div class="container">
    <p class="boldestDinger"><?php echo carbon_get_the_post_meta('empower_tagline'); ?></p>
    <h1><?php echo carbon_get_the_post_meta('empower_mission'); ?></h1>
    <p class="empower_text"><?php echo carbon_get_the_post_meta('empower_text'); ?></p>
  </div>
</div>

<div class="container">
  <div class="transform">
    <div class="transformLeft">
      <h1 class="transform_title"><?php echo carbon_get_the_post_meta('transform_title'); ?></h1>
      <h2 class="transform_subtitle"><?php echo carbon_get_the_post_meta('transform_sub'); ?></h2>
      <div class="transform_logo"><img src="<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('transform_logo'), 'full' ); ?>"></div>
      <div class="transform_text">
        <p class="transform_textblock1"><?php echo carbon_get_the_post_meta('transform_block1'); ?></p>
        <p class="transform_textblock2"><?php echo carbon_get_the_post_meta('transform_block2'); ?></p>
      </div>
      <div class="transform_btn transform_desktopBtn"><a class="btn" href="/manifesto"><?php echo carbon_get_the_post_meta('transform_btn'); ?></a></div>
    </div>

    <div class="transform_right">
      <div class="transform_image" style="background-image:url(<?php echo wp_get_attachment_image_url( carbon_get_the_post_meta('transform_bg'), 'full' ); ?>)"></div>
      <div class="transform_btn transform_mobileBtn"><a class="btn" href="/manifesto"><?php echo carbon_get_the_post_meta('transform_btn'); ?></a></div>
    </div>
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

<div class="testimonial_section">
  <div class="container">
    <h1 class="testimonial_section_title"><?php echo carbon_get_the_post_meta('testimonial_title'); ?></h1>
    <div class="affiliates">
      <?php foreach ( $affiliates as $affiliate ) : ?>
        <div class="affiliate_img"><img src="<?php echo wp_get_attachment_image_url( $affiliate['affiliate_image'], 'full' ); ?>"></div>
      <?php endforeach ?>
      <div class="space"></div>
    </div>
    <div class="testimonials">
      <?php foreach ( $testimonials as $testimonial ) : ?>
        <div class="testimonial">
          <div class="testimonial_text"><?php echo wpautop( $testimonial['testimonial_text'] ); ?></div>
          <p class="testimonial_name boldestDinger"><?php echo esc_html( $testimonial['testimonial_name'] ); ?></p>
          <p class="testimonial_role boldDinger"><?php echo esc_html( $testimonial['testimonial_role'] ); ?></p>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>

<div class="schedule_section">
  <div class="container">
    <h1><?php echo carbon_get_the_post_meta('schedule_title'); ?></h1>
    <h2><?php echo carbon_get_the_post_meta('schedule_sub'); ?></h2>
    <div class="workshop_cta_btn"><a href="/engage"><button class="btn">engage today</button></a></div>
  </div>
</div>

<?php get_footer(); ?>
