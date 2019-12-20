<?php get_header(); ?>
<div class="concrete"><h1 class="container">Actualités</h1></div>
<div class="container">
<div class="row">
	<div class="col-sm-9">
		<main role="main">
		<!-- section -->


			<section>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</section>
			<!-- /section -->
		</main>
	</div>


	<div class="col-sm-3"><?php get_sidebar(); ?></div>

</div>
</div>

<?php get_footer(); ?>
