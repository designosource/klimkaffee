<?php get_header();
include( 'banner.php' ) ?>
    <div class="page-content page-prijzen">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-3">
					<?php get_sidebar(); ?>
                </div>
                <div class="col-md-9">
                    <h2><?php the_title(); ?></h2>
                    <p class="prijzen-cta">Eerste keer boulderen, een beurtenkaart of een abonnement? Klik hieronder om jouw kaart aan te kopen.</p>
                    <a href="/planner/shop" class="red-btn">Koop hier</a>
					<?php if ( have_rows( 'categorie' ) ):
						// loop through the rows of data
						while ( have_rows( 'categorie' ) ) : the_row();
							// display a sub field value ?>
                            <div class="sub-content col-md-12">
                                <h3><?php echo get_sub_field( 'categorie_naam' ) ?></h3>
                                <div class="prices">
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
                                <div>
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