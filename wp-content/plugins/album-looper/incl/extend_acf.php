<?php

// allow new acf-json entry point
add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' );

function my_acf_json_load_point( $paths ) {

	// remove original path (optioneel)
	//unset( $paths[0] );

	// append path
	$paths[] = PLUGIN_DIR_PATH . 'acf-json';

	// return
	return $paths;
}