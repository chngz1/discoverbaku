<?php
/**
 * Page template.
 *
 * @package WP_Starter_Theme
 */

get_header();
?>

<section class="py-16">
    <div class="site-container max-w-4xl">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('entry-content'); ?>>
                <h1 class="text-4xl md:text-6xl mb-8"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    </div>
</section>

<?php
get_footer();
