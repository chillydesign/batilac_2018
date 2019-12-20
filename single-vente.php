<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div class="concrete">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<?php if (get_field('lieu')){ ?><p class="lieu_propriete"><?php the_field('lieu'); ?> </p><?php } ?>
	</div>
</div>

<?php $plop=1; ?>

<?php if(!empty(get_field('gallery')) OR !empty(get_field('presentation'))) { ?>
<section <?php if($plop %2 == 0) {echo 'class="concrete"';} ?> >
	<div class="container">
		<?php if(empty(get_field('gallery'))){
			if (get_field('presentation')){ ?><h3>Présentation</h3><div id="presentation"><?php the_field('presentation'); ?> </div> <?php }
		} else { ?>

		<div class="row">
			<div class="col-sm-6 col-sm-push-6">
				<?php if (get_field('presentation')){ ?><h3>Présentation</h3><div id="presentation"><?php the_field('presentation'); ?> </div> <?php } ?>
			</div>

			<aside class="col-sm-6 col-sm-pull-6">
				<?php $gallery = get_field('gallery'); ?>

				<div id="slider_realisations">
					<ul class="bxslider">
					<?php foreach( $gallery as $image ): ?>
						<li><div class="slider_contain" style="background-image:url(<?php echo $image['url']; ?>); "></div></li>
					<?php endforeach; ?>
					</ul>
				</div>
			</aside>
		</div><!-- END OF ROW -->
		<?php } ?>
	</div>
</section> 

<?php $plop++; ?>
<?php } ?>


<?php if(!empty(get_field('caracteristiques'))) { ?>
<section <?php if($plop %2 == 0) {echo 'class="concrete"';} ?>>

	<div class="container">

		<?php if (get_field('caracteristiques')){ ?>
			<h3>Descriptif</h3>
			<div><?php the_field('caracteristiques'); ?> </div> 
		<?php } ?>
	</div>
</section>


<?php $plop++; ?>
<?php } ?>


<?php if(!empty(get_field('situation_texte'))) { ?>
	<section <?php if($plop %2 == 0) {echo 'class="concrete"';} ?>>
		<div class="container">
				<h3>Situation</h3>
				<?php if (empty(get_field('situation_plan'))) { ?>
					<div><?php the_field('situation_texte'); ?> </div> 
				<?php } else { ?>
					<div class="row">
						<div class="col-sm-6 col-sm-push-6">
							<div><?php the_field('situation_texte'); ?> </div> 
						</div>
						<div class="col-sm-6 col-sm-pull-6">
							<div><img src="<?php echo get_field('situation_plan')['url']; ?> "></div> 
						</div>
					</div>
				<?php } ?>
		</div>
	</section>

<?php $plop++; ?>
<?php } ?>


