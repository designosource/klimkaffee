<?php get_header(); ?>
	<div class="page-contact">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-4">
                    <div id="map">

                    </div>
                </div>
                <style>
                    #map {
                        height: 600px;
                        width: 100%;
                    }
                </style>

                <script>
                    function initMap() {
                        var klimkaffee = {lat: <?php echo get_field('kaart')['lat']; ?>, lng: <?php echo get_field('kaart')['lng']; ?>};
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 16,
                            center: klimkaffee
                        });
                        var marker = new google.maps.Marker({
                            position: klimkaffee,
                            map: map
                        });
                    }
                </script>
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgMPREl8xsRcL_9-WDJz_5KjvYqijr-aE&callback=initMap">
                </script>
                <div class="col-md-4 page-contact-info blog-main">
                    <div class="contact-bit">
                        <h2>CONTACT</h2>
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
                </div>
                <div class="col-md-4 blog-main">
                    <h2>HEEFT U EEN VRAAG?</h2>
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