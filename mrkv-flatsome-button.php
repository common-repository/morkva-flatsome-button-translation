<?php
/**
 * Plugin Name: Morkva Flatsome Button Translation
 * Plugin URI: https://morkva.co.ua/
 * Description: Enables header buttons string translation. Need flatsome customization services? support@morkva.co.ua
 * Version: 0.1.0
 * Author: MORKVA
 * Text Domain: morkva-flatsome-button-translation
 * License: GPLv2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'WPINC' ) ) {
    die;
}

add_action( 'before_woocommerce_init', function() {
    if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
        \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
    }
} );

function mrkv_flatsome_button_for_polylang() 
{
    if (function_exists('pll_register_string')) 
    {
        $btn_text = get_theme_mod( 'header_button_1', 'Button 1' );
        pll_register_string('flatsome_button1', $btn_text, 'flatsome');
        $btn_text_2 = get_theme_mod( 'header_button_2', 'Button 2' );
        pll_register_string('flatsome_button2', $btn_text_2, 'flatsome');
    }
}
add_action('init', 'mrkv_flatsome_button_for_polylang');