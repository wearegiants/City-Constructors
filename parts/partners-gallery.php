<div class="carousel">

<?php 

$images = get_field('gallery');
if( $images ): 
$i = 1;
echo '<div class="slide">';
?>

<?php foreach( $images as $image ): ?>
<div class="partner">
  <a href="#">
    <?php echo $counter; ?>
    <img class="img-responsive" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
  </a>
</div>

<?php if($i % 6 == 0) {echo '</div><div class="slide">';} ?>

<?php $i++; // add one per row ?>  
<?php endforeach; ?>
<?php endif; ?>
<?php echo '</div>'; ?>

</div>