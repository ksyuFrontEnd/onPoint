<h2><?php the_title(); ?></h2>
<h2><?php the_excerpt(); ?></h2>


<div class="popular-post__card">

    <?php if ( has_post_thumbnail()) : ?>

        <div class="popular-post__img">
            <?php the_post_thumbnail( 'mobile-size' ); ?>  
            <a href="<?php echo get_the_permalink(); ?>" class="popular-post__link-text">Read the post</a>
        </div> 

    <?php else : ?>

        <img src="<?php echo get_template_directory_uri() . '/assets/images/meteora-greece.jpg'; ?>" alt="Default Image" />
        <a href="<?php echo get_the_permalink(); ?>" class="popular-post__link-text">Read the post</a>

    <?php endif; ?>

    <div class="popular-post__info">
        <p class="popular-post__author"><?php the_author(); ?></p>
        <p class="popular-post__date"><?php the_time('j F Y'); ?></p>
    </div>

    <a href="<?php the_permalink(); ?>">
        <h3 class="popular-post__title"><?php the_title(); ?></h3>
    </a>
</div>
       