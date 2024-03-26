<?php

add_shortcode( 'button_track', 'button_track_func' );
function button_track_func( $atts ) {
 
		$button  = '';
	    ob_start(); 

        echo '<div class="button_track_wrap">';
             echo '<div class="button_track_content">';
                if ( is_user_logged_in() ) {

                     $user_id = get_current_user_id();
                     $wpm_levels = new WishListMember;
                     $options = $wpm_levels->GetOption('wpm_levels');

                     if (class_exists('WLMAPI')) {
                        $level = WLMAPI::GetUserLevels($user_id);
                        foreach ($level as $key => $value) {
                            //if($value == 'yeda') {
                                //echo $value;
                                $link = get_permalink(  $options[$key]["loginredirect"] );
                                echo '<a href="'.$link.'" class="custom_login elementor-button-link elementor-button elementor-size-sm" role="button" >
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">'.$value.'</span>
                                        </span>
                                    </a>';
                            //}
                        }
                     }

                } else {
                    
                }
            echo '</div>';    
        echo '</div>';


	    $button = ob_get_contents();
	    ob_end_clean();
    return $button;
}
 
