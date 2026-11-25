<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta name="description" content="Upptäck världen med Travel Meraviglia. Vi hjälper dig att planera bekväma och personligt utformade resor till oförglömliga resmål.">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/css/style.css">
    <script src="<?php echo get_template_directory_uri(); ?>/src/js/main.js" defer></script>
    <?php include 'favicon.php'; ?>
    <?php wp_head(); ?>
</head>

<body>
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