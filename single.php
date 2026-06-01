<?php
/**
 * Single post template.
 *
 * @package DISCOVER_BAKU_Theme
 */

get_header();
?>

<section class="py-16">
    <div class="site-container max-w-3xl">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('entry-content'); ?>>
                <p class="text-slate-500 font-semibold mb-3"><?php DISCOVER_BAKU_theme_posted_on(); ?></p>
                <h1 class="text-4xl md:text-6xl mb-8"><?php the_title(); ?></h1>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="mb-8 rounded-3xl overflow-hidden">
                        <?php the_post_thumbnail('large', ['class' => 'w-full h-auto']); ?>
                    </div>
                <?php endif; ?>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    </div>
</section>

<?php
get_footer();
