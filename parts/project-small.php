<div class="fs-cell fs-lg-4 fs-md-2 fs-sm-3">
  <?php $class = $post->post_name; ?>
  <div <?php post_class('project project-'.$class.''); ?>>
    <a href="<?php the_permalink(); ?>" class="coverlink"></a>
    <div class="project-meta wrapper cover">
      <h3 class="project-title"><?php the_title(); ?></h3>
      <span>Category</span>
    </div>
    <div class="project-meta wrapper bottom">View Project</div>
    <div class="project-image background" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'></div>
  </div>
</div>