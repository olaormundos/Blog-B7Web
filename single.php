<?php get_header();
  get_template_part('template_parts/banner-single');
?>
  <section>
    <div class="container">
      <div id="<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
          if(have_posts()): while(have_posts()): the_post(); ?>
              <div class="fotodestaque">
                <?php the_post_thumbnail(); ?>
              </div>
              <h1>
                <?php the_title(); ?>
              </h1>
              <div class="post_content">
                <?php the_content(); ?>
              </div>
           <?php endwhile;
          endif;
        ?>
      </div>
    </div>
  </section>
<?php get_footer(); ?>