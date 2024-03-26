<?php

add_action( 'elementor/widget/render_content', function( $content, $widget ) {
   
   if ( 'login' === $widget->get_name() ) {
	   	$settings = $widget->get_settings();
	   	
	   	if ( is_user_logged_in() ) {

	   		 $user_id = get_current_user_id();
			 $wpm_levels = new WishListMember;
			 $options = $wpm_levels->GetOption('wpm_levels');
			 //var_dump($options);

	   		 if (class_exists('WLMAPI')) {
	   		 	$level = WLMAPI::GetUserLevels($user_id);
	   		 	//var_dump($level);
	   		 	foreach ($level as $key => $value) {
	   		 		//if($value == 'yeda') {
	   		 			$link = get_permalink(  $options[$key]["loginredirect"] );
	   		 		//}
	   		 	}
	   		 	if ( count($level) > 1 ) {
	   		 		$link = home_url( '/המסלולים-שלך/' );
	   		 	}
	   		 }

	   		 //$test = '<div style="display:none">'. var_dump(   $link ). '</div>';

	   	   	 $button = '<a href="'.$link.'" class="custom_login elementor-button-link elementor-button elementor-size-sm" role="button" >
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