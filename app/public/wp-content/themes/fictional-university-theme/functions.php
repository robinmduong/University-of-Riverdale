<?php

function university_files() {
    //"style" is used for CSS files. "script" is used for JS files
    wp_enqueue_script('main-university.js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
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

function university_features() {
    add_theme_support('title-tag'); //the header updates automatically e.g. Privacy Policy and About Us
}

add_action('after_setup_theme', 'university_features');

?>