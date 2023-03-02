<?php
get_header();
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
?>

<div class="single_blog container">
  <div class="single_blog_left">
    <h1 class="single_blog_title"><?php the_title(); ?></h1>

    <div class="single_blog_date_author">
      <p class="boldDinger single_blog_date"><?php echo get_the_date( 'F j, Y' ); ?></p>
      <p class="boldDinger single_blog_break">|</p>
      <p class="boldDinger single_blog_author">Author: <?php the_author_meta('display_name', 2); ?></p>
    </div>

    <div class="single_blog_divider"></div>
    <div class="single_blog_image_mobile" style="background:url(<?php echo $url ?>)"></div>
    <div class="single_blog_content"><?php the_content(); ?></div>
  </div>
  <div class="single_blog_right">

    <div class="single_blog_image" style="background:url(<?php echo $url ?>)"></div>
    <div class="single_blog_share">
      <p class="boldestDinger">Share:</p>
      <script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script><p><a class="dinker" href="http://www.facebook.com/share.php?u=<url>" onclick="return fbs_click()" target="_blank">Facebook</a></p>
      <p><a class="dinker" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=Check%20Out%20This%20Post%20From%20Karl%20Schoemer&amp;source=<?php the_permalink(); ?>" rel="noreferrer">Linkedin</a></p>
      <p><a class="dinker" target="_blank" href="http://twitter.com/share?text=Check%20Out%20This%20Post%20From%20Karl%20Schoemer&amp;url=<?php the_permalink(); ?>&amp;hashtags=karlschoemer" rel="noreferrer">Twitter</a></p>
    </div>
  </div>
</div>

<div class="single_blog_extra_stories">
  <h1 class="container">More Stories.</h1>
  <div class="blog_slider_outerwrap container">
      <div class="blog_slider_wrap">
          <div class="blog_slider">
              <?php
                  $posts = new WP_Query(array(
                      'posts_per_page' => -1,
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
</div>
<?php get_footer(); ?>
