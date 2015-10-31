<?php Themewrangler::setup_page();get_header(/***Template Name: What We Do */); ?>

<?php include locate_template('parts/page-header.php' );?>

<div class="page">
  <div class="fs-row">
    <div class="fs-cell fs-all-full">
      <div class="page-content bg-color--gray wwd">
        <div class="fs-row">
          <hr class="invisible fs-cell fs-lg-full fs-md-full fs-sm-full">
          <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered">
            <div class="fs-row">
              <div class="wwd fs-cell fs-lg-8 fs-md-6 fs-sm-3">
                <?php 
                  if( have_rows('what_we_do') ):
                  while ( have_rows('what_we_do') ) : the_row();
                ?>
                <div class="wwd-item fs-row absolute-parent">
                  <div class="fs-cell fs-lg-11 fs-lg-push-1 fs-md-6 fs-sm-3">
                  <div class="cp-icon"><img src="<?php the_sub_field('image'); ?>" class="img-responsive"></div>
                  <?php the_sub_field('description'); ?>
                  </div>
                  <hr class="fs-cell fs-all-full divider"/>
                  <br>
                  <div class="bg"><img src="<?php the_sub_field('image'); ?>" class="img-responsive" /></div>
                </div>
                <?php endwhile; endif; ?>
              </div>

              <div class="fs-cell fs-lg-3 fs-md-6 fs-sm-3 fs-right">
                <h3 class="section-title"><span>Selected Clients</span></h3>
                <br>
                <?php include locate_template('parts/partners-gallery.php' );?>
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