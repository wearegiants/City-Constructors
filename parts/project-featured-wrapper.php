<div class="packed fs-cell <?php echo $width; ?>">
  <?php $class = $post->post_name; ?>
  <div <?php post_class('project project-'.$class.''); ?>>
    <a href="<?php the_permalink(); ?>" class="coverlink"></a>
    <div class="project-meta wrapper cover">
      <h3 class="project-title"><?php the_title(); ?></h3>
      <?php echo get_the_category_list(); ?>
    </div>
    <div class="project-meta wrapper bottom">View Project</div>
    <div class="project-image background <?php echo $height; ?>" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'></div>
  </div>
</div>