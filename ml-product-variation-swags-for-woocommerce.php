<?php
/**
 * Plugin Name: ML Product Variation Swatches for WooCommerce
 * Plugin URI: www.miabs.net
 * Description: Product Variation Swatches for WooCommerce lets you add variation swatches for variable product attributes in your WooCommerce online store.
 * Version: 1.0
 * Author: MiabsLab
 */

function ml_pvsfw_assets() {
    $plugin_dir_url = plugin_dir_url(__FILE__);

    wp_enqueue_style('ml-tooltipster', $plugin_dir_url.'assets/css/tooltipster.main.min.css');
    wp_enqueue_style('ml-tooltipster-style', $plugin_dir_url.'assets/css/style.css');
    wp_enqueue_script('ml-tooltipster', $plugin_dir_url.'assets/js/tooltipster.bundle.min.js');
    wp_enqueue_script('ml-tooltipster-main', $plugin_dir_url.'assets/js/main.js');
}
add_action('wp_enqueue_scripts', 'ml_pvsfw_assets');