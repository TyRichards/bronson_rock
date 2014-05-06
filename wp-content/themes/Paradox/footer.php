<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.body-content-->	

			<footer class="footer">
				<section class="more-foot">
			        <div class="container col-no-padding-xs">
					    	
					        <div class="col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-0">
										<div class="col-sm-12 col-no-padding-xs">
											<div class="clearfix">
							        	<a class="footer-logo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Xstream Inspections Commercial & Residential Inspections" width="100%" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
								        </a>
							      	</div>
											<div class="clearfix">
												<p class="text-center tagline"><?php bloginfo('description'); ?></p>
											</div>	
							       	<div class="clearfix"></div>
							        <div class="col-md-12 col-no-padding">									   
				                <p class="social-btns text-center">				                	
				                	<a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
				                	<a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
				                	<a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a>
				                	<a href="http://youtube.com/" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
				                	<a href="http://linkedin.com/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
				              	</p>
						          </div> 																		        
						        </div>		
					        </div>					        
					        <div class="clearfix visible-sm"></div>
				          <div class="col-sm-3 col-md-2 hidden-xs">
										<?php dynamic_sidebar('footer-left'); ?>
				          </div>
				          <div class="col-sm-3 col-md-2 hidden-xs">
					            	<?php dynamic_sidebar('footer-right'); ?>
	<!-- 				                <h6>Follow Us</h6>
					                <ul>
										<li><a href="#">Facebook</a>
										</li>
										<li><a href="#">Twitter</a>
										</li>
										<li><a href="#">Instagram</a>
										</li>
					                </ul> -->
				          </div>					        
					        <div class="col-sm-6 col-md-3">
					          <a class="btn btn-primary btn-block" href="/schedule-inspection">
											<i class="fa fa-phone fa-1x"></i>
											(555) 555-5555
										</a>
					          <a class="btn btn-primary btn-block" href="/schedule-inspection">
											<i class="fa fa-map-marker fa-1x"></i>
											Locations
										</a>  										  								
					      	</div>
					   		
			        </div> <!-- container -->
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
	      </div> <!-- .container -->	     
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
		<!-- Typekit -->
		<script type="text/javascript" src="//use.typekit.net/ksc8vkp.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>		
	</body>
</html>