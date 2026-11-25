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
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.svg">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-title" content="TravelM">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicon/site.webmanifest">
        <?php wp_head(); ?>
</head>

<body>
    <header>
        <a href="index.html"><img src="images/logo/logo-tm.png" alt="Travel Meraviglia Logo" id="logo"></a>
        <nav class="main-nav" aria-label="Huvudmeny">
            <ul>
                <li><a href="index.html" aria-current="page">Hem</a></li>
                <li><a href="journey.html">Resor</a></li>
                <li><a href="contact.html">Kontakt</a></li>
            </ul>
        </nav>
    </header>