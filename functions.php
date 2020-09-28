<?php 
    /** AGGIORNA IN AUTOMATICO IL NUMERO DELLA VERSIONE */
    define( 'WPO_VERSION', ( WPO_IS_STAGING ? time() : '1.0.0' ) );
    define( 'WPO_IS_ADMIN', current_user_can( 'edit_others_posts' ) );


/**
 * This function takes care of all the setup and functionalities that should be added to your theme
 */
function wpo_setup() {
	/**
	 * add_theme_support will be used to add some functionalities
	 * 
	 * @see  https://developer.wordpress.org/reference/functions/add_theme_support/
	 * @see  https://developer.wordpress.org/block-editor/developers/themes/theme-support/
	 */
    add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' ); /** video responsive */

}
add_action( 'after_setup_theme', 'wpo_setup' );

    function portfolio_files() {
     wp_enqueue_script('wpportfolio_js', get_theme_file_uri('/js/app.js'), NULL, '1.0', true);
     wp_enqueue_style('wpportfolio_main_styles', get_stylesheet_uri());

     //animejs
     //wp_enqueue_script('anime_js', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js');
     //wp_enqueue_script('wpportlio_animation_js', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
    
     wp_enqueue_style('font-secondary', 'https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&display=swap');
     wp_enqueue_style('font-primary', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
     wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css');
     

     wp_enqueue_style( 'wpportfolio-reset', get_stylesheet_directory_uri().'/style.css',array(), WPO_VERSION, 'all');
     wp_enqueue_style( 'wpportfolio-style', WPO_INCLUDES.'css/style.css)', array( 'wpportfolio-reset' ), WPO_VERSION, 'all');   
    }
    
    add_action('wp_enqueue_scripts', 'portfolio_files');

    // add title in the uri
    function portfolio_features() {
        register_nav_menu('headerMenu', 'Header Menu');
        add_theme_support('title-tag');
    } 
    add_action('after_setup_theme', 'portfolio_features');