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
                        <p>Douaneplain 2800 Mechelen</p>
                    </div>
                    <div class="contact-bit">
                        <i class="fa fa-envelope"></i>
                        <p>boulder@klimkaffee.be</p>
                    </div>
                    <div class="contact-bit">
                        <i class="fa fa-phone"></i>
                        <p>04xx xx xx xx</p>
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