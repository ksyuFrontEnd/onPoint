<?php get_header(); ?>

<main class="main">
    <!-- Section with 3 latest posts -->
    <section class="last-posts-section section" id="latest">
        <div class="container">

            <article class="latest">
                <?php if( have_posts() ) : ?>
        
                    <div class="latest-post">

                        <?php while( have_posts() ) : the_post(); ?>

                            <?php get_template_part( 'template-parts/one-latest-post-card' ); ?>

                        <?php endwhile; else : ?>

                            <p>No posts.</p>

                    </div>

                <?php endif; ?>
            </article>

        </div>
    </section> 

<!-- Section with 3 most popular posts   -->
    <section class="popular-posts-section section" id="popular">
        <div class="container">

            <?php get_template_part( 'template-parts/one-popular-post-card' ); ?>
    
        </div>
    </section>

<!-- Section with contact form -->
    <section class="contact-form-section section" id="contact-us">
        <div class="container">
            <p>contact us</p>
        </div>
    </section>

</main>


<?php get_footer(); ?>