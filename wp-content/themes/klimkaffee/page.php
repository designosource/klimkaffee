<?php get_header(); ?>

    <div class="page-title">
        <img src="<?php the_header_image_tag(); ?>" alt="">
        <h1 class=""><?php
			if ( $post->post_parent ) {
				$parent_title = get_the_title( $post->post_parent );
				echo $parent_title;
			} else {
				echo get_the_title( $post->ID );
			}
			?></h1>
        <h2 class=""><?php if ( $post->post_parent ) {
				$parent_subtitle = get_post_meta( wp_get_post_parent_id( $post->ID ), 'Subtitle', true );
				echo $parent_subtitle;
			} else {
				echo get_post_meta( get_the_ID(), 'Subtitle', true );
			} ?></h2>
    </div>

    <div class="row">
        <div class="col-sm-12">


        </div> <!-- /.col -->
    </div> <!-- /.row -->

<?php get_footer(); ?>