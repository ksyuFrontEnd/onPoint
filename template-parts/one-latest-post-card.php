<div class="latest-post__card">

    <?php if ( has_post_thumbnail()) : ?>

        <div class="latest-post__img">
            <?php the_post_thumbnail( 'mobile-size' ); ?>  
            <a href="<?php echo get_the_permalink(); ?>" class="latest-post__link-text">Read the post</a>
        </div> 

    <?php else : ?>

        <img src="<?php echo get_template_directory_uri() . '/assets/images/meteora-greece.jpg'; ?>" alt="Default Image" />
        <a href="<?php echo get_the_permalink(); ?>" class="latest-post__link-text">Read the post</a>

    <?php endif; ?>

    <div class="latest-post__info">
        <p class="latest-post__author"><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></p>
        <p class="latest-post__date"><?php the_time('j F Y'); ?></p>
    </div>

    <a href="<?php the_permalink(); ?>">
        <h3 class="latest-post__title"><?php the_title(); ?></h3>
    </a>
</div>
                          