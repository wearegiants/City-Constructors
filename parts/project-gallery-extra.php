<div class="slide">
  <div class="fs-row">
    <div class="fs-cell fs-lg-1 fs-md-1 fs-sm-hide">
      <div class="gallery-item__bg tall gallery-item__next"><span class="rotate-45">Next</span></div>
    </div>
    <div class="fs-cell fs-lg-11 fs-md-5 fs-sm-3">
      <div class="fs-row">
        <div class="gallery packed">
          <?php $images = get_field('before_gallery'); if( $images ): ?>
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

            ?>

            
            <div class="gallery-item packed fs-cell fs-lg-4 fs-md-2 fs-sm-half">
              <a class="gallery-zoom" href="<?php echo $image['url']; ?>" data-lightbox-gallery="gallery">
                <span class="gallery-item__bg background section <?php echo $orient; ?>" data-background-options='{"source":"<?php echo $image['sizes']['large']; ?>"}'></span>
              </a>
            </div>

          <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>