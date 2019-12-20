<?php get_header(); ?>



	<div class="concrete">
		<div class="container">
			<h1 style="margin-top:30px">Nos Biens à vendre</h1>
		</div>
	</div>

	<?php $posts_loop = new WP_Query(array('post_type' => 'vente',   'posts_per_page' =>  -1 )); ?>
<section class="section realisationsslider" id="front_page_promotions_section">
	<div class="container">
	
		<ul class="bxslider ">
		<?php  if ($posts_loop->have_posts() ) :  while($posts_loop->have_posts()) : $posts_loop->the_post();  ?>
			<?php $image =  thumbnail_of_post_url( get_the_ID()  ) ; ?>

		<li  class="slide_photo_background" style="background-image: url(<?php echo $image; ?>);" >
			 <div class="slide_content">
				 <h4><a href=" <?php echo  get_the_permalink(); ?>"><?php the_title(); ?></a></h4>
			 </div>
		</li>

		<?php endwhile; endif; ?>
		</ul>
	</div>
</section>
<?php wp_reset_query(); ?>



	<?php include('section-loop.php'); ?>



<?php $vente_loop = new WP_Query(array('post_type' => 'vente',   'posts_per_page' =>  -1 )); ?>
<?php echo $count = $vente_loop->post_count; ?>

<?php if($count == 2){ ?>
	<section class="section">
		<div  class="container">
			<div class="row">
				<?php  if ($vente_loop->have_posts() ) :  while($vente_loop->have_posts()) : $vente_loop->the_post();  ?>
				<div class="col-sm-6">
					<div class="single_realisation">
						<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
							<?php $image = thumbnail_of_post_url( get_the_id() ); ?>
							<a class="post_thumbnail_link" style="background-image:url(<?php echo $image;  ?>)" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

							</a>
						<?php endif; ?>

						<h4><a href=" <?php echo  get_the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<p ><?php echo get_the_excerpt(); ?></p>
				
					</div>
				</div>
				<?php endwhile; endif; ?>


			</div>
		</div>
	</section>

<?php } else { ?>



	<section class="section">
		<div  class="container">
		<div class="row">
		<?php $r = 0; ?>
			<?php  if ($vente_loop->have_posts() ) :  while($vente_loop->have_posts()) : $vente_loop->the_post();  ?>
			<div class="col-sm-4">
				<div class="single_realisation">
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<?php $image = thumbnail_of_post_url( get_the_id() ); ?>
						<a class="post_thumbnail_link" style="background-image:url(<?php echo $image;  ?>)" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

						</a>
					<?php endif; ?>

					<h4><a href=" <?php echo  get_the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<p ><?php echo get_the_excerpt(); ?></p>
			
				</div>
			</div>
			<?php if (  $r %3 == 2 )  echo '</div><div class="row">';  $r++;  ?>
			<?php endwhile; endif; ?>

		</div>
		</div>
	</section>

<?php } ?>
<?php wp_reset_query(); ?>




<?php get_footer(); ?>

