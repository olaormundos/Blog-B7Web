<?php get_header(); ?>
  <?php
    if(is_home()){
      get_template_part('template_parts/banner-home');
    }else{
      get_template_part('template_parts/banner-single');
    }
  ?>
  <div class="depoimentos">
    <div class="container">
      <div class="col-sm-6">
        <?php
          $d     = rand(1, 5);
          $txt   = get_theme_mod('olmb7_depo'. $d .'_txt');
          $url   = get_theme_mod('olmb7_depo'. $d .'_url');
          $autor = get_theme_mod('olmb7_depo'. $d .'_autor');
          $url   = wp_get_attachment_image_src($url);
        ?>
        <img src="<?php echo $url[0]; ?>" alt="">
        <i>"<?php echo $txt; ?>"</i><br />
        <strong><?php echo $autor; ?></strong>
      </div>
      <div class="col-sm-6">
        <?php
          $d2  =  rand(1,5);
          while($d2 == $d){
            $d2  =  rand(1,5);
          }
          $txt   = get_theme_mod('olmb7_depo'. $d2 .'_txt');
          $url   = get_theme_mod('olmb7_depo'. $d2 .'_url');
          $autor = get_theme_mod('olmb7_depo'. $d2 .'_autor');
          $url   = wp_get_attachment_image_src($url);
        ?>
        <img src="<?php echo $url[0]; ?>" alt="">
        <i>"<?php echo $txt; ?>"</i><br />
        <strong><?php echo $autor; ?></strong>
      </div>
    </div>
  </div>
  <section>
    <div class="container">
      <?php
        if(have_posts()): while(have_posts()): the_post();
            get_template_part('template_parts/post');
          endwhile;
        endif;
      ?>
    </div>
  </section>
<?php get_footer(); ?>