<?php if( have_rows('positions') ): while ( have_rows('positions') ) : the_row(); ?>

<div class="fs-cell fs-lg-full fs-md-6 fs-sm-3">
<a class="btn btn-link btn-icon btn-fullwidth btn-first ss-gizmo ss-plus" target="blank" href="<?php the_sub_field('url'); ?>"><?php the_sub_field('job'); ?></a>
</div>

<?php endwhile; endif;?>

