<?php

if( have_rows('featured') ):
while ( have_rows('featured') ) : the_row();

if ( get_sub_field('size') == "default" ) { $itemWidth = 'fs-cell fs-lg-6 fs-md-3 fs-sm-3';  $itemHeight = 'regular'; } 
if ( get_sub_field('size') == "tall" )    { $itemWidth = 'fs-cell fs-lg-6 fs-md-3 fs-sm-3';  $itemHeight = 'tall'; } 
if ( get_sub_field('size') == "wide" )    { $itemWidth = 'fs-cell fs-lg-12 fs-md-6 fs-sm-3'; $itemHeight = 'medium'; } 

$image = get_sub_field('image'); if( !empty($image) ): 

$url = $image['url'];
$title = $image['title'];
$alt = $image['alt'];
$caption = $image['caption'];

$size = 'large';
$thumb = $image['sizes'][ $size ];
$width = $image['sizes'][ $size . '-width' ];
$height = $image['sizes'][ $size . '-height' ];

$thumb_url = $thumb;

endif;

?>

<div class="featured-item <?php echo $itemWidth; ?>">
  <div class="project">
    <a href="<?php the_sub_field('link'); ?>" class="coverlink"></a>
    <div class="project-meta wrapper cover">
      <h3 class="project-title"><?php the_sub_field('title'); ?></h3>
      <?php the_sub_field('subtitle'); ?>
    </div>
    <div class="project-meta wrapper bottom">View Project</div>
    <div class="project-image <?php echo $itemHeight; ?> background" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'></div>
  </div>
</div>

<?php endwhile; endif; ?>
