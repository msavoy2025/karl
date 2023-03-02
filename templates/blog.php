<?php
/**
 * Template Name: Blog
 */

get_header(); ?>

<div class="container"><h1 class="pageTitle"><?php echo wpautop(carbon_get_the_post_meta( 'intro_title' )); ?></h1></div>

<div class="container">
  <div class="subheader">
    <p class="boldestDinger"><?php echo carbon_get_the_post_meta('blog_subtitle'); ?></p>
    <p><?php echo carbon_get_the_post_meta('blog_text'); ?></p>
  </div>
</div>

<div class="blog_slider_outerwrap container">
    <div class="blog_slider_wrap">
        <div class="blog_slider">
            <?php
                $posts = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'post',

                    ));

                while($posts->have_posts()) {
                    $posts->the_post();
            ?>
                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                <div class="blog_slide" style="background:url(<?php echo $url ?>)">
                    <div class="blog_slide_absolute">
                        <a href="<?php the_permalink(); ?>"><div class="blog_slide_title"><?php the_title(); ?></div></a>
                        <a href="<?php the_permalink(); ?>"><p class="boldDinger"><?php echo get_the_date( 'F j, Y' ); ?></p></a>
                    </div>
                    <a href="<?php the_permalink(); ?>"><div class="blog_slide_layer"></div></a>
                </div>
            <?php } ?>
        </div>
    </div>
    <button type="button" id="prev" class="prev_blog" style="background:url(<?php echo get_theme_file_uri('/resources/images/prev_blog.svg') ?>)"></button>
    <button type="button" id="next" class="next_blog" style="background:url(<?php echo get_theme_file_uri('/resources/images/next_blog.svg') ?>)"></button>
</div>

<div class="blog_posts container">
    <?php
        $posts = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'post',
            ));

        while($posts->have_posts()) {
            $posts->the_post();
    ?>

    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
    <a href="<?php the_permalink(); ?>">
      <div class="blog_post">
        <div class="blog_content">
            <div class="blog_content_image" style="background:url(<?php echo $url ?>)"></div>
            <div class="blog_content_text">
                <h2><?php the_title(); ?></h2>
                <p class="boldestDinger"><?php echo get_the_date( 'F j, Y' ); ?></p>
                <p><?php echo wp_trim_words( get_the_content(), 13, '...' ); ?></p>
            </div>
        </div>
      </div>
    </a>
    <?php } ?>
</div>

<?php get_footer(); ?>
