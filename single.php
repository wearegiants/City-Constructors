<?php Themewrangler::setup_page();get_header(); ?>

<?php include locate_template('parts/page-header.php' );?>

<div class="page">
	<div class="fs-row">
		<div class="fs-cell fs-all-full">
			<div class="page-content bg-color--gray">
				<div class="fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
					<div class="fs-row">
						<hr class="invisible fs-cell fs-lg-full fs-md-hide fs-sm-hide">
						<div class="page-content_image fs-cell fs-lg-half fs-md-full fs-sm-3 fs-right">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); } ?>
						</div>
						<hr class="fs-cell fs-lg-hide fs-md-full fs-sm-3 invisible compact" />
						<div class="page-content_copy fs-cell fs-lg-half fs-md-full fs-sm-3">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
							<?php endwhile; endif; ?>
							<?php include locate_template('parts/page-modules.php' ); ?>
						</div>
						<hr class="invisible fs-cell fs-all-full">
					</div>
					<div class="fs-row">
						<?php joints_related_posts(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>