<?php if( have_rows('related_projects') ): while ( have_rows('related_projects') ) : the_row(); ?>
<?php $post_object = get_sub_field('related_project'); if( $post_object ):  ?>
<?php $post = $post_object; setup_postdata( $post ); ?>
<?php include locate_template('parts/project-small.php' ); ?>
<?php wp_reset_postdata(); endif; ?>
<?php endwhile; endif; ?>