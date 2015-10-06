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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.0847603153943!2d-118.23366980000002!3d34.04169680000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c63cebaabcf9%3A0x36fa03168e3b47ae!2s500+Molino+St%2C+Los+Angeles%2C+CA+90013!5e0!3m2!1sen!2sus!4v1443917698148" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <?php endif; ?>
          <hr class="invisible fs-cell fs-lg-full fs-md-full fs-sm-full">
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>