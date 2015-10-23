<div class="fs-row">
<div class="fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
<div class="fs-row">
<?php if( have_rows('related_projects') ): while ( have_rows('related_projects') ) : the_row(); ?>
<?php $post_object = get_sub_field('related_project'); if( $post_object ):  ?>
<?php $post = $post_object; setup_postdata( $post ); ?>
<?php 
  $thumb_id = get_post_thumbnail_id();
   $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
   $thumb_url = $thumb_url_array[0];
  ?>
<?php include locate_template('parts/project-small.php' ); ?>
<?php wp_reset_postdata(); endif; ?>
<?php endwhile; endif; ?>
</div>
</div>
</div>