<?php
/**
 * Template Name: Page w/o Sidebar
 */

get_header();

// Show the header.
Framer::_header( 'standard', [
    'logo_url' => get_stylesheet_directory_uri() . '/assets/images/the-wright-tie-logo-text-only.png',
    'classes'  => [
        'has-primary-background-color',
        'has-no-padding',
    ]
] );

Framer::_breadcrumb();

Framer::_content( 'page-no-sidebar' );

// Show the footer.
Framer::_footer( 'standard', [
    'logo_url' => get_stylesheet_directory_uri() . '/assets/images/the-wright-tie-logo-text-only-blue.png',
] );

get_footer();