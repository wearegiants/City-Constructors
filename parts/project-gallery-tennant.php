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

      $orient = '';

    }

    $width = 'fs-lg-4 fs-md-2 fs-sm-half';

  ?>

  <div class="project project-tennant-improvements packed fs-cell fs-all-half">
    <a href="<?php echo $image['url']; ?>" class="gallery-zoom coverlink" data-lightbox-gallery="gallery"></a>
    <div class="project-meta wrapper top cover">
      <?php if($image['caption']): ?><span><?php echo $image['caption']; ?></span><?php endif; ?>
      <h3 class="project-title"><?php echo $image['title']; ?></h3>
    </div>
    <div class="project-image <?php echo $orient; ?> background" data-background-options='{"source":"<?php echo $image['sizes']['large']; ?>"}'></div>
  </div>

<?php endforeach; ?>
<?php endif; ?>
</div>
</div>