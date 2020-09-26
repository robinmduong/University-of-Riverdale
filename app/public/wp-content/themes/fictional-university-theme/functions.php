<?php

function university_files() {
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
    //wp_enqueue_style
    //get_stylesheet_uri allows us to work with just the main style.css file
    //if you wanted to add a 2nd or 3rd CSS file, just duplicate the line above
    //if you want to load a js file, change line to wp_enqueue_script
}

add_action('wp_enqueue_scripts', 'university_files');
//wp_enqueue_scripts tells WP that you want to load some CSS or JS files
//add_action(tag you'll be adding the action, function to call aka callback)
//add_action(type of instructions we'll give WP, name of function you want to run)
?>