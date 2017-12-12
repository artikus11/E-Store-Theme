<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package estore
 */
get_header(); ?>
	<div class="container single-section">
		<div class="w3ls_mobiles_grids">
			<div id="primary" class="content-area col-md-8 w3ls_mobiles_grid_left">
				<main id="main" class="site-main">
					
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_type() );
						the_post_navigation();
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					endwhile; // End of the loop.
					?>
				
				</main><!-- #main -->
			</div><!-- #primary -->
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php
get_footer();
