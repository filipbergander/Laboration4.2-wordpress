<?php

/**
 * Startsidans mall
 */
get_header(); ?>
<main>
<?php
// Skriver ut titel och innehåll
if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h1 class="news-h1"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>

   <?php
   // Visar widgeten i information-widget-området om den är aktiverad på wp-admin
   if (is_active_sidebar('information-widget')) : ?>
            <div class="information-widget-area">
                <?php dynamic_sidebar('information-widget'); ?>
            </div>
        <?php endif; ?>  

<section class="news-section">
    <h2>Aktuella resor och nyheter</h2>
    <?php
    // Visar de tre senaste inläggen från kategorin "nyheter"
    $news_query = new WP_QUERY(
        array(
            'post_type'         => 'post',
            'category_name'    => 'nyheter',
            'posts_per_page'    => 3
        )
    ); ?>

    <?php
    // Loopar igenom de inlägg som finns i $news_query och skriver ut titeln, bilden, excerpt och länk till single.php
    if ($news_query->have_posts()) : ?>
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
            <article class="news-article">
                <h3><?php the_title(); ?></h3>
                <div class="news-img">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('round-journey-medium'); ?>
                    <?php endif; ?>
                    <div class="news-link">
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="news-link" aria-label="Läs mer om <?php the_title(); ?>">Läs mer</a>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); // Nollställer tidigare frågan ?>  
    <?php
    // Om inga inlägg finns i kategorin "nyheter" meddelandet
    else : ?>
        <p>Inga nyheter har publicerats hittills.</p>
    <?php endif; ?>

</section>
</main>
<?php
// Skriver ut sidfoten
get_footer(); ?>