<?php
require get_template_directory(). '/include/customizer/social.php';
function olmb7_register($wp_customize){
  olmb7_social_customizer($wp_customize);
}