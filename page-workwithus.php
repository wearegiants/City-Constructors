<?php Themewrangler::setup_page();get_header(/***Template Name: Work with Us */); ?>

<?php include locate_template('parts/page-header.php' );?>

<div class="page">
  <div class="fs-row">
    <div class="fs-cell fs-all-full">
      <div class="page-content bg-color--gray">
        <div class="fs-row">
          <hr class="invisible fs-cell fs-lg-full fs-md-hide fs-sm-hide">

          <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
            <div class="fs-row">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="page-content_copy fs-cell fs-lg-half fs-md-full fs-sm-3"><?php the_content(); ?></div>
              <?php endwhile; endif; ?>
              <div class="fs-cell fs-lg-5 fs-lg-push-1 fs-md-full fs-sm-3">
                <h4 class="section-title"><span>Open Positions</span></h4>
                <?php the_field('open_positions'); ?>
              </div>
            </div>
          </div>

          <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
            <div class="fs-row">
              <div class="fs-cell fs-lg-half fs-md-full fs-sm-3">
                <?php 
                $form_object = get_field('contact_form');
                gravity_form_enqueue_scripts($form_object['id'], true);
                gravity_form($form_object['id'], false, false, false, '', true, 1); 
                ?>
              </div>
              <div class="fs-cell fs-lg-5 fs-lg-push-1 fs-md-full fs-sm-3">
                <div class="fs-row">
                  <?php include locate_template('parts/jobs.php' );?>
                </div>
              </div>
            </div>
          </div>

          

          <hr class="invisible fs-cell fs-lg-full fs-md-full fs-sm-full">
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>