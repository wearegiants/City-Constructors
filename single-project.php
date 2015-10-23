<?php Themewrangler::setup_page();get_header(); ?>

<?php if (!is_single(232)): ?>

<div class="project-wrapper">
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
            <a href="#project-content" class="ss-gizmo ss-navigatedown btn btn-first btn-icon right">More Info</a>
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
      <?php if( have_rows('project_details') ): ?>
      <?php while ( have_rows('project_details') ) : the_row(); ?>
      <li class="fs-row">
        <div class="label fs-cell fs-xl-5 fs-lg-5 fs-md-6 fs-sm-1"><?php the_sub_field('label'); ?></div>
        <div class="value fs-cell fs-xl-7 fs-lg-7 fs-md-6 fs-sm-2"><?php the_sub_field('value'); ?></div>
      </li>
      <?php endwhile; ?>
      <?php endif; ?>
    </ul>
    <div class="page-share">
      <span data-swap-target=".page-share--container" class="page-share--title ss-gizmo ss-share right share-toggle text-left">Share This</span>
      <div class="page-share--container text-left">
        <ul>
          <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php bloginfo( 'siteurl' ) ?>/<?php the_permalink(); ?>" target="blank" class="ss-social ss-facebook right">Facebook</a></li>
          <li><a href="#" target="blank" class="ss-social ss-twitter right">Twitter</a></li>
          <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php bloginfo( 'siteurl' ) ?>/<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=&source=" target="blank" class="ss-social ss-linkedin right">Linkedin</a></li>
        </ul>
      </div>
    </div>
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

  <div class="fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
  <?php if (get_field('enable_before_gallery')): ?>
  <div class="carousel" data-carousel-options='{"controls":false,"pagination":false}'>
  <?php endif; ?> 

  <?php include locate_template('parts/project-gallery.php' ); ?>

  <?php if (get_field('enable_before_gallery')): ?>
  <?php include locate_template('parts/project-gallery-extra.php' ); ?>
  </div>
  <?php endif; ?> 
  </div>
  

  <div class="related-projects">
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
</div>
</div>

<?php else: ?>

<?php include locate_template('parts/project-tennant.php' ); ?>

<?php endif; ?>

<script>
  $(document).ready(function(){
    $('.gallery-item__next').on('click', function(){ $(".carousel").carousel("next"); });
    $('.gallery-item__prev').on('click', function(){ $(".carousel").carousel("previous"); });
  });
</script>

<?php get_footer(); ?>
