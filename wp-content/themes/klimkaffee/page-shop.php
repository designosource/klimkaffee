<?php get_header();?>
<div class="page-title"
     style="background-image: url( <?php echo $post->post_parent > 0 ?  wp_get_attachment_url(get_post_thumbnail_id($post->post_parent)) :  wp_get_attachment_url(get_post_thumbnail_id($post)); ?>)">
    <h1>SHOP</h1>
</div>
    <div class="page-content page-shop">
        <div class="custom-container">
            <p style="max-width: 100%;">Klik op één van de onderstaande opties om je aankoop te vervolledigen</p>
                    <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                        get_template_part( 'content-only-content', get_post_format() );
                    endwhile;
                    endif;
                    ?>
        </div>
    </div> <!-- /.row -->

<?php get_footer(); ?>
