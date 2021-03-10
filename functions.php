<?php 
//adding the CSS and JS Files
function vr_setup() {
    //not needed so far: wp_enqueue_style('google-fonts', 'url')
    wp_enqueue_style('custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css');

    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);

    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'vr_setup');

//Adding Theme Support 

function vr_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', 
    array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'vr_init');

// Projects Post Type

function vr_custom_post_type() {
    register_post_type('project', 
        array(
            'rewrite' => array('slug' => 'projects'),
            'labels' => array(
                'name' => 'Projects',
                'singular_name' => 'Project',
                'add_new_item' => 'Add New Project',
                'edit_item' => 'Edit Project'
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments' 
            )
        )
    );
}

add_action('init', 'vr_custom_post_type');