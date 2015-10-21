<?php Themewrangler::setup_page();get_header(/***Template Name: Homepage */); ?>

<hr class="invisible">

<div id="home-mission">
  <div class='fs-row'>
    <div class="fs-cell fs-xl-11 fs-lg-12 fs-md-6 fs-sm-3 fs-centered">
      <div class="carousel carousel_auto_height" data-carousel-options='{"controls":false,"autoAdvance":true, "autoTime": 3000}'>
        <?php the_field('mission_statement'); ?>
      </div>
    </div>
  </div>
</div>

<hr class="invisible">

<div id="home-featured">
  <div class='fs-row'>
    <div class="fs-cell fs-xl-11 fs-lg-12 fs-md-6 fs-sm-3 fs-centered">
      <div class="fs-row">
        <?php include locate_template('parts/home-featured.php' );?>
      </div>
    </div>
  </div>
</div>

<hr class="invisible">

<div id="home-featured">
  <div class='fs-row'>
    <div class="fs-cell fs-xl-11 fs-lg-12 fs-md-6 fs-sm-3 fs-centered">
      <div class="fs-row">
        <?php include locate_template('parts/home-links.php' );?>
      </div>
    </div>
  </div>
</div>

<hr class="invisible"> 

<div id="home-quotes">
  <div class='fs-row'>
    <div class="fs-cell fs-all-full bg-color--gray section">
      <div class="fs-row">
        <div class="fs-cell fs-xl-10 fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
          <div class="fs-row">
            <header>
              <h4 class="title"><span>Client Testimonials</span></h4>
            </header>
            <hr class="invisible compact">
            <div class="carousel" data-carousel-options='{"controls":false,"autoHeight":true}'>
              <?php include locate_template('parts/home-quotes.php' );?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>