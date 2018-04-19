<?php get_header();
include( 'banner.php' ) ?>
    <div class="page-content page-prijzen">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-4 planner-link">
                    <a href="<?php echo get_site_url(); ?>/planner/register" class="planner-link-image" style="background-image: url( <?php echo $post->post_parent > 0 ?  wp_get_attachment_url(get_post_thumbnail_id($post->post_parent)) :  wp_get_attachment_url(get_post_thumbnail_id($post)); ?>)"></a>
                    <a href="<?php echo get_site_url(); ?>/planner/register">REGISTREER</a>
                </div>
                <div class="col-md-4 planner-link">
                    <a href="<?php echo get_site_url(); ?>/planner/shop" class="planner-link-image" style="background-image: url( <?php echo $post->post_parent > 0 ?  wp_get_attachment_url(get_post_thumbnail_id($post->post_parent)) :  wp_get_attachment_url(get_post_thumbnail_id($post)); ?>)"></a>
                    <a href="<?php echo get_site_url(); ?>/planner/shop">SHOP</a>
                </div>
                <div class="col-md-4 planner-link">
                    <a href="<?php echo get_site_url(); ?>/planner/reserveer"class="planner-link-image" style="background-image: url( <?php echo $post->post_parent > 0 ?  wp_get_attachment_url(get_post_thumbnail_id($post->post_parent)) :  wp_get_attachment_url(get_post_thumbnail_id($post)); ?>)"></a>
                    <a href="<?php echo get_site_url(); ?>/planner/reserveer">RESERVEER</a>
                </div>
            </div>
        </div>
    </div> <!-- /.row -->

<?php get_footer(); ?>
