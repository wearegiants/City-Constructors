<?php Themewrangler::setup_page();get_header(); ?>

<?php if (!is_single(232)): ?>

<div class="project">
<div class="fs-row">

  <?php 
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
    $thumb_url = $thumb_url_array[0];
  ?>

  <div class="fs-cell fs-all-full">
    <header class="project-header background section" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'>
      <div class="project-header__content">
        <div class="fs-row">
          <div class="fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
            <h1 class="project-header__title"><?php the_title(); ?></h1>
            <p class="emphasized"><?php echo get_the_excerpt(); ?></p>
            <a href="#project-content" class="ss-gizmo ss-navigatedown btn btn-first btn-icon">More Info</a>
          </div>
        </div>
      </div>
    </header>
  </div>

  <div class="fs-cell fs-all-full">
  <div id="project-content" class="project-content">
  <div class="fs-row">
  <div class="fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
    <div class="fs-row">
    <div class="fs-cell fs-lg-8 fs-md-4 fs-sm-3">
    <div class="section">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
    </div>
    </div>
    <!-- Project Details -->
    <div class="fs-cell fs-lg-3 fs-md-2 fs-sm-3 fs-right">
    <div class="section">
    <p>Specifications</p>
    <ul class="project-details">
      <li><span>Size</span><span class="right">289,000 SF</span></li>
      <li><span>Size</span><span class="right">289,000 SF</span></li>
      <li><span>Size</span><span class="right">289,000 SF</span></li>
      <li><span>Size</span><span class="right">289,000 SF</span></li>
    </ul>
    </div>
    <!-- /Project Details -->
    </div>
  </div>
  </div>
  </div>
  </div>

  <div class="fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
  <div class="section section-compact">
  More Photos
  </div>
  </div>

  <?php if (get_field('enable_before_gallery')): ?>
  <?php include locate_template('parts/project-gallery-extra.php' ); ?>
  <?php else: ?>
  <?php include locate_template('parts/project-gallery.php' ); ?>
  <?php endif; ?> 

  <div class="fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
  <div class="section section-compact">
  Similar Projects
  </div>
  </div>

  <?php if (get_field('manual_related_projects')): ?>
  <?php include locate_template('parts/project-related-manual.php' ); ?>
  <?php else: ?>
  <?php include locate_template('parts/project-related.php' ); ?>
  <?php endif; ?> 

</div>
</div>

<?php else: ?>

<?php include locate_template('parts/project-tennant.php' ); ?>

<?php endif; ?>

<?php get_footer(); ?>