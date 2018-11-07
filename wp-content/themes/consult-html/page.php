<?php get_header();?>


<div class="looking_for_specific_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="looking_for_left para_default">


                    <?php while ( have_posts() ) : the_post(); ?>

            
                    <h3><?php echo the_title()?></h3>
                    <p><?php the_content() ?></p>
                    <?php endwhile; ?>
                </div>
            </div>
        
        </div><!--row -->
    </div><!--container -->
</div><!--looking_for_specific_area -->


<?php get_footer();?>