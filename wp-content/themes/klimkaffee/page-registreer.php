<?php get_header();?>
    <div class="page-content page-register"
    style="background-image: url( <?php echo $post->post_parent > 0 ?  wp_get_attachment_url(get_post_thumbnail_id($post->post_parent)) :  wp_get_attachment_url(get_post_thumbnail_id($post)); ?>)">
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
