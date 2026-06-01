<?php
/**
 * Enqueue scripts and styles.
 *
 * @package DISCOVER_BAKU_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

function DISCOVER_BAKU_theme_scripts(): void
{
    wp_enqueue_style(
        'discover-baku-tailwind',
        'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css',
        [],
        '2.2.19'
    );

    wp_enqueue_style(
        'discover-baku-main',
        DISCOVER_BAKU_THEME_URI . '/assets/css/main.css',
        ['discover-baku-tailwind'],
        DISCOVER_BAKU_THEME_VERSION
    );

    wp_enqueue_script(
        'discover-baku-alpine',
        'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js',
        [],
        null,
        true
    );

    wp_enqueue_script(
        'discover-baku-main',
        DISCOVER_BAKU_THEME_URI . '/assets/js/main.js',
        ['discover-baku-alpine'],
        DISCOVER_BAKU_THEME_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'DISCOVER_BAKU_theme_scripts');
