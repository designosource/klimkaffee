<?php get_header(); ?>

    <div class="row">

        <div class="col-xs-10 col-xs-offset-1 blog-main">

			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'content-single', get_post_format() );

			endwhile;
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Volgende post') . '</span> ',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Vorige post' ) . '</span> '
				) );
			endif;
			?>

        </div> <!-- /.blog-main -->

    </div> <!-- /.row -->

<?php get_footer(); ?>