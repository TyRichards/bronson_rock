<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="author" content="Shelly Morgan">
		<title><?php wp_title('|', true, 'right'); ?></title>		
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">	

		<?php wp_head(); ?>
	
		<!--[if lte IE 8]>
			<meta http-equiv="REFRESH" content="0;url=http://www.browsehappy.com/">
		<![endif]-->	
	</head>
	<body <?php body_class(); ?>>

		<!-- Google Analytics -->
		

		<!--[if lte IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->				

		<?php do_action('before'); ?> 
		
		<div class="container main-container col-no-padding">

			<header>			
				<section class="top-navbar">				
					<nav class="navbar navbar-default" role="navigation">
						<div class="container col-no-padding-xs">						
							<div class="navbar-header col-sm-4 col-md-5">	
								<div class="brand col-xs-10 col-md-12 col-no-padding">
									<div class="clearfix">
										<a class="navbar-brand col-no-padding" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home" width="100%">	
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="The Mattress Plus">							
										</a>
									</div>									
									<div class="clearfix hidden-xs">
										<p class="text-center tagline"><?php bloginfo('description'); ?></p>
									</div>									
								</div>											
								<div class="toggle col-xs-2 nav-right col-no-padding-xs">
									<button type="button" class="navbar-toggle navbar-right" data-toggle="collapse" data-target=".navbar-primary-collapse">
										<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>									
									</button>
								</div>					
							</div><!-- .navbar-header -->
							
							<div class="col-sm-8 col-md-7 collapse navbar-collapse navbar-right navbar-primary-collapse">
								<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-left', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
								<?php if (is_active_sidebar('navbar-right')) { 								
									dynamic_sidebar('navbar-right'); 
								} ?>     					
							</div><!--.navbar-collapse-->
						</div><!-- .container -->
					</nav>				
				</section> <!-- section-navbar -->
		    <div class="contact-nav hidden-xs">
			    <a class="btn btn-primary btn" href="tel:5555555555">
						<i class="fa fa-phone fa-1x"></i>
			    	(555) 555-5555
			    </a> 
			    <a class="btn btn-primary btn" href="/locations">
						<i class="fa fa-map-marker fa-1x"></i>			    	
			    	Locations
			    </a> 
		    </div>				
			</header>		
				
				
			<div class="body-content">

				<!-- Mobile Landing Section -->
				<section class="mobile-landing visible-xs col-xs-12">
				    <div class="col-xs-6 col-no-padding-xs phone" style="padding-right:5px">
					    <a class="btn btn-primary btn-lg btn-block" href="tel:5555555555">
					        (555) 555-5555
					    </a> 
				    </div>
				    <div class="col-xs-6 col-no-padding-xs phone" style="padding-left:5px">
					    <a class="btn btn-primary btn-lg btn-block" href="tel:4444444444">
					        (444) 444-4444
					    </a> 
				    </div>
				    <div class="col-xs-12 col-no-padding-xs call-to-action">
					    <a class="btn btn-success btn-lg btn-block col-xs-12" href="/locations" style="margin-top:0px">
					        <i class="fa fa-map-marker fa-1x"></i>
					        Locations
					    </a>
				    </div>
				</section>			