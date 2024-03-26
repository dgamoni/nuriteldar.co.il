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
		.button_track_wrap .custom_login.elementor-button.elementor-size-sm {
			padding: 12px 24px;
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
		.button_header_wrap {
			position: absolute;
		    left: 15px;
		    top: 0;
		        display: flex;
		}
		.main-header-bar-navigation {
		    line-height: 40px;
		}
		.ast-flex.main-header-container	{
		    -webkit-box-align: flex-end;
		    -webkit-align-items: flex-end;
		    -moz-box-align: flex-end;
		    -ms-flex-align: flex-end;
		    align-items: flex-end;			
		}
		.ast-sticky-active .button_header_wrap {
		    top: -13px;
		}
		.ast-sticky-main-shrink .ast-sticky-shrunk.main-header-bar.ast-sticky-active {
			padding-top: 18px;
		}
		.elementor-button.elementor-size-sm.custom_login_all {
			border-radius: 10px;
			 margin-right: 18px;
			-webkit-box-shadow: 0px 3px 5px -2px rgb(76, 76, 76);
			-moz-box-shadow: 0px 3px 5px -2px rgb(76, 76, 76);
			box-shadow: 0px 3px 5px -2px rgb(76, 76, 76);			        
		    border-width: 1px 1px 0 1px;
    		border: 1px solid white;
    		font-size: 18px;
		}
		.elementor-button.elementor-size-sm.custom_login_1 {
			    background-color: #c51529;
		}				
		.elementor-button.elementor-size-sm.custom_login_2 {
			    background-color: #b53468;
		} 
		.ast-sticky-active .elementor-button.elementor-size-sm.custom_login_all {
			padding: 7px 24px;
			    font-size: 15px;
		}
		.button_header_wrap .elementor-button .elementor-align-icon-right {
		    margin-left: 11px;
		}
		.entry-content h2 a.custom_login {
			color: white;
		}
		@media only screen and (max-width: 1145px) {
			.ast-flex.main-header-container {
				padding-bottom: 50px;
			}
			.button_header_wrap {
			    display: flex;
			    bottom: -4px;
			    width: 100%;
			    justify-content: center;
			        top: inherit;

			}			
		}
		@media only screen and (max-width: 398px) {
			.elementor-button.elementor-size-sm.custom_login_all {
				    padding: 12px 8px;
				    margin-right: 8px;
			}
			.button_header_wrap {
    			left: 0;
    		}
		}		
	</style>
	<?php
}