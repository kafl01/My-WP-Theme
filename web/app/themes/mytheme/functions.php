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
    //create our menu locations
    register_nav_menus(
        [
            'primary' => __('Main navigation', 'mytheme'),
            'extra-menu' => __('Extra Menu', 'mytheme'),
            'footer'  => __('Footer navigation', 'mytheme'),
            'social' => __('Social Media Links', 'mytheme'),
            'secondary-menu' => __('Secondary Menu', 'mytheme'),
        ]
    );

    load_theme_textdomain('mytheme', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'setup_mytheme');

// Styles
function mytheme_styles()
{
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Radio+Canada&display=swap');
    wp_enqueue_style('mytheme-style', get_theme_file_uri('dist/main.css'));
}
add_action('wp_enqueue_scripts', 'mytheme_styles');

// Script
function mytheme_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('mytheme-script', get_theme_file_uri('dist/app.js'), [], null, true);
}

add_action('wp_enqueue_scripts', 'mytheme_scripts');

// ---------- //

// For CPT WCM-travel
function my_custom_post_wcmtravel()
{
    $args = array(
        'labels' => array(
            'name' => 'wcm_travel',
            'singular_name' => 'wcm_travel',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'rewrite'     => ['slug' => 'wcm_travel'],
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_nav_menus' => 'true',
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
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'rewrite'     => ['slug' => 'travel_matches'],
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
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
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'rewrite'     => ['slug' => 'travel_cup'],
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
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
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'rewrite'     => ['slug' => 'travel_camp'],
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
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
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'rewrite'     => ['slug' => 'travel_soccer'],
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    );

    register_post_type('travel_soccer', $args);
}
add_action('init', 'my_custom_post_travelsoccer');

// For CPT Netr Team
function my_custom_post_netrteam()
{
    $args = array(
        'labels' => array(
            'name' => 'netr_team',
            'singular_name' => 'netr_team',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'rewrite'     => ['slug' => 'netr_team'],
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    );

    register_post_type('netr_team', $args);
}
add_action('init', 'my_custom_post_netrteam');

// ---------- //

// For Taxonomy Travel age
function my_taxon_travelage()
{
    $args = array(
        'labels' => array(
            'name' => 'travel_age',
            'singular_name' => 'travel_age',
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
            'singular_name' => 'travel_country',
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
            'name' => 'travel_sport_league',
            'singular_name' => 'travel_sport_league',
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('travel_sport_league', array('wcm_travel', 'travel_soccer', 'travel_matches', 'page'), $args);
}
add_action('init', 'my_taxon_sportleague');

// For Taxonomy Sport type
function my_taxon_sporttype()
{
    $args = array(
        'labels' => array(
            'name' => 'travel_sport_type',
            'singular_name' => 'travel_sport_type',
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('travel_sport_type', array('wcm_travel', 'travel_camp', 'travel_cup', 'travel_soccer', 'page'), $args);
}
add_action('init', 'my_taxon_sporttype');

// For Taxonomy Travel type
function my_taxon_traveltype()
{
    $args = array(
        'labels' => array(
            'name' => 'travel_type',
            'singular_name' => 'travel_type',
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('travel_type', array('wcm_travel', 'travel_camp', 'travel_cup', 'travel_matches', 'page'), $args);
}
add_action('init', 'my_taxon_traveltype');

// ---------- // 

// widget
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
