<?php 

/* Deregister Scripts
 *
 */
function hs_deregister_scripts() {

	// Deregister Typekit
	wp_deregister_script( 'typekit' );
	
}
add_action( 'wp_print_scripts', 'hs_deregister_scripts', 11 );
 ?>