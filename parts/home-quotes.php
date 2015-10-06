<?php

if( have_rows('quotes') ):
while ( have_rows('quotes') ) : the_row();

?>

<div class="quote_slide">
  <?php the_sub_field('carousel_content'); ?>
</div>


<?php endwhile; endif; ?>
