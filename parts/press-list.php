<hr class="invisible compact">
<div class="fs-row">

<?php
  $args = array(
    'showposts'        => 99,
    'post_type'        => 'press',
    'order'            => 'ASC',
    'orderby'          => 'menu_order',
    'offset'           => 3
  );

  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);

?>

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<?php 
  $pressLink = get_the_permalink();

  if (get_field('press_url')) {

    $pressLink = get_field('press_url');

  }

  if (get_field('press_download')) {

    $pressLink = get_field('press_download');

  }
?>

<div class="fs-cell fs-lg-half fs-md-half fs-sm-3">
  <div class="wrapper press-list--item ">
    <div class="fs-row">
      <div class="fs-cell fs-all-half">
        <a href="<?php echo $pressLink; ?>">
        <span class="ss-gizmo ss-file icon"></span>
        <?php the_title();?>
        </a>
      </div>
      <div class="fs-cell fs-all-half text-right">
        <span class="color-lightgray entry-date"><?php the_field('press_date'); ?></span>
      </div>
    </div>
  </div>
</div>

<?php endwhile; ?>


<?php
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>

</div>