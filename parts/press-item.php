<div class="press-item">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail('gallery-md', array('class' => 'img-responsive')); } ?>
<h4 class="press-title"><?php the_title(); ?></h4>
<a href="<?php the_permalink(); ?>" class="btn btn-link btn-first btn-icon ss-gizmo ss-plus">Learn More</a>
</div>