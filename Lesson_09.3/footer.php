<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estore
 */
?>

</div><!-- #content -->

<?php
/**
 * header_parts hook.
 *
 * @hooked estore_newsletter_callback - 10
 * @hooked estore_footer_start - 15
 * @hooked estore_widgets_callback - 20
 * @hooked estore_copyright_callback - 30
 * @hooked estore_footer_end - 40
 *
 */
do_action( 'est_footer_parts' ); ?>


</div><!-- #page -->

<?php wp_footer(); ?>

</body></html>
