<?php

/**
 * Mall för varje enskilt nyhetsinlägg
 */
get_header(); ?>
<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="normal-article single-article">
                <h1><?php the_title(); ?></h1>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="single-img">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                
                <div class="single-content">
                    <?php the_content(); ?>
                </div>

                <?php
                $author_name = get_the_author_meta('display_name');
                $author_email = get_the_author_meta('user_email');
                ?>

                <div class="single-meta-info">
                    <span class="news-highlight">Publicerad <?php echo get_the_date(); ?></span>
                    <span class="news-author">Av: <?php echo $author_name; ?> | <?php echo $author_email; ?></span>
                </div>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="return-link">Tillbaka till startsidan</a>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>