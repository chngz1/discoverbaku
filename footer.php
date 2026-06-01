<?php
/**
 * Footer template.
 *
 * @package DISCOVER_BAKU_Theme
 */
?>
</main>
<footer class="site-footer py-10">
    <div class="site-container flex flex-col md:flex-row gap-4 md:items-center md:justify-between">
        <p class="m-0">&copy; <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        <nav aria-label="<?php esc_attr_e('Footer Menu', 'discover-baku'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'footer',
                'menu_class'     => 'nav-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ]);
            ?>
        </nav>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
