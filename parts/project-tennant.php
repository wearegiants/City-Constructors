<?php include locate_template('parts/page-header.php' );?>

<div class="fs-row">
  <div class="fs-cell fs-all-full">

    <div class="page-content bg-color--gray">
      <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
        <hr class="invisible">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="fs-cell fs-lg-half fs-md-half fs-sm-3 fs-contained">
          <?php the_content(); ?>
          </div>
        <?php endwhile; endif; ?>
        <hr class="invisible">
      </div>
      <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
      <?php if (get_field('enable_before_gallery')): ?>
      <?php include locate_template('parts/project-gallery-extra.php' ); ?>
      <?php else: ?>
      <?php include locate_template('parts/project-gallery-tennant.php' ); ?>
      <?php endif; ?> 
      </div>
    </div>
  </div>
</div>