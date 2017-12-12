<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
wc_print_notices();
?>
<form method="post" class="register">
	<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
		
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
			<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username"
				id="reg_username"
				value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) :
					''; ?>"/><?php // @codingStandardsIgnoreLine ?>
		</p>
	
	<?php endif; ?>
	
	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?> <span
				class="required">*</span></label> <input type="email"
			class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email"
			value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) :
				''; ?>"/><?php // @codingStandardsIgnoreLine ?>
	</p>
	
	<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
		
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
			<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password"
				id="reg_password"/>
		</p>
	
	<?php endif; ?>
	
	<p class="woocommerce-FormRow form-row">
		<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
		<button type="submit" class="woocommerce-Button button" name="register"
			value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
	</p>

</form>
