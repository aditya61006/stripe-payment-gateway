<?php 

/**
 * Plugin Name:       stripe_payment_gateway
 * Plugin URI:        https://example.com
 * Description:       A basic starter model for custom WordPress functionality.
 * Version:           1.0.0
 * Author:            Aditya choudhary
 * Author URI:        https://example.com
 * License:           GPL v2 or later
 * License URI:       https://gnu.org
 * Text Domain:       my-first-plugin
 */

if(!defined('ABSPATH')){
    exit;
}
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/admin/settings-page.php';

function gateway_assets(){

}

add_action('wp_enqueue_scripts', 'gateway_assets');


function gateway_shortcode(){

}

add_shortcode('payment_gateway','gate_shortcode');  