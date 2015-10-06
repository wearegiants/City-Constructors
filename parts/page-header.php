<div class="fs-row">
<div class="fs-cell fs-lg-10 fs-centered">
<header class="page-header">
<hr class="invisible large fs-sm-hide">
<h1 class="page-title fs-cell fs-lg-9 fs-md-4 fs-sm-3 fs-contained">
	<?php 
		if (is_home()){
			echo get_the_title(24);
		} else {
			the_title();
		}
 	?>
</h1>
<div class="page-share fs-cell fs-lg-3 fs-md-2 fs-sm-3 text-right">
  <span data-swap-target=".page-share--container" class="page-share--title ss-gizmo ss-share right share-toggle">Share This</span>
  <div class="page-share--container">
    <ul>
      <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php bloginfo( 'siteurl' ) ?>/<?php the_permalink(); ?>" target="blank" class="ss-social ss-facebook right">Facebook</a></li>
      <li><a href="#" target="blank" class="ss-social ss-twitter right">Twitter</a></li>
      <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php bloginfo( 'siteurl' ) ?>/<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=&source=" target="blank" class="ss-social ss-linkedin right">Linkedin</a></li>
    </ul>
  </div>
</div>
<hr class="invisible compact">
</header>
</div>
</div>