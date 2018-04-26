<?php get_header(); ?>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 blog-main">
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;
        endif;?>
        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>
        </div> <!-- /.blog-main -->
    </div> <!-- /.row -->
<?php get_footer(); ?>
