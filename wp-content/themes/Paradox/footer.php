<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.body-content-->						
			
			<footer class="footer">     					

				<section class="more-foot container">
			        
						
						<!-- Navbar -->
						<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
						<?php if (is_active_sidebar('navbar-right')) { 								
							dynamic_sidebar('navbar-right'); 
						} ?> 
						<hr class="hidden-xs">
						<div class="col col-left col-md-6 text-center">
							<div class="col-md-6">
								<h3 class="phone">817-431-5543</h3>
							</div>
							<div class="col-md-6">
								<address class="address-box">250 S. Main St.<br>Keller, TX 76248</address>
							</div>							
						</div>
						<div class="col col-right col-md-6 text-center">
							<div class="col-md-6">
								<h3>Stay Connected<i class="fa fa-angle-double-right fa-right"></i></h3>
							</div>
							<div class="social-icons col-md-6">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-youtube"></i></a>								
							</div>
						</div>

	      		</section>	      		
	      		<section class="small-footer">
	      			<div class="container col-no-padding-xs">
	      				<div class="col-xs-12 col-sm-8">
			        		<div class="pull-left footer-credits">		        			
			        			<small>
			        				<a href="<?php echo esc_url(home_url('/')); ?>">
			        					© <?php echo date("Y"); ?> <?php echo esc_attr(get_bloginfo('name', 'display')); ?>
			        				</a>
			        			</small>		        			
			        		</div>
			        		<div class="pull-left footer-menu">
			        			<?php dynamic_sidebar('footer-credits'); ?>
			        		</div>
		        		</div>
		        		<div class="col-xs-12 col-sm-4">
			        		<div class="pull-right no-float-xs">
			        			<a href="http://paradoxcreative.com" target="_blank">
			        				<small>Site crafted by Paradox</small>
			        			</a>
			        		</div>
			        	</div>
		        	</div>
		        </section>	
	      	</footer>	
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 

		<!-- Typekit -->
		<script type="text/javascript" src="//use.typekit.net/wfk4yco.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	</body>
</html>