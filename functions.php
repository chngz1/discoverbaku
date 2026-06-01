<?php
/**
 * WP Starter Theme functions and definitions.
 *
 * @package WP_Starter_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

GitHub Theme URI: https://github.com/chngz1/discoverbaku
Primary Branch: main

define('WP_STARTER_THEME_VERSION', '1.0.0.2.5.5');
define('WP_STARTER_THEME_DIR', get_template_directory());
define('WP_STARTER_THEME_URI', get_template_directory_uri());

require_once WP_STARTER_THEME_DIR . '/inc/theme-setup.php';
require_once WP_STARTER_THEME_DIR . '/inc/enqueue.php';
require_once WP_STARTER_THEME_DIR . '/inc/template-functions.php';


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