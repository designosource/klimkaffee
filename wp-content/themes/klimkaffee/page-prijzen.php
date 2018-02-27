<?php get_header();
include( 'banner.php' ) ?>
    <div class="page-content page-prijzen">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-3">
					<?php get_sidebar(); ?>
                </div>
                <div class="col-md-9">
                    <h1><?php the_title(); ?></h1>
					<?php if ( have_rows( 'categorie' ) ):
						// loop through the rows of data
						while ( have_rows( 'categorie' ) ) : the_row();
							// display a sub field value ?>
                            <div class="sub-content col-md-12">
                                <h2><?php echo get_sub_field( 'categorie_naam' ) ?></h2>
                                <div class="prices col-md-12">
									<?php if ( have_rows( 'categorie_soort' ) ):
										// loop through the rows of data
										while ( have_rows( 'categorie_soort' ) ) : the_row();
											// display a sub field value ?>
                                            <div class="price col-xs-12 col-sm-3">
                                                <p class="price-tag"><?php echo get_sub_field( 'soort_naam' ) ?></p>
                                                <p class="price-value">€ <?php echo get_sub_field( 'soort_prijs' ) ?></p>
                                            </div>
										<?php endwhile; endif; ?>
                                </div>
                                <div class="col-md-12 no-padding">
                                    <?php if( !empty( get_sub_field('extra_information') ) ): ?>
                                    
                                        <?php the_sub_field('extra_information'); ?>
                                    
                                    <?php endif; ?>
                                </div>
                            </div>
						<?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div> <!-- /.row -->

<?php get_footer(); ?>