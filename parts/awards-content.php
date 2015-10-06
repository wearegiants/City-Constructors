
<?php
  $args = array(
    'showposts'        => 6,
    'post_type'        => 'award',
    'order'            => 'ASC',
    'orderby'          => 'menu_order'  
  );

  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);

?>

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<?php include locate_template('parts/award-widget.php' );?>
<?php endwhile; ?>

<?php
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>