<?php
	/*
		Template Name: Live Events Archive
	*/
?>

<?php get_header(); ?>

<section class="masthead">
    <div class="background">&nbsp;</div>
    <div class="container"> 
        <div class="row">
            <section class="container main-col page-content col-md-6 col-md-offset-3"> 

                <div id="main" class="site-main" role="main">
                	
                	<h1 class="text-center"><span class="condensed">Who's</span> Playing?</h1>
                
		                <div class="events">
		                	
		                	<?php
		                			                				                		
		                		$args = array(
		                			'post_type' => 'event',
		                			'posts_per_page' => '5',
		                			'meta_key' => 'event_date', // Custom ordering
													'orderby' => 'meta_value_num',
													'order' => 'ASC',
		                			'posts_per_page' => '15',
		                			'paged' => get_query_var('paged')
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
		                            <p class="details"><?php the_field('event_time'); ?> | Band Website</p>
		                        </div>
		                        <i class="arrow fa fa-angle-right fa-right"></i>
		                    </a>
		                    
		                	<?php endwhile; ?>
		                			                	
												<?php wp_pagenavi( array( 'query' => $events ) ); ?>
											
											<?php endif; ?>
		                		
	                		
		                		
		                	<?php wp_reset_postdata(); ?>                                                            
		                    
		            </div><!-- end .events -->
                	
                </div><!-- #main -->        

								</section>
        </div><!-- end .row -->
    </div><!-- end .container -->
</section>

<?php get_footer(); ?>