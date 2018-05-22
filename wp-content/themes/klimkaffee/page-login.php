<?php get_header();?>
    <div class="page-content page-shop">
        <div class="custom-container">
            <div class="page-title"
                 style="background-image: url('http://klimkaffee.akxis.io/wp-content/uploads/2018/04/planner.png')">
                <h1>LOGIN</h1>
            </div>
                    <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                        get_template_part( 'content-only-content', get_post_format() );
                    endwhile;
                    endif;
                    ?>
        </div>
    </div> <!-- /.row -->

<?php get_footer(); ?>
