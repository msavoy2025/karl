<?php

get_header(); ?>



<div class="container loop">

<h1 class="pageTitle"><?php the_title(); ?></h1>

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class( 'article article-single' ); ?>>
		<header class="loop_head">

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="loop_image">
					<?php the_post_thumbnail( 'large' ); ?>
				</div><!-- /.article__image -->
			<?php endif; ?>
		</header><!-- /.article__head -->

		<div class="loop__body">
			<div class="loop_entry">
				<?php the_content(); ?>
			</div><!-- /.article__entry -->
		</div><!-- /.article__body -->
	</article><!-- /.article -->
<?php endwhile; ?>
</div>

<?php get_footer(); ?>
