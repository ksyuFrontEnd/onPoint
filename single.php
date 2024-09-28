<?php get_header();

if (function_exists('set_post_views')) {
    set_post_views(get_the_ID());
}

?>

<main class="main">
    <section class="last-posts-section section" id="latest">
            <div class="container">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php if ( has_post_thumbnail()) : ?>

                        <div class="post__img">
                            <?php the_post_thumbnail( 'large' ); ?>  
                        </div> 

                    <?php else : ?>

                        <img src="<?php echo get_template_directory_uri() . '/assets/images/meteora-greece.jpg'; ?>" alt="Default Image" />

                    <?php endif; ?>

                    <div class="post__info">
                        <p class="post__author"><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></p>
                        <p class="post__date"><?php the_time('j F Y'); ?></p>
                    </div>

                    <h3 class="post__title"><?php the_title(); ?></h3>
                    <p class="post__content"><?php the_content(); ?></p>
                <?php endwhile; endif; ?>
                
            </div>
    </section>
</main>

<?php get_footer(); ?>