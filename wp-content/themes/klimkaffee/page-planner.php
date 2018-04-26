<?php get_header();
include( 'banner.php' ) ?>
    <div class="page-content page-prijzen">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-4 planner-link">
                    <a href="<?php echo get_site_url(); ?>/planner/register">REGISTREER</a>
                    <a href="<?php echo get_site_url(); ?>/planner/register" class="planner-link-image" style="background-image: url(<?php the_field( 'registreer_foto' ); ?>)"></a>
                    <?php the_field( 'registreer_uitleg' ); ?>
                </div>
                <div class="col-md-4 planner-link">
                    <a href="<?php echo get_site_url(); ?>/planner/shop">SHOP</a>
                    <a href="<?php echo get_site_url(); ?>/planner/shop" class="planner-link-image" style="background-image: url<?php the_field( 'shop_foto' ); ?>?>)"></a>
                    <?php the_field( 'shop_uitleg' ); ?>
                </div>
                <div class="col-md-4 planner-link">
                    <a href="<?php echo get_site_url(); ?>/planner/reserveer">RESERVEER</a>
                    <a href="<?php echo get_site_url(); ?>/planner/reserveer"class="planner-link-image" style="background-image: url(<?php the_field( 'reserveer_foto' ); ?>)"></a>
                    <?php the_field( 'reserveer_uitleg' ); ?>
                </div>
            </div>
        </div>
    </div> <!-- /.row -->

<?php get_footer(); ?>
