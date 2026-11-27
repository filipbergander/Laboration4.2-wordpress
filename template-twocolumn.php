<?php
/*
Template Name: Två kolumner kort-grid, stor skärm
*/
get_header(); ?>

<main class="full-width-main">
    <?php while ( have_posts() ) : the_post(); ?>
        <section class="page-section">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </section>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>