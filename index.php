<?php
/**
 * Main template file.
 *
 * @package DISCOVER_BAKU_Theme
 */

get_header();
?>

<section class="hero-section">
    <div class="site-container text-center py-24">
        <p class="uppercase tracking-widest text-sm font-bold text-sky-300 mb-5">WordPress Starter Theme</p>
        <h1 class="hero-title mb-6">Build your next WordPress project faster.</h1>
        <p class="hero-subtitle max-w-2xl mx-auto mb-8">
            A clean, responsive starter theme with Tailwind CSS, Alpine.js, custom menus, featured images, and scalable file structure.
        </p>
        <a class="btn-primary" href="#content">Explore Theme</a>
    </div>
</section>

<section id="content" class="py-16">
    <div class="site-container">
        <?php if (have_posts()) : ?>
            <div class="grid gap-6 md:grid-cols-2">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content', get_post_type()); ?>
                <?php endwhile; ?>
            </div>

            <div class="mt-10">
                <?php the_posts_navigation(); ?>
            </div>
        <?php else : ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
