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
              <hr />
              <h3>Posts relacionados</h3>
              <div class="row">
                <?php
                  $categories = get_the_category();
                  $olmb7_query = new WP_Query(array(
                    'posts_per_page'  => 4,
                    'post__not_in'    => array( $post->ID ),
                    'cat'             => $categories[0]->term_id
                  ));
                  if($olmb7_query->have_posts()){
                    while($olmb7_query->have_posts()){
                      $olmb7_query->the_post();
                      get_template_part('template_parts/related_post');
                    }
                  }
                  wp_reset_postdata();
                ?>
                <hr />
                <?php
                  if(comments_open()){
                    comments_template();
                  }
                ?>
            <?php endwhile;
            endif;
          ?>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>