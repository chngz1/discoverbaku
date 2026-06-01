<?php
/**
 * Enqueue scripts and styles.
 *
 * @package WP_Starter_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

function wp_starter_theme_scripts(): void
{
    wp_enqueue_style(
        'wp-starter-theme-tailwind',
        'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css',
        [],
        '2.2.19'
    );

    wp_enqueue_style(
        'wp-starter-theme-main',
        WP_STARTER_THEME_URI . '/assets/css/main.css',
        ['wp-starter-theme-tailwind'],
        WP_STARTER_THEME_VERSION
    );

    wp_enqueue_script(
        'wp-starter-theme-alpine',
        'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js',
        [],
        null,
        true
    );

    wp_enqueue_script(
        'wp-starter-theme-main',
        WP_STARTER_THEME_URI . '/assets/js/main.js',
        ['wp-starter-theme-alpine'],
        WP_STARTER_THEME_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'wp_starter_theme_scripts');
