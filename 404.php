<?php
/**
 * 404 template.
 *
 * @package WP_Starter_Theme
 */

get_header();
?>

<section class="py-24">
    <div class="site-container text-center max-w-2xl">
        <p class="text-sky-500 font-bold uppercase tracking-widest mb-4">404</p>
        <h1 class="text-5xl md:text-7xl font-black tracking-tight mb-6"><?php esc_html_e('Page not found', 'wp-starter-theme'); ?></h1>
        <p class="text-slate-600 text-lg mb-8"><?php esc_html_e('The page you are looking for does not exist or has been moved.', 'wp-starter-theme'); ?></p>
        <a class="btn-primary" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Back to home', 'wp-starter-theme'); ?></a>
    </div>
</section>

<?php
get_footer();
