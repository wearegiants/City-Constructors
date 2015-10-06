<?php
  $args = array(
    'showposts'        => 6,
    'post_type'        => 'job',
    'order'            => 'ASC',
    'orderby'          => 'menu_order'  
  );

  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);

?>

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="fs-cell fs-xl-half fs-lg-full fs-md-6 fs-sm-3">
<a class="btn btn-link btn-icon btn-first ss-gizmo ss-plus sideload" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>

<?php endwhile; ?>

<?php
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>