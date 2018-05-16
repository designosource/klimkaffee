<?php
/*
Template Name: Wat is
*/
get_header();
include( 'banner.php' ) ?>
    <div class="page-content page-openingsuren">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-3">
					<?php get_sidebar(); ?>
                </div>

                <div class="col-md-9">
                    <p class="small-title"><?php if(!empty(get_field('content_small_title'))) the_field( 'content_small_title' ) ?></p>
                    <h2><?php the_field( 'content_big_title' ) ?></h2>
					<?php if ( have_rows( 'content_blocks' ) ): ?>
					<?php while ( have_rows( 'content_blocks' ) ) : the_row() ?>
                        <div class="row">

                            <div class="col-md-6">
                                <img src="<?php the_sub_field( 'image' ); ?>" alt="Image wat is boulderen Klimkaffee">
                            </div>
                            <div class="col-md-6">
								<?php the_sub_field( 'content' ); ?>
								<?php if ( ! empty( get_sub_field( 'link_text' ) ) ) : ?>
                                    <a class="red-btn red-text"
                                       href="/planner"><?php the_sub_field( 'link_text' ); ?></a>
								<?php endif; ?>
                            </div>
                        </div>
					<?php endwhile; ?>
                </div> <!-- /row -->
				<?php endif; ?>
            </div> <!-- /col-md-10 -->
        </div> <!-- /row -->
    </div> <!-- /custom-container -->
    </div> <!-- /page-content -->

<?php get_footer(); ?>
