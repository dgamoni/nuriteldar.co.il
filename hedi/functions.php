<?php
/**
 * hedi Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hedi
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_HEDI_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'hedi-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_HEDI_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );



add_action( 'elementor/widget/render_content', function( $content, $widget ) {
   
   if ( 'login' === $widget->get_name() ) {
	   	$settings = $widget->get_settings();
	   	
	   	if ( is_user_logged_in() ) {

	   		 $user_id = get_current_user_id();
			 $wpm_levels = new WishListMember;
			 $options = $wpm_levels->GetOption('wpm_levels');

	   		 if (class_exists('WLMAPI')) {
	   		 	$level = WLMAPI::GetUserLevels($user_id);
	   		 	foreach ($level as $key => $value) {
	   		 		//if($value == 'yeda') {
	   		 			$link = get_permalink(  $options[$key]["loginredirect"] );
	   		 		//}
	   		 	}
	   		 }

	   		 //$test = '<div style="display:none">'. var_dump(   $link ). '</div>';

	   	   	 $button = '<a href="'.$link.'" class="custom_login elementor-button-link elementor-button elementor-size-sm" role="button" target="_blank">
							<span class="elementor-button-content-wrapper">
								<span class="elementor-button-text">למסלול שלך</span>
							</span>
						</a>';
	   	} else {
	   		$button = '';
	   	}

	$content .= $button;

   }
   
   return $content;
}, 10, 2 );

add_action('wp_footer', 'add_custom_css');
function add_custom_css() { ?>
	<script>
		jQuery(document).ready(function($) {

		});
	</script>
	<style>
		.home.logged-in .elementor-widget-login .elementor-widget-container {
		    display: flex;
		    justify-content: space-between;
		}
		.custom_login.elementor-button.elementor-size-sm {
			padding: 7px 24px;
		}
	</style>
	<?php
}