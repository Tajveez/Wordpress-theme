<?php
/*
    Template Name: Page No Title
*/

get_header() ?>
    <?php
    if(have_posts()): 
         while(have_posts()): the_post(); ?>
            <!-- <h1><?php the_title(); ?></h1> -->
            <!-- <small>Posted on: <?php the_time('F j, Y'); ?>, in <?php the_category(); ?></small> -->
            <hr/>
            <hr/>

            <p><?php the_content(); ?></p>
            <hr/>
            <hr/>
     <?php 
         endwhile;
     endif; ?>
<?php get_footer() ?>