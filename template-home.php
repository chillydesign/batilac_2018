<?php /* Template Name: Home Page Template */ ?><?php get_header(); ?>
<?php $home_url =  home_url(); ?>




<?php $posts_loop = new WP_Query(array('post_type' => 'slide',   'posts_per_page' =>  -1, 'orderby' => 'menu_order' )); ?>
<section class="section" id="front_page_promotions_section">


		<ul class="bxslider ">
		<?php  if ($posts_loop->have_posts() ) :  while($posts_loop->have_posts()) : $posts_loop->the_post();  ?>


			<?php $image =  thumbnail_of_post_url( get_the_ID(), 'full'  ) ; ?>
			<?php $url =  get_field('lien') ; ?>
			<?php $new_tab =  get_field('new_tab')  ?  ' target="_blank" '  :  '' ; ?>

				<li  class="slide_photo_background" style="background-image: url(<?php echo $image; ?>);" >
				 <div class="slide_content">
					 <h4><a  <?php echo $new_tab; ?> href=" <?php echo  $url; ?>"><?php the_title(); ?></a></h4>
				 </div>
			</li>


		<?php endwhile; endif; ?>
		</ul>

		<h2><a href="<?php echo $home_url; ?>/liste-promotions/">Découvrez nos dernières promotions >></a></h2>

</section>
<?php wp_reset_query(); ?>


<?php include('section-loop.php'); ?>



<?php $posts_loop = new WP_Query(array('post_type' => 'post',   'posts_per_page' =>  5 )); ?>
<section class="section" id="front_page_posts_section">
	<div  class="container">
	<h2><a href="<?php echo $home_url; ?>/actualites">Actualites</a></h2>
		<ul class="bxslider posts">
		<?php  if ($posts_loop->have_posts() ) :  while($posts_loop->have_posts()) : $posts_loop->the_post();  ?>
		<li class="post">
			<div class="row">
			<div class="col-sm-4">
				<?php if(get_field('video_url')): ?>
					<div style="position: relative;width: 100%;height: 0;padding-bottom: 56.25%;"><iframe src="<?php echo get_field('video_url'); ?>?rel=0&amp;controls=1&amp;showinfo=0"frameborder="0" allowfullscreen="allowfullscreen" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></iframe></div>
				<?php elseif ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail('medium'); // Declare pixel size you need inside the array ?>
					</a>
				<?php else : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<div style="width:100%; padding:40%; background:#e8e8e8;"></div>
				</a>
				<?php endif; ?>
			</div>
			<div class="col-sm-8">
			<h4><a href=" <?php echo  get_the_permalink(); ?>"><?php the_title(); ?></a></h4>
			<p><?php echo get_the_excerpt(); ?></p>
			<a href="<?php echo  get_the_permalink(); ?>" class="sequel">Lire la suite >></a>
			</div>
			</div>
		</li>
		<?php endwhile; endif; ?>
		</ul>
	</div>
</section>
<?php wp_reset_query(); ?>




<?php get_footer(); ?>
