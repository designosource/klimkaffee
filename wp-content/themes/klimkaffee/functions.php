<?php
function wpb_custom_new_menu() {
	register_nav_menus(
		array(
			'main' => __( 'Main' ),
			'footer' => __( 'Footer')
		)
	);
}
add_action( 'init', 'wpb_custom_new_menu' );