
<?php
  $args = array(
    'showposts'        => -1,
    'post_type'        => 'page',
    'post_parent'      => $post->ID,
    'category__not_in' => 7,
    'order'            => 'ASC',
    'orderby'          => 'menu_order'  
  );

  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);

  while ($wp_query->have_posts()) : $wp_query->the_post();
?>

<?php include locate_template('parts/about-widget.php' );?>

<?php endwhile; ?>

<?php
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>
