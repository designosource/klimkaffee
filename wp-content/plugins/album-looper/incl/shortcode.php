<?php

add_shortcode( 'bldrzl-album-loop', 'bldrzl_album_loop_functionality' );
function bldrzl_album_loop_functionality( $atts ) {
	ob_start();
	$repeater = 'bldrzl_albums'; // dit is de name van repeater field in field group
	if ( have_rows( $repeater, 'option' ) ): ?>

		<ul class="albums boulderzaal">
		
		    <?php $i = 1; ?>
		
			<?php while ( have_rows( $repeater, 'option' ) ): the_row();
				$year   = get_sub_field( 'bldrzl_jaar', 'option' );
				$title  = get_sub_field( 'bldrzl_title', 'option' );
    
                $title = str_replace(" ","_",$title);
    
				$images = get_sub_field( 'bldrzl_fotos', 'option' );
				?>

				<li class="album" data-album="<?php echo $title; ?>">
					<ul class="images">
						<?php
						foreach ( $images as $image ) { ?>
							<a data-fancybox="gallery<?php echo $i; ?>" href="<?php echo $image['url'] ?>">
                                <li class="image" style="background-image:url('<?php echo $image['url'] ?>')"></li>
							</a>
						<?php }
						?>
					</ul>
				</li>

                <?php $i++; ?>
        
			<?php endwhile; ?>

		</ul>

	<?php endif;

	return ob_get_clean();
}
add_shortcode( 'bldrzl-album-loop-filter', 'bldrzl_album_loop_filter_functionality' );
function bldrzl_album_loop_filter_functionality( $atts ) {
	ob_start();
	$repeater = 'bldrzl_albums'; // dit is de name van repeater field in field group
    
    
    $albums = get_field('bldrzl_albums', 'option');

    $navigatie = array();
    foreach( $albums as $jaar ){
        $navigatie[$jaar['bldrzl_jaar']][] = $jaar;
    }
    
    echo '<ul class="submenu album-filter boulderzaal">';
    foreach($navigatie as $jaar) {

            echo "<li>" .
                "<p class='photo-navigation-year'>" . $jaar[0]['bldrzl_jaar'] . "</p>" .
                
                "<ul class='photo-albums-per-year'>";
                foreach( $jaar as $album ) {
                    
                    //print_r($album);
                    
                    $albumtitle_datafilter = str_replace(" ","_",$album["bldrzl_title"]);
                
                    echo "<li data-album='". $album["bldrzl_title"] . "'>" .
                            "<a href='javascript:void(null)' class='trigger' data-filter='". $albumtitle_datafilter . "'>" . $album['bldrzl_title'] . "</a>" .
                         "</li>";
                }
                
            echo "</ul></li>";
    }
    echo '</ul>';
        
	/*if ( have_rows( $repeater, 'option' ) ): ?>
        <div class="submenu">
            <ul class="album-filter boulderzaal">
                <?php while ( have_rows( $repeater, 'option' ) ): the_row();
                    $album_title  = get_sub_field( 'bldrzl_title', 'option' );
                    $album_title_data_filter = str_replace(" ","_",$album_title);
                    ?>
                    <li>
                        <a href="javascript:void(null)" class="trigger" data-filter="<?php echo $album_title_data_filter ?>" >
                            <?php echo $album_title ?>
                        </a>
                    </li>
                <?php endwhile; ?>

            </ul>
		</div>*/

	/*<?php endif;*/

	return ob_get_clean();
}