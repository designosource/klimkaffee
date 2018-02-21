<?php
/*
Template Name: Wat is
*/
?>

    <?php get_header(); ?>

        <div class="page-title" style="background-image: <?= $post->post_parent ? " url( " . wp_get_attachment_url(get_post_thumbnail_id($post->post_parent)) . ") " : " " . the_post_thumbnail(); ?>">

            <h1 class="banner"><?php if ($post->post_parent)
            {
                $parent_title = get_the_title($post->post_parent);
                echo $parent_title;
            } else
            {
                echo get_the_title($post->ID);
            }
            ?>
            </h1>
            <h2 class="banner"><?php if ($post->post_parent)
            {
                $parent_subtitle = get_post_meta(wp_get_post_parent_id($post->ID), 'Subtitle', true);
                echo $parent_subtitle;
            } else
            {
                echo get_post_meta(get_the_ID(), 'Subtitle', true);
            } ?></h2>
        </div>
        <div class="page-content page-openingsuren">
            <div class="custom-container">
                <div class="row">
                    <div class="col-md-3">
                        <?php get_sidebar(); ?>
                    </div>
                    
                    <div class="col-md-9">
                        <h2 class="introduction-title"><?php the_field('content_small_title') ?><?php if( !empty(get_field('content_small_title'))) { echo '<br>'; } ?><span><?php the_field('content_big_title') ?></span></h2>
                        <?php if (have_rows('content_blocks')): ?>
                                <?php while (have_rows('content_blocks')) : the_row() ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php the_sub_field('content'); ?>
                                        <?php if( !empty( get_sub_field('link_text') ) ) : ?>
                                            <a class="red-btn red-text" href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?></a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-md-6">
                                        <img src="<?php the_sub_field('image'); ?>" alt="Image wat is boulderen Klimkaffee">
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div> <!-- /row -->
                        <?php endif; ?>
                    </div> <!-- /col-md-10 -->
                </div> <!-- /row -->
            </div> <!-- /custom-container -->
        </div> <!-- /page-content -->

        <?php get_footer(); ?>