<?php
/*
Template Name: Homepage
*/
?>

<?php

	get_header();

?>

<main role="main">
    <!-- section -->
    <section>

        <?php if( have_rows('header_slider') ): ?>

        <div class="slick-slider">

            <ul class="slick-container">

                <?php while ( have_rows('header_slider') ) : the_row() ?>

                    <li class="slick-item" style="background-image: url('<?php the_sub_field('background_image') ?>');">
                        <div class="maxwidth">
                            <div class="slide-text">
                                <h1><?php the_sub_field('small_title') ?><br><span><?php the_sub_field('big_title') ?></span></h1>
                                <p><?php the_sub_field('sub_title') ?></p>
                                <a href="<?php the_sub_field('link_url') ?>" class="slider-btn"><?php the_sub_field('link_text') ?></a>
                            </div>
                        </div>
                    </li>

                <?php endwhile; ?>

            </ul> <!-- /slick-container -->

        </div> <!-- /slick-slider -->
        <div class="clearfix"></div>

        <?php endif; ?>

        <div class="page-content page-homepage">
            <div class="custom-container">
            
                <h2><?php the_field('introduction_small_title') ?><br><span><?php the_field('introduction_big_title') ?></span></h2>
            
                <div class="row">
                    <div class="col-md-7">

                        <!-- Content -->
                        <?php the_field('introduction_content'); ?>

                    </div>

                    <div class="col-md-5">

                        <!-- Image -->
                        <img src="<?php the_field('introduction_image'); ?>" alt="Image homepage Klimkaffee">

                    </div>
                </div>
            
            </div>
        </div>
        <div class="clearfix"></div>
   
   
    </section>
    <!-- /section -->
</main>

<?php get_footer(); ?>