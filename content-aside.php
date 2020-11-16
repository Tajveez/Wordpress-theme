<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail') ?></div>
<h1>Aside Post: <?php the_title(); ?></h1>
<small>Posted on: <?php the_time('F j, Y'); ?>, in <?php the_category(); ?></small>

<p><?php the_content(); ?></p>
<hr/>
