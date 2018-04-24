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
add_shortcode('reserverino', 'reserveer_view');

define('API_BASE', 'https://klimcaffee.clubplanner.be/api/');
define('TOKEN', "\$kl1mc@ff00");

function reserveer_view($attr)
{
        return "<iframe src='https://klimcaffee.clubplanner.be/Account/LoginMember' style='border: none; height: 1000px; width: 100%;'></iframe>";
}

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
        return "<form method='POST' action='" . get_site_url() . "/planner/register'>
                <input type='text' name='firstname' placeholder='Voornaam'>
                <input type='text' name='lastname' placeholder='Achternaam'>
                <input type='email' name='email' placeholder='E-Mail'>
                <input type='submit' value='Volgende'>
            </form>";
    }
}

function shop_view($attr)
{

    $ch = curl_init(API_BASE . 'member/GetSubscriptions?token=' . TOKEN);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $res = json_decode(curl_exec($ch));
    curl_close($ch);

    $html = "";

    foreach ($res as $sub) {
        $html .= "
    <div class='col-md-3'>
        <div class='shop-item'>
        <a href='/planner/order?package=" . $sub->SubscriptionId . "'>" . $sub->Description . "</a>
        </div></div>";
    }

    return "<div class='row'>" . $html . '</div>';
}


function order_view($attr)
{
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $ch = curl_init(API_BASE . 'member/GetSubscriptions?token=' . TOKEN);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $res = json_decode(curl_exec($ch));
        curl_close($ch);

        $sub = null;
        foreach($res as $sub) {
            if ($sub->SubscriptionId == $_POST["package"]) {
                $item = $sub;
                break;
            }
        }

        $mollie = new Mollie_API_Client;
        $mollie->setApiKey("test_VvzbMtrfKpa8Gw7tcdg3MeCvEeJcux");

        $payment = $mollie->payments->create(array(
            "amount" => $sub->Cost + 5,
            "description" => $sub->Description,
            "redirectUrl" => "http://klimkaffee.akxis.io/planner/thanks",
            "webhookUrl" => "http://klimkaffee.akxis.io/mollie",
            "metadata" => json_encode([
                "userid" => $_POST["userid"],
                "package" => $_POST["package"]
            ])
        ));

        return "<div class='click-to-pay'><a href='" . $payment->links->paymentUrl . "'>Klik hier om te betalen</a></div>";
    } else {
        return "<form method='POST' action='/planner/order'>
                    <input type='number' name='userid' placeholder='Klantennummer'>
                    <p><small>(u kan dit in u registratie mail vinden)</small></p>
                    <input type='hidden' name='package' value='" . htmlentities($_GET["package"]) . "'>
                    <input type='submit' value='Bestel'>
                </form>";
    }
}

function parse_payment($attr) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $mollie = new Mollie_API_Client;
        $mollie->setApiKey("test_VvzbMtrfKpa8Gw7tcdg3MeCvEeJcux");
        $payment = $mollie->payments->get($_POST["id"]);

        if ($payment->isPaid()) {
            $ch = curl_init(API_BASE . 'member/AddSubscription?token=' . TOKEN . '&memberid=' . json_decode($payment->metadata)->userid . '&subid=' . json_decode($payment->metadata)->package . '&startdate=' . date('d/m/Y') . '&reference=' . $_POST["id"]);
            echo API_BASE . 'member/AddSubscription?token=' . TOKEN . '&memberid=' . json_decode($payment->metadata)->userid . '&subid=' . json_decode($payment->metadata)->package . '&startdate=' . date('d/m/Y') . '&reference=' . $_POST["id"];

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $res = curl_exec($ch);
            curl_close($ch);
            print_r($res);
        }

        /*  */
    }
}
