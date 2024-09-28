<article class="popular">
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <h2><?php the_excerpt(); ?></h2>
        
    <?endwhile; else : ?>

        <p>No posts.</p>
    
    <?php endif; ?>
</article>