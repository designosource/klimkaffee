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

			<?php if ( have_rows( 'header_slider' ) ): ?>

                <div class="slick-slider">

                    <ul class="slick-container">

						<?php while ( have_rows( 'header_slider' ) ) : the_row() ?>

                            <li class="slick-item"
                                style="background-image: url('<?php the_sub_field( 'background_image' ) ?>');">
                                <div class="maxwidth">
                                    <div class="slide-text">
                                        <h1 class="align-left"><?php the_sub_field( 'small_title' ) ?>
                                            <br><span><?php the_sub_field( 'big_title' ) ?></span></h1>
                                        <p><?php the_sub_field( 'sub_title' ) ?></p>
                                        <a href="<?php the_sub_field( 'link_url' ) ?>"
                                           class="slider-btn"><?php the_sub_field( 'link_text' ) ?></a>
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
                    <h2 class="introduction-title"><?php the_field( 'introduction_small_title' ) ?>
                        <br><span><?php the_field( 'introduction_big_title' ) ?></span></h2>

                    <div class="row">
                        <div class="col-md-6">

							<?php the_field( 'introduction_content' ); ?>

                        </div>

                        <div class="col-md-6">

                            <img src="<?php the_field( 'introduction_image' ); ?>" alt="Image homepage Klimkaffee">

                        </div>
                    </div>
                </div>
            </div>

            <div class="row homepage-aanbod"
                 style="background-image: url('<?php the_field( 'aanbod_background_image' ); ?>');">

                <h2 class="white"><?php the_field( 'aanbod_title' ); ?></h2>

				<?php if ( have_rows( 'aanbod_information_blocks' ) ): ?>
                    <div class="row">
						<?php while ( have_rows( 'aanbod_information_blocks' ) ) : the_row() ?>

                            <div class="col-md-4">
                                <img src="<?php the_sub_field( 'image' ); ?>" alt="Klimkaffee foto aanbod">
                                <h4><?php the_sub_field( 'title' ); ?></h4>
								<?php the_sub_field( 'content' ); ?>
                                <a class="red-btn"
                                   href="<?php the_sub_field( 'link_url' ); ?>"><?php the_sub_field( 'link_text' ); ?></a>
                            </div>
						<?php endwhile; ?>
                    </div>
				<?php endif; ?>

            </div>

            <div class="row light-pink">

                <div class="col-md-6 dark-pink homepage-openingsuren">

                    <h2 class="center"><?php the_field( 'openingsuren_title' ); ?></h2>

                    <div class="homepage-openingsuren-inner-container">
						<?php if ( have_rows( 'openingsuren' ) ): ?>

							<?php while ( have_rows( 'openingsuren' ) ) : the_row() ?>
                                <div class="openingsuren-item">
                                    <div class="openingsuren-dagen"><?php the_sub_field( 'day' ); ?></div>
                                    <div class="openingsuren-dagen"><?php the_sub_field( 'hours' ); ?></div>
                                </div>
							<?php endwhile; ?>

                            <p><?php the_field( 'openingsuren_sidenote' ); ?></p>

						<?php endif; ?>
                    </div>

                </div>

                <div class="col-md-6 light-pink homepage-contact">

                    <h2 class="center"><?php the_field( 'contact_title' ); ?></h2>

                    <div class="homepage-contact-inner-container">

                        <div class="contact-item">

                            <img src="<?php the_field( 'contact_location_image' ); ?>" alt="Image location">
                            <a href="<?php the_field( 'contact_location_maps' ); ?>"><?php the_field( 'contact_location' ); ?></a>

                        </div>

                        <div class="contact-item">

                            <img src="<?php the_field( 'contact_email_image' ); ?>" alt="Image mail">
                            <a href="mailto:<?php the_field( 'contact_email' ); ?>"><?php the_field( 'contact_email' ); ?></a>

                        </div>

                        <div class="contact-item">

                            <img src="<?php the_field( 'contact_telephone_image' ); ?>" alt="Image telephone">
                            <a href="tel:<?php the_field( 'contact_telephone' ); ?>"><?php the_field( 'contact_telephone' ); ?></a>

                        </div>

                    </div>

                </div>

            </div>

            <div class="clearfix"></div>

        </section>
        <!-- /section -->
    </main>

<?php get_footer(); ?>