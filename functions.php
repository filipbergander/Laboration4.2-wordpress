<?php

// Lägger till navigeringsmenyer
function travel_meraviglia_register_menus() {
    register_nav_menus(array(
        'main-menu' => 'Huvudmeny',
        'footer-menu' => 'Sidfotsmeny'
    ));
}
add_action('after_setup_theme', 'travel_meraviglia_register_menus');

// Aktiverar bilder
add_theme_support('post-thumbnails');

// Bildstorlekar
add_image_size('round-journey-medium', 350, 263, array('center', 'center'));