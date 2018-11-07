
<?php /* Template Name: Notice Template */ ?>


<?php get_header();?>


<div class="looking_for_specific_area">
    <div class="container">
   
    <?php $args = array( 'post_type' => 'my_notice', 'posts_per_page' => 10 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <div class="row">
            <div class="col-md-6">
                <div class="looking_for_left para_default">
                    <h3><?php the_title()?></h3>
                    <p><?php the_content()?></p>

                
                </div>
            </div>
            <div class="col-md-6">
                <div class="looking_for_right image_fulwidth wow fadeInRight" data-wow-delay="300ms">
                    <?php the_post_thumbnail()?>
                </div>
            </div>
            
        </div><!--row -->
            <?php endwhile;?>


        
    </div><!--container -->
</div><!--looking_for_specific_area -->


<?php get_footer();?>