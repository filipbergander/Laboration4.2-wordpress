<?php

// Lägger till navigeringsmenyer
function travel_meraviglia_register_menus() {
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'main-menu' => 'Huvudmeny',
        'footer-menu' => 'Sidfotsmeny'
    ));
}
add_action('after_setup_theme', 'travel_meraviglia_register_menus');