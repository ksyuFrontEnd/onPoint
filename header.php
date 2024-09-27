<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container container">
                <div class="logo">
                    <?php 
                    if ( has_custom_logo() ) : ?>
                        <a href="<?php echo home_url(); ?>">
                            <?php echo get_custom_logo(); ?>
                       </a>
                    <?php endif;
                    ?>
                </div>
                <div class="header__menu menu">
                    <div class="menu__icon">
                        <!-- .menu__icon::before -->
                    </div>
                    <nav class="menu__body">
                        <?php 
                            wp_nav_menu ( array(
                                'theme_location'       => 'header',                          
                                'container'            => false,    
                                'menu_id'              => false,    
                                'echo'                 => true,
                                'depth'                => 0,       
                                'items_wrap'           => '<ul id="%1$s" class="menu_list %2$s">%3$s</ul>',  
                            )); 
                        ?>
                    </nav>
                </div>
            </div>   
        </header>