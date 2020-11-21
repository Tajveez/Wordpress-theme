<?php get_header() ?>
<div class="row">
    <div class="col-xs-12">
        <?php
        $lastBlog = new WP_Query('type=post&posts_per_page=1');
        if ($lastBlog->have_posts()) :
            while ($lastBlog->have_posts()) : $lastBlog->the_post();
                get_template_part('content', get_post_format());
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
    <div class="col-xs-12 col-sm-8">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <?php //echo 'This is post Format: '.get_post_format(); 
                ?>
                <?php get_template_part('content', get_post_format()); ?>
        <?php
            endwhile;
        endif; ?>
    </div>
    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar() ?>
    </div>
</div>
<?php get_footer() ?>