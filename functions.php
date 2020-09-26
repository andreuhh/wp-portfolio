<?php 
    function portfolio_files() {
     wp_enqueue_script('wpportfolio_js', get_theme_file_uri('/js/app.js'), NULL, '1.0', true);
     wp_enqueue_style('wpportfolio_main_styles', get_stylesheet_uri());

     //animejs
     //wp_enqueue_script('anime_js', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js');
     //wp_enqueue_script('wpportlio_animation_js', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
    
     wp_enqueue_style('font-secondary', 'https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&display=swap');
     wp_enqueue_style('font-primary', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
     wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css');
     

    wp_enqueue_style( 'wpportfolio-reset', get_stylesheet_directory_uri().'/style.css',array(),'1.0.1', 'all');
    wp_enqueue_style( 'wpportfolio-style', WPO_INCLUDES.'css/style.css)', array( 'wpportfolio-reset' ), WPO_VERSION, 'all');
    }
    
    add_action('wp_enqueue_scripts', 'portfolio_files');

    // add title in the uri
    function portfolio_features() {
        add_theme_support('title-tag');
    } 
    add_action('after_setup_theme', 'portfolio_features');