<?php
/**
 * Template helper functions.
 *
 * @package WP_Starter_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

function wp_starter_theme_posted_on(): void
{
    printf(
        '<span class="posted-on">%s</span>',
        esc_html(get_the_date())
    );
}
