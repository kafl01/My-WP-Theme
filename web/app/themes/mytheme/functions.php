<?php

function setup_mytheme()
{
    //add theme support
    add_theme_support(feature: 'post-thumbnails');
    add_theme_support(feature: 'automatic-feed-links');
    add_theme_support(feature: 'custom-logo');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support(feature: 'title-tag');
    add_theme_support(feature: 'responsive-embeds');
    //cretae our menu locations
    register_nav_menus(
        [
            'primary' => __('Main navigation', 'mytheme'),
            'extra-menu' => __('Extra Menu', 'mytheme'),
            'footer'  => __('Footer navigation', 'mytheme'),
            'social' => __('Social Media Links', 'mytheme'),
        ]
    );

    //possible add image size

}
add_action('after_setup_theme', 'setup_mytheme');

function mytheme_styles()
{
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Radio+Canada&display=swap');
    wp_enqueue_style('mytheme-style', get_theme_file_uri('dist/main.css'));
}
add_action('wp_enqueue_scripts', 'mytheme_styles');

// For CPT WCM-travel
function my_custom_post_wcmtravel()
{
    $args = array(
        'labels' => array(
            'name' => 'wcm_travel',
            'singular_name' => 'wcm_travel',
        ),
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'rewrite'     => ['slug' => 'wcm_trips'],
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('wcm_travel', $args);
}
add_action('init', 'my_custom_post_wcmtravel');

// For CPT Travel Matches
function my_custom_post_travelmatches()
{
    $args = array(
        'labels' => array(
            'name' => 'travel_matches',
            'singular_name' => 'travel_match',
        ),
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'rewrite'     => ['slug' => 'travel_matches'],
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('travel_matches', $args);
}
add_action('init', 'my_custom_post_travelmatches');

// For CPT Travel cup
function my_custom_post_travelcup()
{
    $args = array(
        'labels' => array(
            'name' => 'travel_cup',
            'singular_name' => 'travel_cup',
        ),
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'rewrite'     => ['slug' => 'travel_cup'],
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('travel_cup', $args);
}
add_action('init', 'my_custom_post_travelcup');

// For CPT Travel camp
function my_custom_post_travelcamp()
{
    $args = array(
        'labels' => array(
            'name' => 'travel_camp',
            'singular_name' => 'travel_camp',
        ),
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'rewrite'     => ['slug' => 'travel_camp'],
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('travel_camp', $args);
}
add_action('init', 'my_custom_post_travelcamp');

// For CPT Travel camp
function my_custom_post_travelsoccer()
{
    $args = array(
        'labels' => array(
            'name' => 'travel_soccer',
            'singular_name' => 'travel_soccer',
        ),
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'rewrite'     => ['slug' => 'travel_soccer'],
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('travel_soccer', $args);
}
add_action('init', 'my_custom_post_travelsoccer');

// ---------- //

// For Taxonomy Travel age
function my_taxon_travelage()
{
    $args = array(
        'labels' => array(
            'name' => 'travel_age',
            'singualar_name' => 'travel_age',
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('travel_age', array('wcm_travel', 'travel_camp', 'travel_cup', 'page'), $args);
}
add_action('init', 'my_taxon_travelage');

// For Taxonomy Travel country
function my_taxon_travelcountry()
{
    $args = array(
        'labels' => array(
            'name' => 'travel_country',
            'singualar_name' => 'travel_country',
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('travel_country', array('wcm_travel', 'travel_camp', 'travel_cup', 'travel_soccer', 'page'), $args);
}
add_action('init', 'my_taxon_travelcountry');

// For Taxonomy Sport league
function my_taxon_sportleague()
{
    $args = array(
        'labels' => array(
            'name' => 'sport_league',
            'singualar_name' => 'sport_league',
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('sport_league', array('wcm_travel', 'travel_soccer', 'travel_matches', 'page'), $args);
}
add_action('init', 'my_taxon_sportleague');

// For Taxonomy Sport type
function my_taxon_sporttype()
{
    $args = array(
        'labels' => array(
            'name' => 'sport_type',
            'singualar_name' => 'sport_type',
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('sport_type', array('wcm_travel', 'travel_camp', 'travel_cup', 'travel_soccer', 'page'), $args);
}
add_action('init', 'my_taxon_sporttype');

// For Taxonomy Travel type
function my_taxon_traveltype()
{
    $args = array(
        'labels' => array(
            'name' => 'travel_type',
            'singualar_name' => 'travel_type',
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('travel_type', array('wcm_travel', 'travel_camp', 'travel_cup', 'travel_matches', 'page'), $args);
}
add_action('init', 'my_taxon_traveltype');

function mytheme_widgets()
{
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area',
        )
    );
}
add_action('widgets_init', 'mytheme_widgets');
