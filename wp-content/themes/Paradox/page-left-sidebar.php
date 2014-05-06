<?php
/*
Template Name: Left Sidebar
*/
?>

<?php get_header(); ?>

<section class="primary-content">
    <div class="container col-no-padding-xs">        
        <section class="container main-col page-content col-sm-7 col-sm-push-5 container">                
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
        <section class="sidebar-col sidebar sidebar-left col-sm-5 col-sm-pull-7">
            <div class="col-sm-10 col-no-padding">
                <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('sidebar-thumb', array('class' => 'feature-image attachment-sidebar-thumb img-rounded' ));
                    } 
                    else {
                        ?><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sidebar-default.jpg" class="feature-image attachment-sidebar-thumb wp-post-image img-rounded" alt="<?php wp_title('|', true, 'right'); ?>"><?php
                    }
                ?>                  
                <?php get_sidebar('default'); ?>       
            </div>                       
        </section>        
    </div>
</section>

<?php get_footer(); ?> 
