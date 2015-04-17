<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">



		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

        <!--[if IE6]>
        <link rel="stylesheet" href="ie.css" type="text/css"/>
        <![endif]-->
	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="col-md-24">

			<!--===================== Navbar coding ============================-->
			<nav class="navbar navbar-fixed-top center-block">
				<div class="col-md-24">
					<div class="navbar-header navbar-fixed-top">
						<button type="button" class="navbar-toggle collapsed col-sm-24 col-col-xs-24" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-fixed-top navbar-collapse col-sm-24 col-xs-24" id="navbar">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-search')) ?>
						<?php redwave_nav(); ?>
					</div><!-- dynamic navbar -->
				</div><!-- /.container -->
			</nav><!-- /.navbar -->

			<!--========================== Navbar End ========================-->

			<!-- header -->
			<header class="header clear" role="banner">

				<div class="container-fluid">
					<div class="logo col-md-4 col-xs-24">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
					</div> <!-- logo -->
					<div class="col-md-15 col-xs-24">
						<span id="tagline"><?php bloginfo('description'); ?></span><br />
					</div><!-- tagline -->

				</div><!-- container fluid -->


			</header>
			<!-- /header -->