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
        <div class="col-sm-10 col-sm-offset-1 col-md-7 col-md-offset-0"> 
        </div>        
        <div class="col-sm-10 col-sm-offset-1 col-md-5 col-md-offset-0">
            <div class="col-sm-12 col-no-padding">
                <h2>The Largest Selection in the Southwest</h2>
                <p>
                    <div class="col-xs-6 col-no-padding" style="padding-right:5px!important">
                        <a class="btn btn-success btn-block text-center" href="/commercial">Curv</a>
                    </div>                
                    <div class="col-xs-6 col-no-padding" style="padding-left:5px!important">
                        <a class="btn btn-success btn-block text-center" href="/residential">Beautyrest</a>
                    </div>
                </p>
                <div class="clearfix"></div>                
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sem massa, varius sed enim non, ornare egestas velit. Curabitur at scelerisque ligula, ut ultricies diam. <a href="/about-us">Learn More</a>
                </p>
            </div>
        </div>        
    </div>
</section>

<section class="primary-content">
    <div class="container col-no-padding-xs">
        <section class="main-col page-content col-sm-7">
            <div id="main" class="site-main" role="main">
                <?php
                while (have_posts()) {
                  the_post();

                  get_template_part('content', 'page');

                  echo "\n\n";
               // If comments are open or we have at least one comment, load up the comment template
                  if (comments_open() || '0' != get_comments_number()) {
                    comments_template();
                  }

                  echo "\n\n";

                } //endwhile;
                ?>
                <a class="btn btn-success" href="#">
                    <i class="fa fa-phone fa-1x"></i>
                    Call (555) 555-5555
                </a>
                    &nbsp;&nbsp;
                <a class="btn btn-success" href="/locations">
                    <i class="fa fa-map-marker fa-1x"></i>
                    Locations
                </a>             
           </div>
        </section>
        <section class="sidebar-col sidebar-right sidebar col-sm-5">
            <div class="col-sm-12 col-md-10 col-md-offset-2 col-no-padding">
<!--                 <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('sidebar-thumb', array('class' => 'feature-image attachment-sidebar-thumb img-rounded' ));
                    } 
                    else {
                        ?><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sidebar-default.jpg" class="feature-image attachment-sidebar-thumb wp-post-image img-rounded col-md-9 col-no-padding" alt="<?php wp_title('|', true, 'right'); ?>"><?php
                    }
                ?>   -->       
                <?php get_sidebar('default'); ?>
            </div>
        </section>
    </div>
</section>


<?php get_footer(); ?> 