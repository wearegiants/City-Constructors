<?php if( have_rows('corporate_profile') ): while ( have_rows('corporate_profile') ) : the_row(); ?>

<?php 
  if ( get_sub_field('Width') == "half" ){ $width = 'half'; } 
  if ( get_sub_field('Width') == "full" ){ $width = 'full'; } 
?>

<div class="cp-item fs-cell fs-lg-<?php echo $width; ?> fs-md-6 fs-sm-3">
  <header class="cp-header">
    <div class="cp-icon"><img src="/assets/img/circle.svg" class="img-responsive"></div>
    <h4 class="cp-title"><?php the_sub_field('title'); ?></h4>
  </header>
  <?php the_sub_field('description'); ?>
</div>

<?php endwhile; endif; ?>