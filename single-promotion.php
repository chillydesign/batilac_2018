<?php get_header(); ?>
<div class="concrete">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</div>

<section class="container">


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php $gallery = get_field('gallery'); ?>
			<?php if ($gallery) : ?>
				<div id="slider_realisations">
					<ul class="bxslider">
						<?php foreach ($gallery as $image) : ?>
							<li>
								<div class="slider_contain" style="background-image:url(<?php echo $image['url']; ?>); background-color:#efefef; padding:20%; margin-bottom:30px;"></div>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>

			<div>
				<h3>Description</h3>
				<?php the_content(); // Dynamic Content 
				?>
				<?php $file = get_field('documentation'); ?>
				<?php if ($file) : ?>
					<p><a target="_blank" href="<?php echo $file['url']; ?>" class="file_download">Documentation</a></p>
				<?php endif; ?>
			</div>

</section>

<!-- <div class="row">
		<div class="col-sm-6 col-sm-push-6">

				<?php the_content(); // Dynamic Content 
				?>
				<?php $file = get_field('documentation'); ?>
				<?php if ($file) : ?>
					<p><a target="_blank" href="<?php echo $file['url']; ?>" class="file_download">Documentation</a></p>
				<?php endif; ?>
			</div>
			<aside class="col-sm-6 col-sm-pull-6">
				<?php $gallery = get_field('gallery'); ?>

				<div id="slider_realisations">
					<ul class="bxslider">
						<?php foreach ($gallery as $image) : ?>
							<li><div class="slider_contain" style="background-image:url(<?php echo $image['url']; ?>); "></div></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</aside>
		</div>
	</div> -->

<?php endwhile; ?>

<?php else : ?>


	<article>

		<h1><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h1>

	</article>
	<!-- /article -->

<?php endif; ?>



</section> <!-- END OF CONTAINER -->




<?php get_footer(); ?>