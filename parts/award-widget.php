<div class="widget fs-cell fs-lg-half fs-md-4 fs-sm-2 fs-xs-3">
  <div class="widget-wrap fs-row">
    <div class="widget-image__wrapper equal fs-cell fs-lg-4 fs-md-2 fs-sm-1">
      <?php the_post_thumbnail('gallery-sm', array('class' => 'img-responsive widget-image__img')); ?>
    </div>
    <div class="widget-content equal fs-cell fs-lg-8 fs-md-4 fs-sm-2">
      <div class="wrapper widget-content__centered">
        <span class="title"><?php the_title(); ?></span><br>
        <span><?php the_field('title'); ?></span><br>
        <a href="<?php the_permalink(); ?>" class="modal-bio btn btn-link btn-icon btn-first ss-gizmo ss-plus">Learn More</a>
      </div>
    </div>
    <div class="widget-bg"></div>
  </div>
  <hr class="invisible">
</div>