<?php get_header();

    while(have_posts()) {
        the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
        <hr>
    <?php   }

    get_footer()

?>


<!-- Arrays -->
<!-- <?php

    $names = array('Brad', 'Angelina', 'Simon', 'Whitney', 'Henry');

    $count = 0;
    
    while ($count < count($names)) {
        echo "<li>Hi, my name is $names[$count]</li>";
        $count++;
    }

?> -->

<!-- Functions (in General) -->
<!-- <?php
    function myFirstFunction() {
        echo 2 + 2;
        echo "<p>Hello, this is my first function</p>";
    }

    function greet($name, $color) {
        echo "<p>Hi, my name is $name, and my favorite color is $color.</p>";
    }

    myFirstFunction();
    greet('Jane', 'red');
    greet('Ruth', 'aquamarine-yellow');
?>

<h1><?php bloginfo('name');?></h1>
<p><?php bloginfo('description');?></p> -->