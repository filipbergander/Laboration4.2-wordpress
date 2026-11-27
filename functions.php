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
add_image_size('large', 750, 563, array('center', 'center'));

function travel_meraviglia_widgets_init() {
    register_sidebar(array(
        'name' => 'Sidfot',
        'id' => 'footer-widget',
        'description' => 'Kan användas för att justera innehåll i sidfoten.',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Information',
        'id' => 'information-widget',
        'description' => 'Kan användas för att visa relevant information på startsidan ovanför nyheterna.',
        'before_widget' => '<div class="information-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'travel_meraviglia_widgets_init');

// Möjlighet för rollen redaktör att uppdatera widgets och menyer
function travel_meraviglia_editor_cap() {
    $role = get_role('editor');
    if ($role) {
        $role->add_cap('edit_theme_options');
    }
}
add_action('admin_init', 'travel_meraviglia_editor_cap');