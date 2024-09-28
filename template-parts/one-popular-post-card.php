<div class="popular-post__card">
    <h4 class="popular-post__title"><?php the_title(); ?></h4>
    <p class="popular-post__views-number">Number of views: </p>
    <p class="popular-post__excerpt"><?php the_content(); ?></p>
    <a href="<?php echo get_the_permalink(); ?>" class="popular-post__link-text">Read more...</a>
</div>

       