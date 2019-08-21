/**
 * Insert Class name on WP Ultimo sign up pages for custom styling
 */

add_action('admin_print_footer_scripts', 'registration_steps_insertclass', 10);
function registration_steps_insertclass() { ?>
<script>
	(function($) {
		$(document).ready(function(){
		   $( "theTargetElement" ).addClass( "yourClass" );
  		   $( "theTargetElement2" ).addClass( "yourClass2" );
		});
	})(jQuery)
</script>
<?php
}
