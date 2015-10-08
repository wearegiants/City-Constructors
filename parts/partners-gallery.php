<?php 

$images = get_field('gallery');
if( $images ): ?>

<?php foreach( $images as $image ): ?>

<a href="#">
<img class="img-responsive" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
</a>
<hr class="compact invisible">

<?php endforeach; ?>
<?php endif; ?>