<div class="fs-row">
<div class="fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
<div class="fs-row">
<?php

   $related = get_posts( 
      array( 
         'post_type'    => 'project', 
         'category__in' => wp_get_post_categories($post->ID), 
         'numberposts'  => 3, 
         'post__not_in' => array($post->ID) 
      ) 
   );

   if( $related ) foreach( $related as $post ) {
   setup_postdata($post); 


   $thumb_id = get_post_thumbnail_id();
   $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
   $thumb_url = $thumb_url_array[0];

?>

<?php include locate_template('parts/project-small.php' ); ?>

<?php } wp_reset_postdata(); ?>
</div>
</div>
</div>