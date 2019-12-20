			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div style="float:left; margin-right:20px; "><a class="branding" href="<?php echo home_url(); ?>"></a></div>
						<div style="float:left;">
							<h3 style="text-transform:none">Sociétés</h3>
							<p>
								<strong>BatiLAC SA</br></strong><br>
								Route de Florissant 81</br>
								1206 Genève</br>
								Suisse
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<h3>Contactez-nous</h3>
						<p>
							Tel. : +41 22 839 30 40</br>
							Fax : +41 22 839 30 49</br>
							<br>
						
							Email : <a href="mailto:contact@batilac.ch">contact@batilac.ch</a>
						</p>
					</div>
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_widgets')) ?>
				</div>
				</div>

				<p class="copyright">&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. Site by <a href="//webfactor.ch.org" title="Webfactor"><strong>Web</strong>Factor</a>.</p>


			</footer>
			<!-- /footer -->



		<?php $td = get_template_directory_uri() ; ?>
		<script type="text/javascript" src="<?php echo $td; ?>/js/lib/jquery.js"></script>
		<?php wp_footer(); ?>
<!-- 		<script type="text/javascript" src="<?php echo $td; ?>/js/tiksluscarousel.js"></script> -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
		<script type="text/javascript" src="<?php echo $td; ?>/js/jquery.bxslider.min.js"></script>
		<script type="text/javascript" src="<?php echo $td; ?>/js/scripts.js?v=2.1"></script>


		<!-- analytics -->
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114588276-6"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-114588276-6');
		</script>



	</body>
</html>
