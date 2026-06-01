<?php
/**
 * Theme setup.
 *
 * @package WP_Starter_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

function wp_starter_theme_setup(): void
{
    load_theme_textdomain('discover-baku', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    add_theme_support('editor-styles');

    register_nav_menus([
        'primary' => esc_html__('Primary Menu', 'discover-baku'),
        'footer'  => esc_html__('Footer Menu', 'discover-baku'),
    ]);
}
add_action('after_setup_theme', 'wp_starter_theme_setup');

function wp_starter_theme_content_width(): void
{
    $GLOBALS['content_width'] = apply_filters('wp_starter_theme_content_width', 1200);
}
add_action('after_setup_theme', 'wp_starter_theme_content_width', 0);
