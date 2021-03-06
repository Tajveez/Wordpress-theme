<?php

get_header() ?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <small>Posted on: <?php the_time('F j, Y'); ?>, in <?php the_category(' ');  ?> || <?php the_tags(); ?> || <?php edit_post_link() ?></small>
        <hr />
        <?php if (has_post_thumbnail()) : ?>
            <div class="thumbnail-img"><?php the_post_thumbnail('thumbnail') ?></div>
        <?php endif; ?>
        <p><?php the_content(); ?></p>
        <hr />

        <div class="row">
            <div class="col-xs-6 text-left"><?php previous_post_link() ?></div>
            <div class="col-xs-6 text-right"><?php next_post_link() ?></div>
        </div>
        <?php if (comments_open()) comments_template() ?>
<?php
    endwhile;
endif; ?>
<?php get_footer() ?>