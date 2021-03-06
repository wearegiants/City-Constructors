
<?php
  $args = array(
    'showposts'        => 3,
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
<h4 class="section-title"><span>Latest Press</span></h4>
<br>
<div id="press" class="fs-row carousel" data-carousel-options='{"show":{"740px":2,"980px":3,"1220px":3}}'>

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<?php include locate_template('parts/press-item.php' );?>
<?php endwhile; ?>

</div>
</div>

<?php
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>