<?php
add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'lnj_options', 'lnj_theme_options', 'lnj_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Theme Options', 'lnj' ), __( 'Theme Options', 'lnj' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}


 

/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options', 'lnj' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'lnj' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'lnj_options' ); ?>
			<?php $options = get_option( 'lnj_theme_options' ); ?>

			<table class="form-table">
				<tr valign="top"><th scope="row"><?php _e( 'Corporate & Marketing Office', 'lnj' ); ?></th>
					<td>
						 <textarea rows="6" cols="50" id="lnj_theme_options[corporate_marketing_office]" name="lnj_theme_options[corporate_marketing_office]" size="70"><?php echo esc_attr_e($options['corporate_marketing_office']); ?></textarea>						 
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Plant Address', 'lnj' ); ?></th>
					<td>
						 <textarea rows="6" cols="50" id="lnj_theme_options[plant_address]" name="lnj_theme_options[plant_address]" size="70"><?php echo esc_attr_e($options['plant_address']); ?></textarea>						 
					</td>
				</tr>
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'lnj' ); ?>" />
			</p>
		</form>
		<style>
		label.textdesc { 
			font-size: 12px;
			font-style: italic;
			color: #006799;
		}
		</style>
			
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	
	$input['corporate_marketing_office'] = wp_filter_post_kses( $input['corporate_marketing_office'] );
	$input['plant_address'] = wp_filter_post_kses( $input['plant_address'] );
	return $input;
}


