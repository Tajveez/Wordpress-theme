<article>
    <h1><?php the_title(); ?></h1>
    <small>Posted on: <?php the_time('F j, Y'); ?>, in <?php the_category(' ');  ?> || <?php the_tags(); ?> || <?php edit_post_link() ?></small>
    <hr />
    <?php if (has_post_thumbnail()) : ?>
        <div class="thumbnail-img"><?php the_post_thumbnail('thumbnail') ?></div>
    <?php endif; ?>
    <p><?php the_content(); ?></p>
    <hr />
</article>