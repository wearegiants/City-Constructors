<div class="press-item">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail('gallery-md', array('class' => 'img-responsive')); } ?>
<h4 class="press-title"><?php the_title(); ?></h4>
<?php 

  $pressLink = get_the_permalink();

  if (get_field('press_url')) {

    $pressLink = get_field('press_url');

  }

  if (get_field('press_download')) {

    $pressLink = get_field('press_download');

  }

?>
<a href="<?php echo $pressLink; ?>" class="btn btn-link btn-first btn-icon ss-gizmo ss-plus">Learn More</a>
</div>