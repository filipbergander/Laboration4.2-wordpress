<?php

/**
 * Startsidans mall
 */
get_header(); ?>
<main>
<?php
if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h1 class="news-h1"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<section class="news-section">
    <h2>Aktuella resor och nyheter</h2>
    <?php
    $news_query = new WP_QUERY(
        array(
            'post_type'         => 'post',
            'posts_per_page'    => 3
        )
    ); ?>

    <?php if ($news_query->have_posts()) : ?>
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
            <article class="news-article">
                <h3><?php the_title(); ?></h3>
                <div class="news-img">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium', array('alt' => get_the_title(), 'width' => 350, 'height' => 263)); ?>
                    <?php endif; ?>
                    <div class="news-link">
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="news-link" aria-label="Läs mer om <?php the_title(); ?>">Läs mer</a>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p>Inga nyheter har publicerats hittills.</p>
    <?php endif; ?>
</section>
</main>
<?php get_footer(); ?>