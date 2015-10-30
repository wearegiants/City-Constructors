<hr class="invisible compact">
<div class="gallery isotoped">
<?php if( have_rows('corporate_profile') ): while ( have_rows('corporate_profile') ) : the_row(); ?>

<?php 
  if ( get_sub_field('Width') == "half" ){ $width = 'half'; } 
  if ( get_sub_field('Width') == "full" ){ $width = 'full'; } 
?>

<div class="packed cp-item cp-<?php echo $width; ?> fs-cell fs-lg-<?php echo $width; ?> fs-md-6 fs-sm-3">
  <header class="cp-header clearfix">
    <div class="cp-icon"><img src="<?php the_sub_field('thumbnail'); ?>" class="img-responsive"></div>
    <h3 class="section-title cp-title"><span><?php the_sub_field('title'); ?></span></h3>
  </header>
  <div class="cp-desc">
    <?php the_sub_field('description'); ?>
  </div>
</div>

<?php endwhile; endif; ?>

</div>