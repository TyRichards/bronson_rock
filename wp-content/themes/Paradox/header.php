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
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-33466413-1', 'auto');
		  ga('send', 'pageview');
		</script>			

		<!--[if lte IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->			
		
		<?php do_action('before'); ?> 
		<header>			
			<div class="container">
				<section class="top-header hidden-xs">				
					<div class="row">
						<div class="hidden-xs hidden-sm col-md-3 text-center">
							<?php gravity_form(4, $display_title=true, $display_description=false, $display_inactive=false, $field_values=null, $ajax=false, 50); ?>
							<div class="social-icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-youtube"></i></a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0">
								<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
						        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?> – <?php bloginfo('description'); ?>" width="100%">
						        </a>
					        </div>			        
						</div>
						<div class="hidden-xs hidden-sm col-md-3 text-center">
							<h2 class="jumbo-header"><a href="/live">Live!</a></h2>
							<span class="hot-link">
								<a class="uppercase" href="/live">Who's Playing?<i class="fa fa-arrow-circle-right fa-right"></i></a>
							</span>
						</div>
					</div> <!-- .row -->				
				</section><!--.section-top-header-->		
			</div> <!-- .container -->
			
			<section class="top-navbar">				
				<nav class="navbar navbar-default" role="navigation">
					<div class="container">						
						<div class="navbar-header">	
							<div class="row">
								<div class="col-xs-10 visible-xs">
									<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home" width="100%">	
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?> – <?php bloginfo('description'); ?>">				
									</a>	
								</div>											
								<div class="col-xs-2">
									<button type="button" class="navbar-toggle navbar-right" data-toggle="collapse" data-target=".navbar-primary-collapse">
										<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>									
									</button>
								</div>					
							</div> <!-- .row -->
						</div>
						
						<div class="collapse navbar-collapse navbar-primary-collapse">
							<i class="star-icon star-icon-left"></i>
							<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-left', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
							<?php if (is_active_sidebar('navbar-right')) { 								
								dynamic_sidebar('navbar-right'); 
							} ?>      					
							<i class="star-icon star-icon-right"></i>
						</div><!--.navbar-collapse-->
					</div>
				</nav>				
			</section> <!-- section-navbar -->
		</header>		
			
			
		<div class="body-content">

			<!-- Mobile Landing Section -->
			<!-- <section class="mobile-landing visible-xs col-xs-12">
			    <div class="col-xs-6 col-no-padding-xs phone" style="padding-right:5px">
				    <a class="btn btn-primary btn-lg btn-block" href="/schedule-inspection">
				        (972) 492-7920
				    </a> 
			    </div>
			    <div class="col-xs-6 col-no-padding-xs phone" style="padding-left:5px">
				    <a class="btn btn-primary btn-lg btn-block" href="/schedule-inspection">
				        (214) 390-2050
				    </a> 
			    </div>
			    <div class="col-xs-12 col-no-padding-xs call-to-action">
				    <a class="btn btn-danger btn-lg btn-block col-xs-12" href="/schedule-inspection" style="margin-top:0px">
				        <i class="fa fa-calendar fa-1x"></i>
				        Schedule Inspection
				    </a>
			    </div>
			</section>			 -->