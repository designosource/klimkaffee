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

add_action('wp_enqueue_scripts', 'klimkaffee_clubplanner');
function klimkaffee_clubplanner()
{
    // enqueue the styles
    wp_enqueue_style('klimkaffee-clubplanner-style', plugin_dir_url(__FILE__) . 'style.css');
    // register the script
    wp_register_script('klimkaffee-clubplanner-js', plugin_dir_url(__FILE__) . 'script.js', ['jquery']);
    // enqueue the script
    wp_enqueue_script('klimkaffee-clubplanner-js');
}

// HIER IS STEFANO's CODE: VIA CURL
// 
add_shortcode('registerview', 'register_view');
define('API_BASE', 'https://klimcaffee.clubplanner.be/api/');
define('TOKEN', "\$kl1mc@ff00");

function register_view($attr)
{
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        ob_start();
        $ch = curl_init(API_BASE . 'member/addmember?firstname=' . $_POST["firstname"] . '&lastname=' . $_POST["lastname"] . '&email=' . $_POST["email"] . '&token=' . TOKEN);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $id = json_decode(curl_exec($ch))->Id;
        curl_close($ch);

        ob_start();
        $ch = curl_init(API_BASE . 'member/ForgotPassword?memberid=' . $id . '&token=' . TOKEN);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $res = curl_exec($ch);
        curl_close($ch);
        print_r($res);

    } else {
        return "<form method='POST' action='/planner/register'>
                <input type='email' name='email' placeholder='E-Mail'>
                <input type='text' name='firstname' placeholder='Voor naam'>
                <input type='text' name='lastname' placeholder='Achter naam'>
                <input type='submit' value='Save'>
            </form>";
    }

}

function register_store($attr)
{
}

