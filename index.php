<?php
/*
Huvudsidan som ligger sist i hierarkin, används när ingen annan fil kan matcha
 */
?>

<?php get_header(); ?>
<main>
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <article class="normal-article">
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>