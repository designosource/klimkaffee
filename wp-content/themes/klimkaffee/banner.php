<div class="page-title"
     style="background-image: url( <?php echo $post->post_parent > 0 ?  wp_get_attachment_url(get_post_thumbnail_id($post->post_parent)) :  wp_get_attachment_url(get_post_thumbnail_id($post)); ?>)">

	<h1><?php
		if ($post->post_parent) {
			$parent_title = get_the_title($post->post_parent);
			echo $parent_title;
		} else {
			echo get_the_title($post->ID);
		}
		?></h1>
	<p class="subtitle"><?php if ($post->post_parent) {
			$parent_subtitle = get_post_meta(wp_get_post_parent_id($post->ID), 'Subtitle', true);
			echo $parent_subtitle;
		} else {
			echo get_post_meta(get_the_ID(), 'Subtitle', true);
		} ?></p>
</div>
