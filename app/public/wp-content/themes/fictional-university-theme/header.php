<!DOCTYPE html <?php language_attributes(); ?>
    <head>
        <meta name="<?php bloginfo('charset'); ?>">
        <!--tells web browsers and devices to be true to themselves, use their own native device size/width-->
        <!-- This meta tag alone does NOT make a website responsive; must have your own CSS code/layout, and this tag's just extra -->
        <meta name="viewport" content="width=device-width, initial-scale = 1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class()?> >

        <header class="site-header">
        <div class="container">
            <h1 class="school-logo-text float-left">
            <a href="<?php echo site_url() ?>">University of <strong>Riverdale</strong></a>
            </h1>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
            <nav class="main-navigation">
                <ul>
                <li><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
                <li><a href="#">Programs</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Campuses</a></li>
                <li><a href="#">Blog</a></li>
                </ul>
            </nav>
            <div class="site-header__util">
                <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
                <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            </div>
        </div>
        </header>