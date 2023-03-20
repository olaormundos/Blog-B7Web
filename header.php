<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="top_head"></div>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <?php
                            if(has_custom_logo()){
                                the_custom_logo();
                            }
                        ?>
                    </div>
                    <div class="col-sm-10">
                        <div class="menuarea">
                            <nav>
                                <?php 
                                    if(has_nav_menu('top')){
                                        wp_nav_menu(array(
                                            'theme_location'  => 'top',
                                            'container'       => false,
                                            'fallback_cb'     => false,
                                        ));
                                    }
                                ?>
                            </nav>
                            <div class="social">
                                <?php if(get_theme_mod('olmb7_facebook')): ?>
                                    <a href="<?php echo get_theme_mod('olmb7_facebook') ?>" target="_bl
                                    ">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/fb_logo.png" alt="">
                                    </a>
                                <?php endif; ?>
                                <?php if(get_theme_mod('olmb7_instagram')): ?>
                                    <a href="<?php echo get_theme_mod('olmb7_instagram') ?>" target="_bl
                                    ">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/in_logo.png" alt="">
                                    </a>
                                <?php endif; ?>
                                <?php if(get_theme_mod('olmb7_youtube')): ?>
                                    <a href="<?php echo get_theme_mod('olmb7_youtube') ?>" target="_bl
                                    ">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/yt_logo.png" alt="">
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
 