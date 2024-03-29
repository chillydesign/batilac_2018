<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tiksluscarousel.css" />
		<!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,900,900i" rel="stylesheet"> -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>


	</head>
	<body <?php body_class(); ?>>



		<!-- header -->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<?php if(false) : ?> <!-- OLD LOGO CHOICES -->
				<?php # set which logos should appear. if field not set , only show promolac ?>
				<?php $which_logos = get_field('which_logo') ?   get_field('which_logo') :  array('promolac')  ; ?>
							<?php if(  in_array('promolac',  $which_logos)    ): ?>
								<a class="branding branding_promolac" href="<?php echo home_url(); ?>"></a>
							<?php endif; ?>
							<?php if(  in_array('batilac',  $which_logos)  ): ?>
								<a class="branding branding_batilac" href="<?php echo home_url(); ?>"></a>
							<?php endif; ?>
						<?php endif; ?>


						<a class="branding branding_batilac" href="<?php echo home_url(); ?>"></a>
					</div>
					<div class="col-sm-8 nav_contact">
						<p style="padding-right:10px">+41 22 839 30 40 | <a href="mailto:contact@batilac.ch" style="text-decoration:none;">contact@batilac.ch</a></p>
						 <a href="#" id="show_mobile_nav" >Menu</a>
						<nav class="nav" role="navigation"><?php chilly_nav('header_menu'); ?></nav>
					</div>
				</div>
			</div>

		</header>
		<!-- /header -->
