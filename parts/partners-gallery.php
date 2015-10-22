<div class="carousel" data-carousel-options='{"autoAdvance":true, "autoTime":4000, "controls":false,"infinite":true, "minWidth":"980px"}'>

<?php 

$images = get_field('gallery');
if( $images ): 
$i = 1;
echo '<div class="slide">';
?>

<?php foreach( $images as $image ): ?>
<div class="partner fs-cell fs-xl-full fs-lg-full fs-md-fourth fs-sm-third fs-contained">
    <?php echo $counter; ?>
    <img class="img-responsive" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
    <br>
</div>

<?php 
  if ( wp_is_mobile() ) {
    if($i % 2 == 0) {echo '</div><div class="slide">';} 
  } else {
    if($i % 6 == 0) {echo '</div><div class="slide">';} 
  }
?>

<?php $i++; // add one per row ?>  
<?php endforeach; ?>
<?php endif; ?>
<?php echo '</div>'; ?>

</div>