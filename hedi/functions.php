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

// load core functions
require_once get_stylesheet_directory() . '/core/load.php';



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
		.button_track_wrap {
			    min-height: 200px;
		}
		.button_track_content {

		}
		.button_track_wrap .custom_login {
			background-color: #ac3466;
			margin: 20px;
		}
		.page-id-16392 .entry-header {

		}		
	</style>
	<?php
}