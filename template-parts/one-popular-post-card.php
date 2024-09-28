<div class="popular-post__card">
    <h4 class="popular-post__title">
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>  
    </h4>

    <p class="popular-post__views-number"><?php echo get_post_views(get_the_ID()); ?></p>
    <div class="popular-post__limited-content"><?php the_content(); ?></div>
</div>
