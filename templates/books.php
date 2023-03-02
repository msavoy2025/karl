<?php
/**
 * Template Name: Featured Books
 */

get_header(); ?>

<div class="container"><h1 class="pageTitle"><?php echo wpautop(carbon_get_the_post_meta( 'intro_title' )); ?></h1></div>


<?php get_footer(); ?>
