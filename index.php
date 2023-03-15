<?php get_header(); ?>
  <?php
    if(is_home()){
      get_template_part('template_parts/banner-home');
    }else{
      get_template_part('template_parts/banner-single');
    }
  ?>
<?php get_footer(); ?>