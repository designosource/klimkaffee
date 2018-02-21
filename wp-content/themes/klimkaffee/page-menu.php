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
					<?php the_field( 'tekst' ) ?>
                    <a href="<?php the_field( 'menu_link' ) ?>" target="_blank" class="red-btn red-text">Bekijk menu</a>
                </div>
            </div>
        </div>
    </div> <!-- /.row -->

<?php get_footer(); ?>