<?php

    get_header(); ?>

        <div class="page-banner">
            <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
            <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title">
                    <?php the_archive_title(); ?>
                    <!-- <?php if(is_category()) {
                        single_cat_title();
                    }
                    if (is_author()) {
                        echo 'Posts by '; the_author();
                    } ?> -->
                </h1>
                <div class="page-banner__intro">
                    <p>What's happening at the University of Riverdale</p>
                </div>
            </div>  
        </div>

        <div class="container container--narrow page-section">
            <?php 
                while (have_posts()) {
                    the_post(); ?>
                    <?php }
                        echo paginate_links(); //pagination for blog posts
                    ?>
        </div>

    <?php get_footer();

?>