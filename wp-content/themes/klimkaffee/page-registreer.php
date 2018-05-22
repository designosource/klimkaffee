<?php get_header();?>
    <div class="page-content page-register"
    style="background-image: url('http://klimkaffee.akxis.io/wp-content/uploads/2018/04/planner.png')">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-4 title">
                    <h2>Maak een account aan om verder te gaan</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 register-form">
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
