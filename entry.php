<div id="post-<?php the_ID(); ?>" class="entry fs-cell fs-xl-third fs-lg-half fs-md-half fs-sm-full">
<?php if ( has_post_thumbnail() ): ?> 
<a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail('gallery-md', array('class' => 'alignleft')); ?>
</a>
<?php endif; ?>
<div class="wrapper entry-wrapper">
<header class="entry-header">
<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> <?php edit_post_link(); ?>
</header>
<?php the_excerpt(); ?>
</div>
</div>