<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
		
			<?php
				get_template_part( 'template-parts/content' );
			?>

		<?php endwhile; // End of the loop. ?>
			<?php the_posts_navigation(); ?>
			
		</article>
			
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>

<?php get_footer(); ?>
