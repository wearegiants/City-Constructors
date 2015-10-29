<?php Themewrangler::setup_page();get_header(/***Template Name: Press */); ?>

<?php include locate_template('parts/page-header.php' );?>

<div class="page">
  <div class="fs-row">
    <div class="fs-cell fs-all-full">

      <div class="page-content bg-color--gray">
        <div class="fs-row">
          <hr class="invisible fs-cell fs-lg-full fs-md-full fs-sm-3 compact">
          <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
            <div class="fs-row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="fs-cell fs-lg-half fs-md-full fs-sm-full"><?php the_content(); ?></div>
            <?php endwhile; endif; ?>
            </div>
          </div>
          <?php include locate_template('parts/press-content.php' );?>
        </div>
      </div>

      <div class="section section-forehead awards">
        <div class="fs-row">
          <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
            <h4 class="title"><span>Selected Press</span></h4>
            <?php include locate_template('parts/press-list.php' );?>
          </div>
        </div>
      </div>

      <div class="section section-forehead awards">
        <div class="fs-row">
          <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
            <h4 class="title"><span>Awards & Recognition</span></h4>
          </div>
        </div>
      </div>

      <div class="fs-row">
        <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
          <div class="fs-row">
            <?php include locate_template('parts/awards-content.php' );?>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php get_footer(); ?>