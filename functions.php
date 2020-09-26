<?php 
    function portfolio_files() {
     wp_enqueue_style('portfolio_main_styles', get_stylesheet_uri());
    }
    
    add_action('wp_enqueue_scripts', 'portfolio_files');