<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<!-- Subheader Section -->
<section class="masthead">
    <div class="container col-no-padding-xs">        
        <div class="col-sm-10 col-sm-offset-1 col-md-7 col-md-offset-0"> 
            <div class="flex-video widescreen">                
                <iframe src="//www.youtube.com/embed/HR45Fcun7Gg?autohide=1&modestbranding=1&rel=0&showinfo=0" height="374" width="680" controls="2" allowfullscreen="" frameborder="0"></iframe>                                                      
            </div>
        </div>        
        <div class="col-sm-10 col-sm-offset-1 col-md-5 col-md-offset-0">
            <div class="col-sm-12 col-md-11 col-md-offset-1 col-no-padding">
                <h2 class="clipboard-icon" >Inspect Your Investment</h2>
                <div class="col-xs-6 col-no-padding" style="padding-right:5px">
                    <a class="btn btn-danger btn-block text-center" href="/commercial">
                        <i class="fa fa-building fa-1x"></i>
                        Commercial
                    </a>
                </div>                
                <div class="col-xs-6 col-no-padding" style="padding-left:5px">
                    <a class="btn btn-primary btn-block text-center" href="/residential">
                        <i class="fa fa-home fa-1x"></i>
                        Residential
                    </a>
                </div>
                <div class="clearfix"></div>                
                <p>
                    Our 200 point, 50-100 digitally documented inspection gives you the comfort of knowing that your real estate purchase, sale or lease is being tested, inspected and analyzed by the best in the business. <a href="/about-us">Learn More</a>
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
                <a class="btn btn-danger" href="#">
                    <i class="fa fa-phone fa-1x"></i>
                    Call (972) 492-7920
                </a>
                    
                <a class="btn btn-danger" href="/contact-us">
                    <i class="fa fa-envelope fa-1x"></i>
                    Email Us
                </a>                  
           </div>
        </section>
        <section class="sidebar-col sidebar-right sidebar col-sm-5">
            <div class="col-sm-12 col-md-10 col-md-offset-2 col-no-padding-xs">
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