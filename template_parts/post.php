<article <?php post_class(); ?>>
  <div class="row">
    <div class="col-sm-6">
      <a href="<?php the_permalink(); ?>">
        <?php
          if(has_post_thumbnail()):
            the_post_thumbnail(
              'large',
              array(
                'class'   =>  'post_thumb'
              )
            );
          endif;  
        ?>
      </a>
    </div>
    <div class="col-sm-6">
      <div class="post_title">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </div>
      <div class="post_excerpt">
        <?php the_excerpt(); ?>
      </div>
      <div class="post_readmore">
        <a href="<?php the_permalink(); ?>">
          <div class="post_button">
            Clique aqui para saber mais
          </div>
        </a>
      </div>
    </div>
  </div>
</article>