<?php
function wpb_custom_new_menu() {
	register_nav_menus(
		array(
			'main' => __( 'Main' ),
			'footer' => __( 'Footer')
		)
	);
}
add_action( 'init', 'wpb_custom_new_menu' );
add_theme_support( 'post-thumbnails' );

function bldrzl_add_options_page() {
	if ( function_exists( 'acf_add_options_page' ) ) {
		// add settings page
		acf_add_options_page(
			array(
				'page_title' => 'Boulderzaal Instellingen',
				'menu_title' => 'Boulderzaal',
				'menu_slug'  => 'theme-general-settings',
				'capability' => 'edit_posts',
				'redirect'   => FALSE,
			) );
	}
}

add_shortcode( 'bldrzl-album-loop', 'bldrzl_album_loop_functionality' );
function bldrzl_album_loop_functionality( $atts ) {
	ob_start();
	$repeater = 'bldrzl_albums'; // dit is de name van repeater field in field group
	if ( have_rows( $repeater, 'option' ) ): ?>

		<ul class="albums">
			<?php while ( have_rows( $repeater, 'option' ) ): the_row();
				$year   = get_sub_field( 'bldrzl_jaar', 'option' );
				$images = get_sub_field( 'bldrzl_fotos', 'option' );
				?>

				<li class="album">
					<ul class="images">
					<?php
					foreach ($images as $image){ ?>
							<li>
								<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>">
							</li>
					<?php }
					?>
					</ul>
				</li>

			<?php endwhile; ?>

		</ul>

	<?php endif;

	return ob_get_clean();
}

bldrzl_add_options_page();
