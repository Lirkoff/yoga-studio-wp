<?php

function yoga_studio_theme_files() {


    $css_ver = filemtime(get_theme_file_path('/build/yoga-studio.css'));

    wp_enqueue_style(
        'yoga-studio-main',
        get_theme_file_uri('/build/yoga-studio.css'),
        [],
        $css_ver
    );


    wp_enqueue_script('yoga-studio-js',
        get_theme_file_uri('/build/index.js'),
        [],
        '1.0',
        true
    );


    wp_enqueue_style(
        'custom-google-fonts',
        'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    wp_enqueue_style(
        'font-awesome',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        [], '4.7.0');
}

add_action('wp_enqueue_scripts', 'yoga_studio_theme_files');
