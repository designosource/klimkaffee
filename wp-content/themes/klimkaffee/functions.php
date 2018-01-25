<?php

function wpb_custom_new_menu() {
	register_nav_menus(
		array(
			'main' => __( 'Main' ),
			'boulderen' => __( 'Boulderen' )
		)
	);
}
add_action( 'init', 'wpb_custom_new_menu' );