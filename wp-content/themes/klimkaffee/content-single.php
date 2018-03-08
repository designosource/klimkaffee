<div class="blog-post">
    <div class="blog-post-image content-single col-xs-12 col-md-5" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
	<div class="blog-post-content">
		<h2 class="blog-post-title"><?php the_title(); ?></h2>
		<h3><?php echo get_post_meta( get_the_ID(), 'Subtitle', true ); ?></h3>
		<?php the_content(); ?>
	</div>

</div><!-- /.blog-post -->