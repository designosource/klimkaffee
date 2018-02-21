<?php get_header();
include( 'banner.php' )?>

    <div class="page-content page-openingsuren">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-3">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-md-9">
                    <h4><?php echo get_field('training_naam') ?></h4>
                    <p><?php echo get_field('training_beschrijving') ?></p>
                    <h1>Openingsuren</h1>
                        <?php
                        if (have_rows('openingsuren')):

                            // loop through the rows of data
                            while (have_rows('openingsuren')) : the_row();

                                // display a sub field value
                                ?>
                                <div class="opening-moment">
                                    <p><?php echo get_sub_field('dagen'); ?></p>
                                    <div class="opening-bar">
                                        <div class="opening-bar-inner" style="left: <?php echo get_sub_field('openingsuur') / 24 * 100 ?>%; width: <?php echo (get_sub_field('sluitingsuur') - get_sub_field('openingsuur')) / 24 * 100 ?>%;">
                                            <p><?php echo get_sub_field('openingsuur'); ?>u</p>
                                            <p><?php echo get_sub_field('sluitingsuur'); ?>u</p>
                                        </div>
                                    </div>
                                </div>
                            <?php

                            endwhile;

                        endif;
                        ?>
                </div>
            </div>
        </div>
    </div> <!-- /.row -->

<?php get_footer(); ?>