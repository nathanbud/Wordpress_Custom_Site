<?php

function university_files(){
    wp_enqueue_script('university_main_js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true );
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime() );
}

add_action('wp_enqueue_scripts', 'university_files');