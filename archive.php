<?php get_header(); ?>

	<div class="container">
	<div class="row">
		<!-- section -->
		<section class="col-sm-9">

			<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<aside class="col-sm-3">
			<?php get_sidebar(); ?>
		</aside>
	</div> <!-- END OF ROW -->
	</div> <!-- END OF CONTAINER -->




<?php get_footer(); ?>