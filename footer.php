<footer class="footer">
        <div class="footer__container container">

            <!-- Social media links can be changed with the help of WP Customizer -->
            <?php $onpoint_footer_options = onpoint_footer_options(); ?>

            <div class="footer__social-icons">

                <?php if( !empty( $onpoint_footer_options['facebook'] ) ) : ?>
                    <div class="social-icon icon__facebook">
                        <a href="<?php echo $onpoint_footer_options['facebook']; ?>" target="_blank"></a>
                    </div>
                <?php endif; ?>

                <?php if( !empty( $onpoint_footer_options['instagram'] ) ) : ?>
                    <div class="social-icon icon__instagram">
                        <a href="<?php echo $onpoint_footer_options['instagram']; ?>" target="_blank"></a>
                    </div>
                <?php endif; ?>

                <?php if( !empty( $onpoint_footer_options['email'] ) ) : ?>
                    <div class="social-icon icon__email">
                        <a href="mailto:<?php echo $onpoint_footer_options['email']; ?>" target="_blank"></a>
                    </div>
                <?php endif; ?>

            </div>

            <div class="footer__menu">
                <nav class="footer__menu-body">
                    <?php 
                        wp_nav_menu( [
                            'theme_location'       => 'footer',                          
                            'container'            => false,    
                            'menu_id'              => false,    
                            'echo'                 => true,
                            'depth'                => 0,       
                            'items_wrap'           => '<ul id="%1$s" class="footer__menu-list %2$s">%3$s</ul>',  
                            ] ); 
                    ?>
                </nav>
            </div>
            <div class="footer__bottom">
                <p>@ 2024 Traveller. All Rights Reserved</p>
            </div>

        </div>
    </footer>

    <?php wp_footer(); ?>
    </div>
</body>

</html>