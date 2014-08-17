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
                			'posts_per_page' => '4'
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
                        <span class="pull-left"><?php echo $date->format('D M n'); ?></span>
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
    </div><!-- end .col-sm-10 -->
</section>

<?php get_footer(); ?> 