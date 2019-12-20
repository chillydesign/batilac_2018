<?php   if( have_rows('sections') ) : while ( have_rows('sections') ) : the_row(); ?>


	<?php $row_layout =  get_row_layout();    ?>
	<?php $section_id =  get_sub_field('id'); ?>

	<section  class="section  section_<?php echo $row_layout; ?>"   id="<?php echo $section_id; ?>">

		<?php  get_template_part(  'sections/' . $row_layout   ); ?>

	</section>


<?php endwhile; endif; ?>

					