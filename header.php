<?php
/**
 * Header template.
 *
 * @package DISCOVER_BAKU_Theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header" x-data="{ open: false }">
    <div class="site-container py-4 flex items-center justify-between">
        <div class="site-branding text-xl">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            <?php endif; ?>
        </div>

        <nav class="desktop-nav" aria-label="<?php esc_attr_e('Primary Menu', 'discover-baku'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class'     => 'nav-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ]);
            ?>
        </nav>

        <button class="mobile-menu-button text-slate-900 font-bold" type="button" @click="open = !open" :aria-expanded="open.toString()">
            Menu
        </button>
    </div>

    <div class="mobile-nav-panel bg-white" x-show="open" x-cloak>
        <div class="site-container">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class'     => 'nav-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ]);
            ?>
        </div>
    </div>
</header>
<main id="primary" class="site-main">
