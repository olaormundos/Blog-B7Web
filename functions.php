<?php
//include
require get_template_directory(). '/include/setup.php';

//Hookes
add_action("wp_enqueue_scripts", "olmb7_theme_styles");
add_action("after_setup_theme","olmb7_after_setup");
add_action("widgets_init", "olmb7_widgets");