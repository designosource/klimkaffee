<?php
/**
 * Plugin Name: Album Looper
 * Plugin URI: https://hifluence.eu
 * Description: This plugin loops albums & images
 * Version: 1.0
 * Author: Stefano Peeters
 * Author URI: https://hifluence.eu
 **/

// gebruiken om files makkelijk in te laden
define( 'PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ));
define( 'PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ));

include PLUGIN_DIR_PATH."incl/options.php";
include PLUGIN_DIR_PATH."incl/shortcode.php";
include PLUGIN_DIR_PATH."incl/extend_acf.php";

function bldrzl_styles_scripts() {
	wp_enqueue_style( 'bldrzl_main_css', PLUGIN_DIR_URL . 'style.css' );
	wp_enqueue_script( 'bldrzl_main_js', PLUGIN_DIR_URL . 'main.js', array( 'jquery' ), '1.0.0', TRUE );
}

add_action( 'wp_enqueue_scripts', 'bldrzl_styles_scripts' );