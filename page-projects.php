<?php Themewrangler::setup_page();get_header(/***Template Name: About */); ?>

<?php include locate_template('parts/page-header.php' );?>

<div class="fs-row">
  <div class="fs-cell fs-all-full">
    <div class="page-content bg-color--gray fs-row">
      <div class="fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
        <div class="fs-cell fs-lg-half fs-md-4 fs-sm-3 fs-contained">
          <hr class="invisible">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="fs-cell fs-lg-12 fs-md-5 fs-sm-3 fs-centered">
        <hr class="invisible compact">
        <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3 fs-contained  project-wrapper">
          <div class="fs-cell fs-lg-1 fs-md-6 fs-sm-3 fs-contained project-nav">
            <nav>
              <a href="#" class="ss-gizmo ss-navigateup"></a>
              <a href="#" class="ss-gizmo ss-navigatedown"></a>
            </nav>
          </div>
          <?php include locate_template('parts/projects-featured.php' ); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="fs-row">
  <div class="fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
    
      <hr class="invisible">
      <h3 class="section-title"><span>Selected Projects</span></h3>
      <br>
      <!--
      <a href="#" class="selected">All Projects</a>
      <a href="#">Mixed Use</a>
      -->
    
    <div class="fs-row gallery packed">
      <?php include locate_template('parts/projects-all.php' ); ?>
    </div>
  </div>  
</div>

<?php get_footer(); ?>

