<div class="carousel-header">
  <div class="fs-row">
    <div class="fs-cell fs-lg-7 fs-md-5 fs-sm-half">
      <h1 class="btn btn-nav carousel-header__logo">City Constructors</h1>
    </div>
    <div id="header-mobile2" class="fs-cell fs-lg-hide fs-md-1 fs-sm-half menu text-right">
      <a data-swap-target="#mobile-menu" class="mobile-toggle btn btn-hamburg btn-nav btn-first"><span class="icon"></span></a>
    </div>
  </div>
</div>

<div class="carousel">
  <?php while ( have_rows('carousel') ) : the_row(); ?>

  <?php 

    $image = get_sub_field('background_image');

  ?>

  <div class="carousel-slide background" data-background-options='{"source":"<?php echo $image['sizes']['gallery-lg']; ?>"}'>
    <div class="carousel-slide__meta section section-compact">
      <div class="fs-row">
        <div class="fs-cell fs-lg-11 fs-md-5 fs-sm-3 fs-centered">
          <?php the_sub_field('carousel_content'); ?>
          <!--<p class="emphasized">Our mission is to construct the most eye-catching and notable spaces in Los Angeles.</p>-->
          <!--<<small><a href="/projects/aka-hotel/">AKA Hotel</a></small>-->
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>
</div>
