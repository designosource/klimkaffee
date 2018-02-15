<?php get_header(); ?>
	<div class="page-contact">
        <div class="row">
            <div class="col-md-4">
                <div id="map"></div>
            </div>
            <div class="col-md-4 page-contact-info blog-main">
                <h3>CONTACT</h3>
                <div class="contact-bits">
                    <div class="contact-bit">
                        <i class="fa fa-map-marker"></i>
                        <p><?php echo get_post_meta(get_the_id(), "address", true) ?></p>
                    </div>
                    <div class="contact-bit">
                        <i class="fa fa-envelope"></i>
                        <p><?php echo get_post_meta(get_the_id(), "email", true) ?></p>
                    </div>
                    <div class="contact-bit">
                        <i class="fa fa-phone"></i>
                        <p><?php echo get_post_meta(get_the_id(), "phone_number", true) ?></p>
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

            <?php get_sidebar(); ?>

        </div> <!-- /.row -->
    </div>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: {lat: -25.363, lng: 131.044}
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>


<?php get_footer(); ?>