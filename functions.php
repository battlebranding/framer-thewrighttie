<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Nanum+Pen+Script|Rokkitt' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'the-wright-tie', get_stylesheet_uri(), [ 'chameleon' ] );
}

class TheWrightTie {

    protected $settings;

    public function __construct() {

        $settings = [
            'primary_font'   => '',
            'secondary_font' => '',
        ];

    }
}
