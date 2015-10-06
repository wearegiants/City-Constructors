<?php

if( have_rows('featured_links') ):
while ( have_rows('featured_links') ) : the_row();

$image = get_sub_field('image'); if( !empty($image) ): 

$url = $image['url'];
$title = $image['title'];
$alt = $image['alt'];
$caption = $image['caption'];

$size = 'gallery-sm';
$thumb = $image['sizes'][ $size ];
$width = $image['sizes'][ $size . '-width' ];
$height = $image['sizes'][ $size . '-height' ];

$thumb_url = $thumb;

endif;

?>

<?php include locate_template('parts/home-widget.php' );?>

<?php endwhile; endif; ?>
