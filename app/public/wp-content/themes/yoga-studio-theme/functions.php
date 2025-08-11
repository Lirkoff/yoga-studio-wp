<?php

function yoga_studio_theme_files() {


    $css_ver = filemtime(get_theme_file_path('/build/yoga-studio.css'));

    wp_enqueue_style(
        'yoga-studio-main',
        get_theme_file_uri('/build/yoga-studio.css'),
        [],
        $css_ver
    );


    $js_ver = filemtime( get_theme_file_path( '/build/index.js' ) );

    wp_enqueue_script(
        'yoga-studio-js',
        get_theme_file_uri( '/build/index.js' ),
        [],
        $js_ver,
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


function yoga_studio_theme_setup() {
//    register_nav_menu('headerMenuLocation', 'Header Menu Location');
//    register_nav_menu('footerLocationOne', 'Footer Location One');
//    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'yoga_studio_theme_setup');