<?php if (get_field('champs_speciaux') == 'properties') { ?>
	
	<section <?php if($plop %2 == 0) {echo 'class="concrete"';} ?>>
		<div class="container">

			<h3>Liste des Biens</h3>


			<table>
				<thead>
					<tr>
						<th>N°REF</th>
						<th>Pièces</th>
						<?php if (empty(get_field('hidden')) OR !in_array('parking', get_field('hidden'))) { ?><th class="expendable">Parking</th><?php } ?>
						<?php if (empty(get_field('hidden')) OR !in_array('floor', get_field('hidden'))) { ?><th class="expendable">Étage</th> <?php } ?>
						<th>Surface PPE</th>
						<th class="expendable">Surface PPE pondérée</th>
						<?php if (empty(get_field('hidden')) OR !in_array('balcony', get_field('hidden'))) { ?><th class="expendable">Surface Balcons</th> <?php } ?>
						<?php if (empty(get_field('hidden')) OR !in_array('terraces', get_field('hidden'))) { ?><th class="expendable">Surface Terrasses</th> <?php } ?>
						<?php if (empty(get_field('hidden')) OR !in_array('gardens', get_field('hidden'))) { ?><th class="expendable">Surface Jardins</th> <?php } ?>
						<th>Prix</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				
				<?php $i=0; ?>
				<?php while ( have_rows('proprietes') ) : the_row(); ?>

					<tr>
						<td><?php if(get_sub_field('ref')){the_sub_field('ref');} else {echo '-';} ?></td>
						<td><?php if(get_sub_field('nombre_de_pieces')){the_sub_field('nombre_de_pieces');} else {echo '-';} ?></td>
						
						<?php if (!in_array('parking', get_field('hidden'))) { ?>
						<td class="expendable">
							<?php if(get_sub_field('nombre_de_box')){
								if(get_sub_field('nombre_de_places_interieures') AND get_sub_field('nombre_de_places_exterieures')){

									$box = get_sub_field('nombre_de_box');
									$plint = get_sub_field('nombre_de_places_interieures');
									if($plint != 1){$plinttext = ' places intérieures';} else {$plinttext= ' place intérieure';}
									$plext = get_sub_field('nombre_de_places_exterieures');
									if($plext != 1){$plexttext = ' places extérieures';} else {$plexttext= ' place extérieure';}

									echo $box . ' box,' . $plint . $plinttext . ' et ' . $plext . $plexttext;

								} elseif(get_sub_field('nombre_de_places_interieures')){

									$box = get_sub_field('nombre_de_box');
									$plint = get_sub_field('nombre_de_places_interieures');
									if($plint != 1){$plinttext = ' places intérieures';} else {$plinttext= ' place intérieure';}

									echo $box . ' box et ' . $plint . $plinttext;
								} elseif(get_sub_field('nombre_de_places_exterieures')){

									$box = get_sub_field('nombre_de_box');
									$plext = get_sub_field('nombre_de_places_exterieures');
									if($plext != 1){$plexttext = ' places extérieures';} else {$plexttext= ' place extérieure';}

									echo $box . ' box et ' . $plext . $plexttext;

								} else {
									$box = get_sub_field('nombre_de_box');
									echo $box . ' box';
								}

							} elseif (get_sub_field('nombre_de_places_interieures')) {
								if(get_sub_field('nombre_de_places_exterieures')){

									$plint = get_sub_field('nombre_de_places_interieures');
									if($plint != 1){$plinttext = ' places intérieures';} else {$plinttext= ' place intérieure';}
									$plext = get_sub_field('nombre_de_places_exterieures');
									if($plext != 1){$plexttext = ' places extérieures';} else {$plexttext= ' place extérieure';}

									echo $plint . $plinttext . ' et ' . $plext . $plexttext;
								} else {
									$plint = get_sub_field('nombre_de_places_interieures');
									if($plint != 1){$plinttext = ' places intérieures';} else {$plinttext= ' place intérieure';}

									echo $plint . $plinttext;
								}
							} elseif (get_sub_field('nombre_de_places_exterieures')) {

								$plext = get_sub_field('nombre_de_places_exterieures');
								if($plext != 1){$plexttext = ' places extérieures';} else {$plexttext= ' place extérieure';}

								echo $plext . $plexttext;
							} else {
								echo "-";
							} ?>
						</td>
						
						</div>
						<?php } ?>

						<?php if (!in_array('floor', get_field('hidden'))) { ?><td class="expendable"><?php if(get_sub_field('etage')){the_sub_field('etage');} else {echo '-';} ?></td><?php } ?>
						
						<td><?php if(get_sub_field('surface_ppe')){the_sub_field('surface_ppe');} else {echo '-';} ?></td>
						
						<td class="expendable"><?php if(get_sub_field('surface_ppe_ponderee')){the_sub_field('surface_ppe_ponderee');} else {echo '-';} ?></td>
						
						<?php if (!in_array('balcony', get_field('hidden'))) { ?><td class="expendable"><?php if(get_sub_field('surface_balcons')){the_sub_field('surface_balcons');} else {echo '-';} ?></td> <?php } ?>
						
						<?php if (!in_array('terraces', get_field('hidden'))) { ?><td class="expendable"><?php if(get_sub_field('surface_terrasses')){the_sub_field('surface_terrasses');} else {echo '-';} ?></td> <?php } ?>
						
						<?php if (!in_array('gardens', get_field('hidden'))) { ?><td class="expendable"><?php if(get_sub_field('surface_jardins')){the_sub_field('surface_jardins');} else {echo '-';} ?></td> <?php } ?>
						<td>
							<?php 
								if(get_sub_field('statut')=='available') { if(get_sub_field('prix')) {echo get_sub_field('prix');} else {echo "-";} } 
								elseif (get_sub_field('statut')=='prebooked') { echo "Pré-réservé";}
								elseif (get_sub_field('statut')=='booked') { echo "Booked";}
								elseif (get_sub_field('statut')=='sold') { echo "Vendu";}
							?>
						</td>

						<td><span class="<?php echo 'plus' . $i; ?> plus">+</span></td>
					</tr>
					<tr id="<?php echo 'plus' . $i; ?>" class="hidden">
						<td colspan="8">
							<a class="btn" style="background:#444;" href="mailto:rissel.melissa@gmail.com&subject=Intérêt pour une propriété - <?php the_title(); ?>&body=Bonjour Monsieur%2C%0A%0AJe serais intéressé par <?php if(get_sub_field('ref')){echo 'le lot ' . get_sub_field('ref') . ' de la propriété '; the_title(); } else {echo "un des lots de la propriété "; the_title();} ?>. Pourrions-nous convenir d'un rendez-vous pour en discuter%3F%0A%0ACordialement,">Contact<span class="expendable">ez-nous</span></a>

							<?php if(get_sub_field('documentation')){ ?><a class="btn" target="_blank" href="<?php echo get_sub_field('documentation')['url']; ?>"><span class="expendable">Télécharger la </span>Documentation</a> <?php } ?>
								
						</td>
					</tr>
				<?php $i++; ?>
				<?php endwhile; ?>

				</tbody>
			</table>
		</div>
	</section>

<?php $plop++; ?>


<?php } elseif (get_field('champs_speciaux') == 'house') { ?>
<section <?php if($plop %2 == 0) {echo 'class="concrete"';} ?>>
</section>


<?php $plop++; ?>
<?php } ?>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>

		<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

	</article>
	<!-- /article -->








<?php endif; ?>

<?php get_footer(); ?>
