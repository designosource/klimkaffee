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

   /* if(is_page('boek-les')) {
        require('boek.php');
        die();
    }

	if(is_page('reserveren')) {
		require('reserveren.php');
		die();
	}*/
}

add_action( 'wp', 'elegance_referal_init' );


// HIER IS STEFANO's CODE: VIA CURL
// 
add_shortcode( 'boek-shortcode', 'boek_shortcode_functionality' );
function boek_shortcode_functionality( $atts ) {
	ob_start();
	$token = "\$kl1mc@ff00";

	//setup the request, you can also use CURLOPT_URL
	$ch =
		curl_init(
			'https://klimcaffee.clubplanner.be/api/planner/addReservation?memberid=1&itemid=5&quanty=1&logtype=type&from=1&token=' .
			$token );

// Returns the data/output as a string instead of raw data
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, TRUE );

// Good practice to let people know who's accessing their servers. See https://en.wikipedia.org/wiki/User_agent
//	curl_setopt( $ch, CURLOPT_USERAGENT, 'YourScript/0.1 (contact@email)' );

//Set your auth headers
	curl_setopt(
		$ch, CURLOPT_HTTPHEADER, array(
		'Content-Type: application/json',
		'Authorization: Bearer ' . $token,
	) );

// get stringified data/output. See CURLOPT_RETURNTRANSFER
	$data = curl_exec( $ch );

// get info about the request
	$info = curl_getinfo( $ch );

// close curl resource to free up system resources
	curl_close( $ch );
	$data = json_decode( $data );

	return print_r( $data );
}

