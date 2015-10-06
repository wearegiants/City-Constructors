<div class="featured equal">

<?php

if( have_rows('featured_project') ):
while ( have_rows('featured_project') ) : the_row();

$post_object = get_sub_field('project');
if( $post_object ): 
$post = $post_object;
setup_postdata( $post ); 

$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
$thumb_url = $thumb_url_array[0];

if ( get_sub_field('display') == "default" ) { $width = 'fs-cell fs-lg-6 fs-md-3 fs-sm-3';  $height = 'regular'; } 
if ( get_sub_field('display') == "tall" )    { $width = 'fs-cell fs-lg-6 fs-md-3 fs-sm-3';  $height = 'tall'; } 
if ( get_sub_field('display') == "wide" )    { $width = 'fs-cell fs-lg-12 fs-md-6 fs-sm-3'; $height = 'medium'; } 

?>

<div class="project project-featured slide fs-cell fs-lg-10 fs-lg-push-1 fs-md-6 fs-sm-3 fs-contained">
  <a href="<?php the_permalink(); ?>" class="coverlink"></a>
  <div class="project-featured_meta wrapper">
    <span class="project-featured_subtitle">Featured</span>
    <h3 class="project-featured_subtitle"><?php the_title(); ?></h3>
  </div>
  <?php the_post_thumbnail('gallery-lg', array('class' => 'img-responsive')); ?>
</div>

<?php wp_reset_postdata(); endif; endwhile; endif; ?>

</div>