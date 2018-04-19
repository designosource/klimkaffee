<?php get_header();?>
    <div class="page-content page-shop">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-10">
                    <h1><?php the_title(); ?></h1>
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
