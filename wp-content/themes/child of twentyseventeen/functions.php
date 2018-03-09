<?php

function wpb_add_google_fonts() {
wp_enqueue_style ( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Mrs+Saint+Delafield', 'https://fonts.googleapis.com/css?family=Cormorant+Garamond', false );

function child_of_twentyseventeen_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyseventeen-style' for the Twenty Seventeen theme.

    wp_enqueue_style( '$parent_style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',
        array( '$parent_style' ),
        wp_get_theme()->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'child_of_twentyseventeen_enqueue_styles' );

}
?>