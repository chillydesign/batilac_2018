<?php $column_count =  sizeof(  get_sub_field('column')  ); ?>
<?php $column_class = count_to_bootstrap_class($column_count); ?>

<?php if ($column_count == 1) { ?>

	<div class="container-fluid">
		<div class="row">
		<?php while ( have_rows('column') ) : the_row(); ?>
				<?php $image =  get_sub_field('image'); ?>
				<?php $column_content =  get_sub_field('column_content'); ?>
				<?php $colour_overlay =  get_sub_field('colour_overlay'); ?>


			<div class="photo_column  overlay_<?php echo $colour_overlay; ?> <?php echo $column_class; ?>" style="background-image: url(<?php echo $image['url']; ?>)" >
				<div class="container">
					<div class="photo_column_content">
						<?php if(get_sub_field('titre')){ echo "<h2>" . get_sub_field('titre') . "</h2>"; } ?>
						<div class="twocolumns"><?php echo $column_content; ?></div>
						<?php if(get_sub_field('button')){ echo get_sub_field('button'); } ?>
					</div>
				</div>
				<div class="photo_overlay"></div>

			</div>
		<?php endwhile; ?>
		</div> <!-- END OF ROW -->
	</div><!--  END OF CONTAINER  FLUID -->




	
<?php } else { ?>

<div class="container-fluid">
	<div class="row">
	<?php while ( have_rows('column') ) : the_row(); ?>
			<?php $image =  get_sub_field('image'); ?>
			<?php $column_content =  get_sub_field('column_content'); ?>
			<?php $colour_overlay =  get_sub_field('colour_overlay'); ?>


		<div class="photo_column  overlay_<?php echo $colour_overlay; ?> <?php echo $column_class; ?>" style="background-image: url(<?php echo $image['url']; ?>)" >
			<div class="photo_column_content"    >
				<?php if(get_sub_field('titre')){ echo "<h2>" . get_sub_field('titre') . "</h2>"; } ?>
				<div class="twocolumns"><?php echo $column_content; ?></div>
				<?php if(get_sub_field('button')){ echo get_sub_field('button'); } ?>
			</div>
			<div class="photo_overlay"></div>

		</div>
	<?php endwhile; ?>
	</div> <!-- END OF ROW -->
</div><!--  END OF CONTAINER  FLUID -->

<?php } ?>