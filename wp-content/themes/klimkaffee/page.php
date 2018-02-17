<?php get_header();
include( 'banner.php' ) ?>
    <div class="page-content">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-2">
					<?php get_sidebar(); ?>
                </div>
                <div class="col-md-10">
					<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post();
						get_template_part( 'content-single', get_post_format() );
					endwhile;
					endif;
					?>

                </div>
            </div>
        </div>
    </div> <!-- /.row -->

<?php get_footer(); ?>