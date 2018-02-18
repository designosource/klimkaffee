<?php get_header(); ?>

    <div class="page-title"
         style="background-image: <?= $post->post_parent ? "url(" . wp_get_attachment_url(get_post_thumbnail_id($post->post_parent)) . ")" : "" . the_post_thumbnail(); ?>">

        <h1 class="banner"><?php
            if ($post->post_parent) {
                $parent_title = get_the_title($post->post_parent);
                echo $parent_title;
            } else {
                echo get_the_title($post->ID);
            }
            ?></h1>
        <h2 class="banner"><?php if ($post->post_parent) {
                $parent_subtitle = get_post_meta(wp_get_post_parent_id($post->ID), 'Subtitle', true);
                echo $parent_subtitle;
            } else {
                echo get_post_meta(get_the_ID(), 'Subtitle', true);
            } ?></h2>
    </div>
    <div class="page-content page-openingsuren">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-2">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-md-10">
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