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

?>

<?php include locate_template('parts/project-related-item.php' ); ?>

<?php } wp_reset_postdata(); ?>