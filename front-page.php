<?php get_header(); ?>

<main class="main">

    <!-- Section with 3 latest posts -->
    <section class="latest-posts-section section" id="latest">
        <div class="container">
            <h2 class="latest-posts__title section-title"><?php echo get_post_meta( $post->ID, 'latest-posts__title', true ); ?></h2>
            <article class="latest">

                <?php

                $args = array(
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $latest_posts = new WP_Query( $args );

                if ($latest_posts->have_posts()) : ?>

                    <div class="latest-posts">

                        <?php while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
                        
                            <?php get_template_part( 'template-parts/one-latest-post-card' ); ?>

                        <?php endwhile; ?>

                    </div>   

                    <?php wp_reset_postdata();   
                        
                else : ?>

                    <p>No posts.</p>   

                <?php endif; ?>

            </article>

        </div>
    </section>        

    <!-- Section with 3 most popular posts   -->
    <section class="popular-posts-section section" id="popular">
        <div class="container">
            <h2 class="popular-posts__title section-title"><?php echo get_post_meta( $post->ID, 'popular-posts__title', true ); ?></h2>
            <article class="popular">

                <?php

                $args = array(
                    'posts_per_page' => 3,
                    'meta_key' => 'post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                );

                $popular_posts = new WP_Query( $args );

                if ( $popular_posts->have_posts() ) : ?>

                    <div class="popular-posts">

                        <?php while( $popular_posts->have_posts() ) : $popular_posts->the_post(); ?>

                            <?php get_template_part( 'template-parts/one-popular-post-card' ); ?>

                        <?php endwhile; ?>

                    </div>   

                    <?php wp_reset_postdata();   
                        
                else : ?>

                    <p>No posts.</p>   

                <?php endif; ?>

            </article>   
    
        </div>
    </section>

<!-- Section with contact form -->
    <section class="contact-section section" id="contact">
        <div class="container">
            <div class="contact__wrapper">
                <!-- <div class="contact__text">Let's keep in touch and open the horizons together!</div> -->
                <p class="contact__text"><?php echo get_post_meta( $post->ID, 'contact__text', true ); ?></p>
                <form class="contact__form" id="contact-form">
                    <div class="form__body">
                        <div class="form__input">
                            <input type="email" id="email" name="email" class="form__input-field" placeholder="Your email*" required>
                        </div>
                    </div>
                    <button type="submit" class="form__button contact-me-btn">
                            Contact me
                    </button>
                </form>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
