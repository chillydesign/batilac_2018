<?php /* Template Name: Promotion Template */ ?><?php get_header(); ?>



	<div class="concrete">
		<div class="container">
			<h1 style="margin-top:30px">Promotions</h1>
		</div>
	</div>

	<?php $posts_loop = new WP_Query(array('post_type' => 'promotion',   'posts_per_page' =>  -1, 'orderby' => 'menu_order' )); ?>
<section class="section realisationsslider" id="front_page_promotions_section">
	<div class="container">
	
		<ul class="bxslider ">
		<?php  if ($posts_loop->have_posts() ) :  while($posts_loop->have_posts()) : $posts_loop->the_post();  ?>
			<?php $image =  thumbnail_of_post_url( get_the_ID()  ) ; ?>

		<li  class="slide_photo_background" style="background-image: url(<?php echo $image; ?>);" >
			 <div class="slide_content">
				 <h4>
				 	<?php $url_site_dedie = get_field('url_site_dedie'); ?>
				 	<?php if(!empty($url_site_dedie)){ ?>
				 		<a  target="_blank" href=" <?php echo  $url_site_dedie; ?>"><?php the_title(); ?></a>
				 	<?php } else { ?>
				 		<a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a>
				 	<?php } ?>
				 </h4>
			 </div>
		</li>

		<?php endwhile; endif; ?>
		</ul>
	</div>
</section>
<?php wp_reset_query(); ?>



	<?php include('section-loop.php'); ?>



<?php $promotion_loop = new WP_Query(array('post_type' => 'promotion',   'posts_per_page' =>  -1, 'orderby' => 'menu_order' )); ?>
<?php echo $count = $promotion_loop->post_count; ?>

<?php if($count == 2){ ?>
	<section class="section">
		<div  class="container">
			<div class="row">
				<?php  if ($promotion_loop->have_posts() ) :  while($promotion_loop->have_posts()) : $promotion_loop->the_post();  ?>
				<div class="col-sm-6">
					<div class="single_realisation">
						<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
							<?php $image = thumbnail_of_post_url( get_the_id() ); ?>
							<?php $url_site_dedie = get_field('url_site_dedie'); ?>
							<?php if(!empty($url_site_dedie)){ ?>
						 		<a target="_blank" class="post_thumbnail_link" style="background-image:url(<?php echo $image;  ?>)" href="<?php echo $url_site_dedie; ?>" title="<?php the_title(); ?>">
						 	<?php } else { ?>
						 		<a class="post_thumbnail_link" style="background-image:url(<?php echo $image;  ?>); cursor: default;" title="<?php the_title(); ?>">
						 		<div class="a_venir">A venir</div>
						 	<?php } ?>

							</a>
						<?php endif; ?>

						<?php $url_site_dedie = get_field('url_site_dedie'); ?>
						<?php if(!empty($url_site_dedie)){ ?>
					 		<h4><a  target="_blank" href=" <?php echo  $url_site_dedie; ?>"><?php the_title(); ?></a></h4>
					 	<?php } else { ?>
					 		<h4 style="color: #3278ae;"><?php the_title(); ?></h4>
					 	<?php } ?>
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
			<?php  if ($promotion_loop->have_posts() ) :  while($promotion_loop->have_posts()) : $promotion_loop->the_post();  ?>
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

