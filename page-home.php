<?php get_header() ?>
<div class="row">
    <?php
    $args_cat = array(
        'include' => '1, 5, 7'
    );
    $categories = get_categories($args_cat);
    foreach ($categories as $category) :
        # code...
        $args = array(
            'type' => 'post',
            'posts_per_page' => 1,
            'category__in' => $category->term_id,
            'category__not_in' => array(6)
        );
        $lastBlog = new WP_Query($args);
        if ($lastBlog->have_posts()) :
            while ($lastBlog->have_posts()) : $lastBlog->the_post(); ?>
                <div class="col-xs-12 col-sm-4">
                    <?php get_template_part('content', 'featured'); ?>
                </div>
    <?php
            endwhile;
        endif;
    endforeach;
    wp_reset_postdata();
    ?>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-8">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <?php //echo 'This is post Format: '.get_post_format(); 
                ?>
                <?php get_template_part('content', get_post_format()); ?>
        <?php
            endwhile;
        endif;

        $lastBlog = new WP_Query('type=post&posts_per_page=2&offset=1');
        if ($lastBlog->have_posts()) :
            while ($lastBlog->have_posts()) : $lastBlog->the_post();
                get_template_part('content', get_post_format());
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
        <hr>
        <?php

        $lastBlog = new WP_Query('type=post&posts_per_page=-1&cat=5');
        if ($lastBlog->have_posts()) :
            while ($lastBlog->have_posts()) : $lastBlog->the_post();
                get_template_part('content', get_post_format());
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar() ?>
    </div>
</div>
<?php get_footer() ?>