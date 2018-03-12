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
require('vendor/autoload.php');

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
add_shortcode('shoperino', 'shop_view');
add_shortcode('orderino', 'order_view');
add_shortcode('mollierino', 'parse_payment');

$subs = [
    [
        "name" => "1 Maand",
        "price" => 5.00,
        "duration" => 31
    ],
    [
        "name" => "3 Maanden",
        "price" => 15.00,
        "duration" => 91
    ],
    [
        "name" => "6 Maanden",
        "price" => 30.00,
        "duration" => 182
    ],
    [
        "name" => "1 Jaar",
        "price" => 60.00,
        "duration" => 365
    ],
];

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

        $ch = curl_init(API_BASE . 'member/ForgotPassword?memberid=' . $id . '&token=' . TOKEN);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $res = curl_exec($ch);
        curl_close($ch);
        return $res;

    } else {
        return "<form method='POST' action='/planner/register'>
                <input type='email' name='email' placeholder='E-Mail'>
                <input type='text' name='firstname' placeholder='Voor naam'>
                <input type='text' name='lastname' placeholder='Achter naam'>
                <input type='submit' value='Save'>
            </form>";
    }
}

function shop_view($attr)
{
    global $subs;
    $html = "";

    foreach ($subs as $key => $sub) {
        $html .= "<a href='/planner/order?package=" . $key . "'>" . $sub["name"] . "</a>";
    }

    return $html;
}


function order_view($attr)
{
    global $subs;

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $mollie = new Mollie_API_Client;
        $mollie->setApiKey("test_VvzbMtrfKpa8Gw7tcdg3MeCvEeJcux");

        $payment = $mollie->payments->create(array(
            "amount" => $subs[$_POST["package"]]["price"],
            "description" => $subs[$_POST["package"]]["name"],
            "redirectUrl" => "http://klimkaffee.akxis.io/planner/thanks",
            "webhookUrl" => "https://requestb.in/19l6r8w1",
            "metadata" => json_encode([
                "email" => $_POST["email"],
                "package" => $_POST["package"]
            ])
        ));

        return "<a href='" . $payment->links->paymentUrl . "'>Klik hier om te betalen</a>";
    } else {
        return "<form method='POST' action='/planner/order'>
                    <input type='email' name='email' placeholder='E-Mail waar u mee hebt gerigstreerd'>
                    <p>KIJK NA OF DIT CORRECT IS</p>
                    <input type='hidden' name='package' value='" . htmlentities($_GET["package"]) . "'>
                    <input type='submit' value='Bestel'>
                </form>";
    }
}

