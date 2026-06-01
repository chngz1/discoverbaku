<?php
/**
 * Archive template.
 *
 * @package WP_Starter_Theme
 */

get_header();
?>

<section class="py-16">
    <div class="site-container">
        <header class="mb-10">
            <?php the_archive_title('<h1 class="text-4xl md:text-6xl font-black tracking-tight">', '</h1>'); ?>
            <?php the_archive_description('<div class="text-slate-600 mt-4">', '</div>'); ?>
        </header>

        <?php if (have_posts()) : ?>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
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
