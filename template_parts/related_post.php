<div class="col-sm-3">
  <?php if(has_post_thumbnail()): ?>
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('medium', array(
        'class'  =>  'post_thumb'
      )); ?>
    </a>
  <?php endif; ?>
  <div class="post_related_title">
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </div>
</div>