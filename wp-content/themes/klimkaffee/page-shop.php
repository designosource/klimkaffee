<?php get_header();
include( 'banner.php' ) ?>
    <div class="page-content">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-9">
                    <h2><?php the_title(); ?></h2>
                    <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                        get_template_part( 'content-only-content', get_post_format() );
                    endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div> <!-- /.row -->

<?php get_footer(); ?>