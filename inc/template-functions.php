<?php
/**
 * Template helper functions.
 *
 * @package DISCOVER_BAKU_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

function DISCOVER_BAKU_theme_posted_on(): void
{
    printf(
        '<span class="posted-on">%s</span>',
        esc_html(get_the_date())
    );
}
