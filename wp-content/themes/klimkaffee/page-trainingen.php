<?php get_header();
include( 'banner.php' ) ?>
    <div class="page-content page-trainingen">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-3">
					<?php get_sidebar(); ?>
                </div>
                <div class="col-md-9">
                    <h4><?php echo get_field( 'training_naam' ) ?></h4>
                    <p><?php echo get_field( 'training_beschrijving' ) ?></p>
                    <h4>Trainers</h4>
                    <div class="row">
						<?php
						if ( have_rows( 'trainers' ) ):

							// loop through the rows of data
							while ( have_rows( 'trainers' ) ) : the_row();

								// display a sub field value
								?>
                                <div class="col-md-3 trainer">
                                    <img src="<?php echo get_sub_field( 'trainer_picture' )["url"] ?>"
                                         alt="<?php echo get_sub_field( 'trainer_name' ) ?>">
                                    <h4><?php echo get_sub_field( 'trainer_name' ) ?></h4>
                                </div>
								<?php

							endwhile;

						endif;
						?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.row -->

<?php get_footer(); ?>