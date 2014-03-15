<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <div class="post_content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
<?php endif; ?>