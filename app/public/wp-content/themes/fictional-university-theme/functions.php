<?php

function university_files() {
    //"style" is used for CSS files. "script" is used for JS files
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    if (strstr($_SERVER['SERVER_NAME'], 'university-of-riverdale.local')) {
        wp_enqueue_script('main-university-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    } else {
        wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'), NULL, '1.0', true);
        wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.bc49dbb23afb98cfc0f7.js'), NULL, '1.0', true);
        wp_enqueue_script('our-main-style', get_theme_file_uri('/bundled-assets/styles.bc49dbb23afb98cfc0f7.css'));
    }
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
    // register_nav_menu('headerMenuLocation', 'Header Menu Location'); //first name can be anything, 2nd name is more user-friendly and will show up in WP admin screen
    // register_nav_menu('footerLocationOne', 'Footer Location One');
    // register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag'); //the header updates automatically e.g. Privacy Policy and About Us
}

add_action('after_setup_theme', 'university_features');

function university_adjust_queries($query) {
    if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) { //if you are not on the admin dashboard. We need this code or else it affects the back-end in WP Admin portal
        $today = date('Ymd');
        $query->set('meta_key', 'event_date'); //this code comes fr/ front-page.php
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', array(
            array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
            )
            )); //semicolon mandatory or error says that } is unexpected
    }
}

add_action('pre_get_posts', 'university_adjust_queries');

?>