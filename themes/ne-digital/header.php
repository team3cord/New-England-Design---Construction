<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<!-- <img src="<?//php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img"> -->
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
                   <div class="mobile-logo">     <a class="main-logo" href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/nedc-logo.png"></a></div>
						<?php html5blank_nav(); ?>
					</nav>
                    <div class="head-social">
                        <ul>
                            <li class="mc-fb"><a href="http://www.facebook.com/pages/New-England-Design-Construction/109240885763636"></a></li>
                            <li class="mc-in"><a href="https://www.linkedin.com/company/new-england-design-&-construction"></a></li>
                            <li class="mc-twt"><a href="https://twitter.com/NEDesignConst"></a></li>
                            <li class="mc-hou"><a href="http://www.houzz.com/pro/nedc/new-england-design-construction"></a></li>
                        </ul>
                    </div>
					<!-- /nav -->

			</header>
			<!-- /header -->
