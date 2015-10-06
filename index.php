<?php Themewrangler::setup_page();get_header(); ?>

<?php include locate_template('parts/page-header.php' );?>

<div class="page">
<div class="fs-row">
	<div class="fs-cell fs-all-full">
		<div class="page-content bg-color--gray">
			<div class="fs-row">
				<hr class="invisible fs-cell fs-lg-full fs-md-hide fs-sm-3 compact">
				<div class="fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
					<div class="fs-row">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'entry' ); ?>
					<?php endwhile; endif; ?>
					</div>
					<?php get_template_part( 'nav', 'below' ); ?>
				</div>
				<hr class="invisible fs-cell fs-lg-full fs-md-hide fs-sm-hide">
			</div>
		</div>
	</div>
</div>
</div>

<?php get_footer(); ?>