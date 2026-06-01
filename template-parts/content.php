<?php
/**
 * Default content card.
 *
 * @package DISCOVER_BAKU_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" class="block mb-5 rounded-2xl overflow-hidden">
            <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-auto']); ?>
        </a>
    <?php endif; ?>

    <p class="text-slate-500 text-sm font-semibold mb-3"><?php DISCOVER_BAKU_theme_posted_on(); ?></p>
    <h2 class="text-2xl font-black tracking-tight mb-4">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <div class="text-slate-600 mb-5">
        <?php the_excerpt(); ?>
    </div>
    <a class="font-bold text-sky-500" href="<?php the_permalink(); ?>">
        <?php esc_html_e('Read more', 'discover-baku'); ?>
    </a>
</article>
