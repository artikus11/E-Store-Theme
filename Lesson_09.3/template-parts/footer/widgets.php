<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$widget_footer = carbon_get_theme_option('est_footer_widgets_show');
if (  'on' === $widget_footer) : ?>
	
	
	<div class="container">
		<div class="w3_footer_grids">
			<div class="col-md-3 w3_footer_grid">
				<?php if ( is_active_sidebar('footer-1') ) : ?>
					<?php dynamic_sidebar('footer-1'); ?>
				<?php endif; ?>
			
			</div>
			<div class="col-md-3 w3_footer_grid">
				<?php if ( is_active_sidebar('footer-2') ) : ?>
					<?php dynamic_sidebar('footer-2'); ?>
				<?php endif; ?>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<?php if ( is_active_sidebar('footer-3') ) : ?>
					<?php dynamic_sidebar('footer-3'); ?>
				<?php endif; ?>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<?php if ( is_active_sidebar('footer-4') ) : ?>
					<?php dynamic_sidebar('footer-4'); ?>
				<?php endif; ?>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>

<?php endif; ?>
