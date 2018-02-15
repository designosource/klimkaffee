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
    <div class="page-content page-trainingen">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-2">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-md-10">
                    <h4><?php echo get_field('training_naam') ?></h4>
                    <p><?php echo get_field('training_beschrijving') ?></p>
                    <h4>Trainers</h4>
                    <div class="row">
                        <?php
                        if (have_rows('trainers')):

                            // loop through the rows of data
                            while (have_rows('trainers')) : the_row();

                                // display a sub field value
                                ?>
                                <div class="col-md-3 trainer">
                                    <img src="<?php echo get_sub_field('trainer_picture')["url"] ?>" alt="<?php echo get_sub_field('trainer_name') ?>">
                                    <h4><?php echo get_sub_field('trainer_name') ?></h4>
                                </div>
                            <?php

                            endwhile;

                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.row -->

<?php get_footer(); ?>