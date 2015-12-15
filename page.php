<?php Themewrangler::setup_page();get_header(); ?>

<?php include locate_template('parts/page-header.php' );?>

<div class="page">
  <div class="fs-row">
    <div class="fs-cell fs-all-full">
      <div class="page-content bg-color--gray">
        <div class="fs-row">
          <hr class="invisible fs-cell fs-lg-full fs-md-hide fs-sm-hide">
          <div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="page-content_image"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); } ?></div>
            <div class="page-content_copy"><?php the_content(); ?></div>
            <?php endwhile; endif; ?>
            <?php include locate_template('parts/page-modules.php' ); ?>
          </div>
          <?php if(is_page('contact')): ?>
          <div class="page-map fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
            <hr class="invisible">
            <?php the_field('google_map'); ?>
          </div>
          <?php endif; ?>
          <hr class="invisible fs-cell fs-lg-full fs-md-full fs-sm-full">
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>