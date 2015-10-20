<div class="widget fs-cell fs-lg-half fs-md-4 fs-sm-2 fs-xs-3">
  <div class="widget-wrap fs-row">
    <a href="<?php the_sub_field('link'); ?>" class="coverlink"></a>
    <div class="widget-image__wrapper equal fs-cell fs-lg-4 fs-md-2 fs-sm-1">
      <img src="<?php echo $thumb_url; ?>" class="img-responsive widget-image__img" alt="<?php the_sub_field('title'); ?>" />
    </div>
    <div class="widget-content equal fs-cell fs-lg-8 fs-md-4 fs-sm-2">
      <div class="wrapper widget-content__centered">
        <span class="title"><?php the_sub_field('title'); ?></span><br>
        <span><?php the_sub_field('subtitle'); ?></span><br>
      </div>
    </div>
    <div class="widget-bg"></div>
  </div>
  <hr class="invisible">
</div>