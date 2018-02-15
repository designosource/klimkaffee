<?php get_header(); ?>

    <div class="page-title" style="background-image: <?= $post->post_parent ? "url(".wp_get_attachment_url( get_post_thumbnail_id($post->post_parent) ).")" : "".the_post_thumbnail(); ?>">

        <h1 class="banner"><?php
			if ( $post->post_parent ) {
				$parent_title = get_the_title( $post->post_parent );
				echo $parent_title;
			} else {
				echo get_the_title( $post->ID );
			}
			?></h1>
        <h2 class="banner"><?php if ( $post->post_parent ) {
				$parent_subtitle = get_post_meta( wp_get_post_parent_id( $post->ID ), 'Subtitle', true );
				echo $parent_subtitle;
			} else {
				echo get_post_meta( get_the_ID(), 'Subtitle', true );
			} ?></h2>
    </div>
    <div class="page-content">


    <div class="row">
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-md-9">
                <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'content-single', get_post_format() );
                endwhile;
                endif;
                ?>

            </div>
    </div>
    </div> <!-- /.row -->

<?php get_footer(); ?>