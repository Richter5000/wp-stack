<?php

function site_files() {
    wp_enqueue_script('main-theme-js', get_theme_file_uri('/assets/public/js/frontend.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('site_main_styles', get_theme_file_uri('/assets/public/css/frontend.css'));
}
add_action('wp_enqueue_scripts', 'site_files');