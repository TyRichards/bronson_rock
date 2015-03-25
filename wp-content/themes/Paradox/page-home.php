<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<!-- Subheader Section -->
<section class="masthead">
    <div class="background">&nbsp;</div>
    <div class="container col-no-padding-xs">        
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0"> 
            <div class="flex-video widescreen">                
                <iframe src="//www.youtube.com/embed/0pWKyyDSJMo?autohide=1&modestbranding=1&rel=0&showinfo=0" height="400" width="680" controls="2" allowfullscreen="" frameborder="0"></iframe>
            </div>
        </div>        
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
            <div class="col-sm-12 col-md-11 col-md-offset-1 col-no-padding">
                <h1><span class="condensed">Who's</span> Playing?</h1>
                
                <div class="events">
                	
                	<?php
                		
                		$args = array(
                			'post_type' => 'event',
                			'posts_per_page' => '4',
                			'meta_key' => 'event_date', // Custom ordering
                			'orderby' => 'meta_value_num',
											'order' => 'ASC'
                		);
                	
                		$events = new WP_Query( $args );
                		if( $events->have_posts() ):
                		    while( $events->have_posts() ): $events->the_post();
                	?>
                	
                		<?php
                			// Let's format the date!
                			$date = DateTime::createFromFormat('Ymd', get_field('event_date'));
                		?>   
                		
                		<a class="media" href="http://<?php the_field('url'); ?>" target="_blank">    
                        <span class="pull-left"><?php echo $date->format('D M j'); ?></span>
                        <div class="media-body">
                            <h2><?php the_field('event_title'); ?></h2>
                            <p class="details"><?php the_field('event_time'); ?> | View Details</p>
                        </div>
                        <i class="arrow fa fa-angle-right fa-right"></i>
                    </a>
                		
                	<?php
                		    endwhile;
                		endif;
                		wp_reset_postdata();
                	?>
                                                                               
                <a class="btn btn-lg btn-secondary text-center btn-clear" href="/live">                    
                    View Full Schedule
                    <i class="fa fa-arrow-circle-right fa-right"></i>
                </a>             
                        
                </div><!-- end .events -->
            </div><!-- end .col-sm-12 -->  
        </div><!-- .row -->
    </div><!-- .container -->
</section>

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