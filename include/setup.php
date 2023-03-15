<?php
function olmb7_theme_styles(){
  //Css
    wp_enqueue_style("bootstrap_css", get_template_directory_uri(). '/assets/css/bootstrap.min.css');
    wp_enqueue_style("estilos_css", get_template_directory_uri(). '/assets/css/estilos.css', array('bootstrap_css'));

  //JavaScript
    wp_enqueue_script("bootstrap_js", get_template_directory_uri(). '/assets/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script("scripts_js", get_template_directory_uri(). 'scripts/assets/js/.js', array('jquery', 'bootstrap_js'), false, true);
}

function olmb7_after_setup(){
  add_theme_support("title-tag");
  add_theme_support("post-thumbnails");
  add_theme_support("custom-logo");

  register_nav_menu("top", "Menu Superior");
}

function olmb7_widgets(){

}