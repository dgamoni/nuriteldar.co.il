<?php 

//remove_action( 'wp_login', array( $WishListMemberInstance, 'Login' ) );

//add_action( 'wp_login', 'write_time_when_user_logged_in', 10, 2 );
function write_time_when_user_logged_in( $user_login, $user ){
	$url = home_url();
	header("Location:" . $url);
	exit;
}


//add_action( 'init', 'wpa_test' );
function wpa_test() {
    if(isset($_POST['wlm_redirect_to'])) {
        wp_redirect( home_url() );
        header("Location:" . home_url());
        exit;
    }
}

