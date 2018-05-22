<?php
/*
Template Name: Groepen
*/
?>

<?php get_header();
include('banner.php') ?>
    <div class="page-content page-prijzen">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-3">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-md-9">
                    <div class="line-wrapper">
                        <h2><?php the_title(); ?></h2>
                        <?php the_field('text') ?>
                        <a href="<?php the_field('link_url') ?>" target="_blank"
                           class="red-btn red-text"><?php the_field('link_text'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.row -->

<?php get_footer(); ?>