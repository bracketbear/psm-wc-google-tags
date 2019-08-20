<?php

/**
 * Plugin Name: Pete's Sink Mount WooCommerce Google Tags
 * Description: This plugin enables Google Tag Manager for Pete's Sink Mount.
 * 
 * Author Name: Harrison Callahan
 * Author URI:  https://harrisoncallahan.com
 * 
 * Version:     1.0.0
 */

if (!defined('ABSPATH')) die('Direct access not allowed');

define('PSM_WC_GOOGLE_TAG_PATH', plugin_dir_path(__FILE__));
define('PSM_WC_GOOGLE_TAG_URL', plugin_dir_url(__FILE__));

require_once(PSM_WC_GOOGLE_TAG_PATH . 'includes/class-psm-wc-google-tags.php');

$psm_wc_google_tags = new PSM_WC_Google_Tags;
$psm_wc_google_tags->init();
