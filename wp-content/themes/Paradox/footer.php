<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.body-content-->	

			<!-- Credibility indicators -->
			<section class="logos">
			    <div class="container">
			        <div class="col-sm-2 cred-logo">
						<a href="http://www.bbb.org/dallas/business-reviews/drywall-inspectors/xstream-inspections-pc-in-carrollton-tx-90517768" target="_blank">
				        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bbb.png" alt="Better Business Bureau Accredited Business" width="100%">
			        	</a>
			        </div>
					<div class="col-sm-2 cred-logo">
						<a href="http://www.zillow.com/profile/xstreaminspections/" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/zillow.png" alt="Zillow" width="100%">
						</a>
			        </div>
			        <div class="col-sm-2 cred-logo">
			        	<a href="http://www.yelp.com/biz/xstream-inspections-carrollton" target="_blank">
				        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/yelp.png" alt="Yelp" width="100%">
			        	</a>
			        </div>				        
			        <div class="col-sm-2 cred-logo">
			        	<a href="http://www.ccar.net/" target="_blank">
			        		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ccar.png" alt="Collin County Association of Realtors" width="100%">
			        	</a>
			        </div>			        			        		        
			        <div class="col-sm-2 cred-logo trec">
			        	<a href="http://www.trec.texas.gov/complaintsconsumer/" target="_blank">
			        		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/trec_regulated.png" alt="We accept all forms of payment" width="100%">
			        	</a>
			        </div>	
			        <div class="col-sm-2 cred-logo">
			        	<a href="" target="_blank">
			        		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cc.png" alt="We accept all forms of payment" width="100%">
			        	</a>
			        </div>				        			        		        			        			        
			    </div>
			</section>					
			
			<footer class="footer">
				<section class="more-foot">
			        <div class="container">
					    <div class="row">
					        <div class="col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-0">
<!-- 								<div class="col-sm-12">
									<h4>
										<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
											<?php bloginfo('name'); ?>
										</a>
									</h4>
									<p>						
										<?php bloginfo('description'); ?> 						
									</p>
								</div> -->
								<div class="col-sm-12 col-md-9">
						        	<a class="footer-logo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
							        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/xstream-inspections-logo-darkbg.svg" alt="Xstream Inspections Commercial & Residential Inspections" width="100%" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
							        </a>
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
					            <a class="btn btn-danger btn-block" href="/schedule-inspection">
									<i class="fa fa-calendar fa-1x"></i>
									Schedule Inspection
								</a>  
					            <a class="btn btn-danger btn-block" href="/schedule-inspection">
									<i class="fa fa-phone fa-1x"></i>
									Call (972) 492-7920
								</a>  								
						        <div class="clearfix"></div>
						        <div class="col-md-12">									   
					                <p class="social-btns text-center">				                	
					                	<a href="https://www.facebook.com/XstreamInspections" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
					                	<a href="https://twitter.com/XstreamInspect" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
					                	<a href="https://plus.google.com/106699679931898624099/posts" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a>
					                	<a href="http://youtube.com/xstreaminspections" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
					                	<a href="http://linkedin.com/pub/shelly-morgan/10/55a/402" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
					              	</p>
					            </div>
					        </div>
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
		<script type="text/javascript" src="//use.typekit.net/ksc8vkp.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>		
	</body>
</html>