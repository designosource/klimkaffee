<?php get_header();
include( 'banner.php' ) ?>
    <div class="page-content page-trainingen">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-3">
					<?php get_sidebar(); ?>
                </div>
                <div class="col-md-9">
                    <h2>Lessen</h2>
                    <h3><?php echo get_field( 'training_naam' ) ?></h3>
                    <p><?php echo get_field( 'training_beschrijving' ) ?></p>
                    <h3>Trainers</h3>
                    <div class="row">
                        <?php if ( have_rows( 'trainers' ) ): ?>
                           
                            <div class="col-md-12 trainer">
                            
							<?php while ( have_rows( 'trainers' ) ) : the_row() ?>
                                
                                <a href="<?php echo get_sub_field('trainer_link') ?>">
                                    <div class="trainer-image-container" style="background-image: url('<?php echo get_sub_field( 'trainer_picture' )["url"] ?>');"></div>
                                    <h4><?php echo get_sub_field( 'trainer_name' ) ?></h4>
                                </a>
                                
				            <?php endwhile; ?>
                           
                            </div>
                            
				        <?php endif; ?>
                   
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.row -->

<?php get_footer(); ?>
