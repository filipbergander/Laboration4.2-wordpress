<?php
/*
 * Template Name: Sida med separerade kort för varje respaket
 * Varje "kort" visas som en separat artikel med rubrik och innehåll.
 */

get_header();
?>

<main class="cards-page">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <h1 class="news-h1"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>