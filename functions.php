<?php
/**
 * WP Starter Theme functions and definitions.
 *
 * @package DISCOVER_BAKU_Theme
 * 
 * 
 */

if (!defined('ABSPATH')) {
    exit;
}



define('DISCOVER_BAKU_THEME_VERSION', '1.0.1.9.7.3');
define('DISCOVER_BAKU_THEME_DIR', get_template_directory());
define('DISCOVER_BAKU_THEME_URI', get_template_directory_uri());

require_once DISCOVER_BAKU_THEME_DIR . '/inc/theme-setup.php';
require_once DISCOVER_BAKU_THEME_DIR . '/inc/enqueue.php';
require_once DISCOVER_BAKU_THEME_DIR . '/inc/template-functions.php';


add_action('template_redirect', function () {
    if (is_ssl()) {
        return;
    }

    if (is_admin()) {
        return;
    }

    $host = $_SERVER['HTTP_HOST'] ?? '';
    $request_uri = $_SERVER['REQUEST_URI'] ?? '/';

    wp_safe_redirect('https://' . $host . $request_uri, 301);
    exit;
});