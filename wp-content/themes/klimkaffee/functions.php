<?php
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

function wpb_custom_new_menu() {
	register_nav_menus(
		array(
			'main' => __( 'Main' ),
			'footer' => __( 'Footer')
		)
	);
}
add_action( 'init', 'wpb_custom_new_menu' );
add_theme_support( 'post-thumbnails' );