<?php

    get_header(); ?>

        <div class="page-banner">
            <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
            <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title">
                    <?php the_archive_title()?>
                    <!-- <?php if(is_category()) {
                        single_cat_title();
                    }
                    if (is_author()) {
                        echo 'Posts by '; the_author();
                    } ?> -->
                </h1>
                <div class="page-banner__intro">
                    <p><?php the_archive_description() ?></p>
                </div>
            </div>  
        </div>

        <div class="container container--narrow page-section">
            <?php 
                while (have_posts()) {
                    the_post(); ?>
                        <div class="post-item"> <!--post-item class creates a border and some vertical space
                        -->
                            <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
                            <div class="metabox"> <!--not a WP or php class, just 4 styling -->
                                <p>Posted by <?php the_author_posts_link(); ?> 
                                   on <?php the_time('F j, Y'); ?> 
                                   in <?php echo get_the_category_list(', '); ?> <!--If a post has 2+ categories, wahtever's in the parentheses is how the cats will be separated-->
                                </p>
                            </div>

                            <div class="generic-content"> <!--not a WP or php class, just 4 styling-->
                                <?php the_excerpt(); ?>
                                <p><a class="btn btn--blue" href="<?php the_permalink() ?>">Continue Reading &raquo;</a></p>
                            </div>
                        </div>
                    <?php }
                        echo paginate_links(); //pagination for blog posts
                    ?>
        </div>

    <?php get_footer();

?>