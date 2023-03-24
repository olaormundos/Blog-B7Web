<?php
function olmb7_theme_styles(){
  //Css
    wp_enqueue_style("bootstrap_css", get_template_directory_uri(). '/assets/css/bootstrap.min.css');
    wp_enqueue_style("google_font_lato", "https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    wp_enqueue_style("template_scss", get_template_directory_uri(). '/assets/scss/template.scss');
    wp_enqueue_style("estilos_css", get_template_directory_uri(). '/assets/css/estilos.css', array('bootstrap_css', 'google_font_lato'));

  //JavaScript
    wp_enqueue_script("bootstrap_js", get_template_directory_uri(). '/assets/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script("scripts_js", get_template_directory_uri(). '/assets/js/scripts.js', array('jquery', 'bootstrap_js'), false, true);
}

function olmb7_after_setup(){
  add_theme_support("title-tag");
  add_theme_support("post-thumbnails");
  add_theme_support("custom-logo");

  register_nav_menu("top", "Menu Superior");
}

function olmb7_widgets(){

}