<div class="fs-row">
<div class="gallery">
<?php $images = get_field('project_gallery'); if( $images ): ?>
<?php foreach( $images as $image ): ?>

  <?php

    $size = 'large';
    $width = $image['sizes'][ $size . '-width' ];
    $height = $image['sizes'][ $size . '-height' ];

    if ( $height > $width) {

      $orient = 'tall';

    } else {

      $orient = 'medium';

    }

    if ($post->post_name == 'tennant-improvements') {
      $width = 'fs-lg-half fs-md-half fs-sm-half';
    } else  {
      $width = 'fs-lg-4 fs-md-2 fs-sm-half';  
    }

  ?>


  <div class="gallery-item fs-cell <?php echo $width; ?>">
    <a class="gallery-zoom" href="<?php echo $image['url']; ?>" data-lightbox-gallery="gallery">
      <span class="gallery-item__bg background section <?php echo $orient; ?>" data-background-options='{"source":"<?php echo $image['sizes']['large']; ?>"}'></span>
    </a>
  </div>

<?php endforeach; ?>
<?php endif; ?>
</div>
</div>