<?php
/**
 * Template Name: Полная ширина
 */

get_header(); ?>
	<div class="container single-section">
		<div class="w3ls_mobiles_grids">
			<div id="primary" class="content-area col-md-12 w3ls_mobiles_grid_left">
				<main id="main" class="site-main">

					<?php

					while ( have_posts() ) : the_post();?>

						<div class="row">
						<?php if ( is_order_received_page() ) :?>
							<div class="col-md-6 col-md-offset-3">
								<?php endif; ?>
						<?php if ( is_wc_endpoint_url('lost-password') ) :?>
							<div class="col-md-5 col-md-offset-4">
								<?php endif; ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<header class="entry-header">
										<?php the_title( '<h1 class="entry-title margin-bottom-md">', '</h1>' ); ?>
									</header><!-- .entry-header -->

									<div class="entry-content">
										<?php

										the_content();
										?>
									</div><!-- .entry-content -->

								</article><!-- #post-<?php the_ID(); ?> -->
								<?php

						if ( is_order_received_page() ) :
							?>
							</div>
						</div>
						<?php endif;
					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
<?php

get_footer();
