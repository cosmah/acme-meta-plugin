<?php
/**
 * Plugin Name: ACME Plugin
 * Plugin URI: https://example.com
 * Description: This plugin adds custom meta tags to the frontend pages.
 * Version: 1.0.0
 * Author: KRITEK, s.r.o.
 * Author URI: https://kritek.eu
 * Text Domain: acme-plugin
 */

defined('ABSPATH') || exit; // Prevent direct access to this file

function acme_plugin_insert_meta_tags() {
    echo '<meta name="application-name" content="ACME SOFTWARE ™">';
    echo '<meta name="author" content="KRITEK, s.r.o. - https://kritek.eu - info@kritek.eu">';
}
add_action('wp_head', 'acme_plugin_insert_meta_tags');

register_activation_hook(__FILE__, 'acme_plugin_activate');
register_uninstall_hook(__FILE__, 'acme_plugin_uninstall');

function acme_plugin_activate() {
    // Add any activation tasks here
    // For example, you can create a database table or initialize settings
}

function acme_plugin_uninstall() {
    // Add any uninstallation tasks here
    // For example, you can remove database tables or delete stored data
}

// Flush rewrite rules on plugin activation/uninstallation
function acme_plugin_flush_rewrite_rules() {
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'acme_plugin_flush_rewrite_rules');
register_uninstall_hook(__FILE__, 'acme_plugin_flush_rewrite_rules');
