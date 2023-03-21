<?php
require get_template_directory(). '/include/customizer/social.php';
require get_template_directory(). '/include/customizer/depoimentos.php';
function olmb7_register($wp_customize){
  olmb7_social_customizer($wp_customize);
  olmb7_depoimentos_customizer($wp_customize);
}