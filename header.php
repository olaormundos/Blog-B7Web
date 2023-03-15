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
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
 