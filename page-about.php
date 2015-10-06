<?php Themewrangler::setup_page();get_header(/***Template Name: About */); ?>

<?php include locate_template('parts/page-header.php' );?>

<div class="page">
  <div class="fs-row">
    <div class="fs-cell fs-all-full">
      <div class="page-content bg-color--gray fs-row">
        <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
          <div class="fs-cell fs-lg-half fs-md-6 fs-sm-3 fs-contained">
            <hr class="invisible">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
          </div>
          <div class="fs-cell fs-lg-half fs-md-6 fs-sm-3 fs-contained text-right">
            <hr class="invisible fs-md-hide fs-sm-hide">
            <br class="fs-md-hide fs-sm-hide">
            <a href="#" class="btn btn-primary btn-icon ss-gizmo ss-download">View Our Qualifications Package</a>
          </div>
        </div>
        <hr class="invisible compact fs-cell">
        <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
          <?php include locate_template('parts/about-bios-primary.php' ); ?>
          <hr class="invisible">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Selected Personel -->

<div class="fs-row">
  <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
    <header class="section compact">
      <h4 class="title"><span>Selected Management Personnel</span></h4>
    </header>
    <div class="fs-row">
      <?php include locate_template('parts/about-bios-secondary.php' ); ?>
    </div>
  </div>  
</div>

<?php get_footer(); ?>

