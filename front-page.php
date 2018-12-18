<?php 
// use Framer;

get_header();

// Show the header.
Framer::_header( 'standard', [
    'logo_url' => get_stylesheet_directory_uri() . '/assets/images/the-wright-tie-logo-text-only.svg',
    'classes'  => [
        'has-primary-background-color',
        'has-no-padding'
    ]
] );

// Show the hero.
Framer::_hero( 'standard', [
    'background_img_url'   => get_stylesheet_directory_uri() . '/assets/images/daniel-wright-fixing-bowtie.jpg',
    // 'background_img_url'   => get_stylesheet_directory_uri() . '/assets/images/daniel-wright-popping-bow-tie.jpg',
    'headline'             => "The Wright Tie for Every Occassion",
    'icon'                 => Framer::generate_logo( get_stylesheet_directory_uri() . '/assets/images/the-wright-tie-logo-icon-only.svg' ),
    'subtitle'             => "T-shirts and jeans are really cool, but who said that kids and teens can't dress to impress?",
    'primary_button_label' => 'View Collection',
    'primary_button_link'  => home_url( 'shop' ),
    'primary_button_icon'  => 'fa-long-arrow-alt-right',
    'classes'           => [
        'has-parallax',
        'has-text-align-right',
        'no-overlay',
        'has-primary-color',
    ]
] );

// Show the product grid.
Framer::_content( 'product-grid', [
    'headline'             => 'Choose Your Occassion',
    'subtitle'             => 'Here is more information around this bow tie collection',
    'post_type'            => 'product',
    'result_count'         => 3,
    'column_size'          => 'one-third',
    'primary_button_label' => 'Shop Collection',
    'primary_button_link'  => home_url( 'shop' ),
    'classes'              => [
        'has-no-padding-on-mobile'
    ]
] );

// Show the call to action.
Framer::_call_to_action( 'hero-on-right', [
    'id'                   => 'daniel-wright-intro',
    'headline'             => "Daniel Wright, Owner",
    'subtitle'             => "I may be super young but I find that adding one accessory to my attire really gives me confidence and allows me to express my personality in a different way. I love this accessory so much that I decided to share this passion with kids ages 5-18 to also give them a new sense of style and confidence. My name is Daniel Wright IV and I am the creator and owner of The Wright Tie.",
    'background_img_url'   => get_stylesheet_directory_uri() . '/assets/images/daniel-wright-black-bowtie-magenta-shirt.jpg',
    'primary_button_label' => 'About Daniel',
    'primary_button_link'  => home_url( 'about' ),
    'classes'              => [
        'has-parallax',
        'no-overlay',
    ]
] );

// Show the footer.
Framer::_footer( 'standard', [
    'logo_url' => get_stylesheet_directory_uri() . '/assets/images/the-wright-tie-logo-text-only-blue.svg',
] );

get_footer();