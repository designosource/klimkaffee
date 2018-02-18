<div class="blog-post">
	<?php the_post_thumbnail(); ?>

	<div class="blog-post-content">
		<h1 class="blog-post-title"><?php the_title(); ?></h1>
		<h2><?php echo get_post_meta( get_the_ID(), 'Subtitle', true ); ?></h2>
		<?php the_content(); ?>
	</div>

</div><!-- /.blog-post -->