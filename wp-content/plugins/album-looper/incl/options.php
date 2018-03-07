<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 23/02/2018
 * Time: 16:51
 */


function bldrzl_add_options_page() {
	if ( function_exists( 'acf_add_options_page' ) ) {
		// add settings page
		acf_add_options_page(
			array(
				'page_title' => 'Boulderzaal Instellingen',
				'menu_title' => 'Boulderzaal',
				'menu_slug'  => 'theme-general-settings',
				'capability' => 'edit_posts',
				'redirect'   => FALSE,
			) );
	}
}

// add boulderzaal options page
bldrzl_add_options_page();