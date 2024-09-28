<?php get_header(); ?>

<main class="main">
    <!-- Section with 3 latest posts -->
    <section class="last-posts-section section" id="latest">
        <div class="container">

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

                        <?php endwhile; else : ?>

                            <p>No posts.</p>
                    </div>
                    
                <?php wp_reset_postdata();
                    
                endif; ?>

            </article>   
    
        </div>
    </section>

<!-- Section with contact form -->
    <section class="contact-form-section section" id="contact-us">
        <div class="container">
            <form id="contact-form">
                <input type="email" id="email" name="email" required placeholder="Your email">
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

</main>

<?php get_footer(); ?>
