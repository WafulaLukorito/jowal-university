<?php

function uni_files(){
    wp_enqueue_script('main-uni-js',get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true );
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('uni_main_styles', get_stylesheet_uri() );

}

add_action('wp_enqueue_scripts', 'uni_files' );