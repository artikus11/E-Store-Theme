<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$copy_footer = carbon_get_theme_option('est_footer_copy');
?>
<div class="footer-copy">
	<div class="footer-copy1">
		<div class="footer-copy-pos">
			<a href="#home1" class="scroll"><img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow.png" alt=" " class="img-responsive"/></a>
		</div>
	</div>
	<div class="container">
		<p><?php echo $copy_footer;?></p>
	</div>
</div>
