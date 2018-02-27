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
					<?php if ( have_rows( 'content' ) ):
						// loop through the rows of data
						while ( have_rows( 'content' ) ) : the_row();
							// display a sub field value ?>
                            <div class="row sub-content">
                                <div class="col-xs-12 col-md-6">
									<?php if ( have_rows( 'content_type' ) ):
										while ( have_rows( 'content_type' ) ) :
											the_row(); ?>
                                            <div class="sub-content">
												<?php if ( get_row_layout() == 'tekst' ):
													the_sub_field( 'tekst' );
                                                elseif ( get_row_layout() == 'afbeelding' ):
													$image = get_sub_field( 'afbeelding' );
													echo '<img class="col-md-12" src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
												endif; ?>
                                            </div>
										<?php endwhile; endif; ?>

                                </div>
                                <div class="col-xs-12 col-md-6">
									<?php if ( have_rows( 'content_type_2' ) ):
										while ( have_rows( 'content_type_2' ) ) :
											the_row(); ?>
                                            <div class="sub-content">
												<?php if ( get_row_layout() == 'tekst' ):
													the_sub_field( 'tekst' );
                                                elseif ( get_row_layout() == 'afbeelding' ):
													$image = get_sub_field( 'afbeelding' );
													echo '<img class="col-md-12" src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
												endif; ?>
                                            </div>
										<?php endwhile; endif; ?>

                                </div>
                            </div>
						<?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div> <!-- /.row -->

<?php get_footer(); ?>