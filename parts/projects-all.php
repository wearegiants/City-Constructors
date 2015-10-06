<?php

if( have_rows('project_list') ):
while ( have_rows('project_list') ) : the_row();

$post_object = get_sub_field('project');
if( $post_object ): 
$post = $post_object;
setup_postdata( $post ); 

$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
$thumb_url = $thumb_url_array[0];

if ( get_sub_field('display') == "default" ) { $width = 'fs-cell fs-lg-6 fs-md-3 fs-sm-half';  $height = 'regular'; } 
if ( get_sub_field('display') == "tall" )    { $width = 'fs-cell fs-lg-6 fs-md-3 fs-sm-half';  $height = 'tall'; } 
if ( get_sub_field('display') == "wide" )    { $width = 'fs-cell fs-lg-12 fs-md-6 fs-sm-half'; $height = 'medium'; } 

?>

<?php include locate_template('parts/project-small.php' ); ?>

<?php wp_reset_postdata(); endif; endwhile; endif; ?>
