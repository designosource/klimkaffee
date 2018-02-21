<?php
/**
 *
 * @link https://designosource.be
 * @since             1.0.0
 * @package           klimkaffee_clubplanner
 *
 * @wordpress-plugin
 * Plugin Name:       Klimkaffee Clubplanner
 * Plugin URI:        https://designosource.be
 * Description:       Integrate API’s
 * Version:           1.0
 * Author:            Designosource
 * Author URI:         https://designosource.be
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       klimkaffee_clubplanner
 * Domain Path:       /languages
 */

add_action( 'wp_enqueue_scripts', 'klimkaffee_clubplanner' );
function klimkaffee_clubplanner() {
	// enqueue the styles
	wp_enqueue_style( 'klimkaffee-clubplanner-style', plugin_dir_url( __FILE__ ) . 'style.css' );
	// register the script
	wp_register_script( 'klimkaffee-clubplanner-js', plugin_dir_url( __FILE__ ) . 'script.js', [ 'jquery' ] );
	// enqueue the script
	wp_enqueue_script( 'klimkaffee-clubplanner-js' );


}
function elegance_referal_init()
{
	if(is_page('reserveren')){
		$dir = plugin_dir_url( __FILE__ );
		echo file_get_contents($dir."reserveren.php");
		die();
	}
}

add_action( 'wp', 'elegance_referal_init' );
