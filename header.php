<?php
/*
 * Headern för webbplatsen, dynamiskt
*/
 ?>

<!DOCTYPE html>
<html <?php
// Aktuella språket
language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/css/style.css">
    <script src="<?php echo get_template_directory_uri(); ?>/src/js/main.js" defer></script>
    <?php get_template_part('favicon') ?>
    <?php wp_head(); ?>
</head>

<?php
// Skriver navigeringsmeny och logotyp i headern
?>
<body <?php body_class(); ?>>
    <header>
        <a href="<?= get_home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/images/logo/logo-tm.png" alt="Travel Meraviglia Logo" id="logo"></a>
        <nav class="main-nav" aria-label="Huvudmeny">
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false
            )) ?>
        </nav>
    </header>