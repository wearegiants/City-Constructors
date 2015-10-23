
<?php
  $args = array(
    'showposts'        => 6,
    'post_type'        => 'press',
    'order'            => 'ASC',
    'orderby'          => 'menu_order'  
  );

  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);

?>

<div class="fs-cell fs-lg-10 fs-md-6 fs-sm-3 fs-centered">
<div id="press" class="carousel" data-carousel-options='{"show":3}'>

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<?php include locate_template('parts/press-item.php' );?>
<?php endwhile; ?>

</div>
</div>

<?php
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>