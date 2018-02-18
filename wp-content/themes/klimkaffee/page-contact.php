<?php get_header(); ?>
	<div class="page-contact">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-4">
                    <div class="acf-map">
                        <div class="marker" data-lat="<?php echo get_field('kaart')['lat']; ?>" data-lng="<?php echo get_field('kaart')['lng']; ?>"></div>
                    </div>
                </div>
                <div class="col-md-4 page-contact-info blog-main">
                    <h3>CONTACT</h3>
                    <div class="contact-bits">
                        <div class="contact-bit">
                            <i class="fa fa-map-marker"></i>
                            <p><?php echo get_field("address") ?></p>
                        </div>
                        <div class="contact-bit">
                            <i class="fa fa-envelope"></i>
                            <p><?php echo get_field("email") ?></p>
                        </div>
                        <div class="contact-bit">
                            <i class="fa fa-phone"></i>
                            <p><?php echo get_field("phone_number") ?></p>
                        </div>
                    </div>
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 blog-main">
                    <h3>HEEFT U EEN VRAAG?</h3>
                    <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();

                        get_template_part( 'content-only-content', get_post_format() );

                    endwhile; endif;
                    ?>

                </div> <!-- /.blog-main -->

            </div> <!-- /.row -->
        </div>
    </div>


<?php get_footer(); ?>