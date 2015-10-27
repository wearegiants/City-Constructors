
<?php
  $args = array(
    'showposts'        => -1,
    'post_type'        => 'page',
    'post_parent'      => $post->ID,
    'cat'              => 7,
    'order'            => 'ASC',
    'orderby'          => 'menu_order'  
  );

  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);

  while ($wp_query->have_posts()) : $wp_query->the_post();
?>

<div <?php post_class('bio bio-primary fs-cell fs-lg-half fs-md-half fs-sm-half fs-xs-3 fs-contained'); ?>>
  <div class="bio-primary_image">
    <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
    <div class="bio-primary_title">
      <div class="fs-cell fs-lg-half fs-md-3 fs-sm-half fs-contained fs-right text-center"><?php the_title(); ?></div>
    </div>
    <div class="bio-primary_image--bg"></div>
  </div>
  <br>
  <div class="fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-contained">
  <?php the_excerpt(); ?>
  </div>
  <?php 
    $myvalue = get_the_title();
    $arr = explode(' ',trim($myvalue));
  ?>
    
  <a class="btn btn-link btn-icon btn-first ss-gizmo ss-plus sideload" href="<?php the_permalink(); ?>">More about <?php echo $arr[0]; ?></a>
</div>

<?php endwhile; ?>

<?php
  $wp_query = null;
  $wp_query = $temp;  // Reset
  wp_reset_query();
?>

