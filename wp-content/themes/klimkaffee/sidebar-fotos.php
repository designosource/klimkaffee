<?php

    $albums = get_field('bldrzl_albums', 'option');

    $navigatie = array();
    foreach( $albums as $jaar ){
        $navigatie[$jaar['bldrzl_jaar']][] = $jaar;
    }

    //var_dump($navigatie);

    ?>
    
    <?php if( have_rows('bldrzl_albums') ) ?>
<div class="submenu">
    <h3><?php the_title(); ?></h3>
    <ul>
    <?php
    foreach($navigatie as $jaar) {
        ?>

            <li>
                <p class="photo-navigation-year"><?php echo $jaar[0]['bldrzl_jaar']; ?></p>
                
                <ul class="photo-albums-per-year">
                <?php foreach( $jaar as $album ) { ?>
                
                    <li data-album="<?php echo $jaar[0]['ID']; ?>">
                        <p class="album-name">
                            <?php echo $album['bldrzl_album_naam']; ?>
                        </p>
                    </li>
                <?php } ?>
                </ul>
            </li>
        <?php
    }
    ?>
    </ul>
</div>