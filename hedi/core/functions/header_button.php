<?php 

add_action( 'astra_masthead_content', 'custom_header_button', 11 ); 
function custom_header_button() {

    ?>
	    <div class="button_header_wrap">
	    	
	    	<?php if( is_user_logged_in()) : ?>
			    <a href="<?php echo home_url('/המסלולים-שלך/'); ?>" class="custom_login_all custom_login_2 elementor-button-link elementor-button elementor-size-sm" role="button" >
			        <span class="elementor-button-content-wrapper">
				        <span class="elementor-button-icon elementor-align-icon-right">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
			            <span class="elementor-button-text">המנוי שלך</span>
			        </span>
			    </a>		    	
		    <?php endif; ?>

		    <a href="<?php echo home_url('/תקשור-בלימוד-עצמי-קורסים/'); ?>" class="custom_login_all custom_login_1 elementor-button-link elementor-button elementor-size-sm" role="button" >
		        <span class="elementor-button-content-wrapper">
		            <span class="elementor-button-text">פיתוח ולימוד עצמי</span>
		        </span>
		    </a>

		</div>

	<?php
   
}