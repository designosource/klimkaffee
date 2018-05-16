<?php
/*
Template Name: Trainers
*/
?>

<?php

	get_header();

?>
<div class="page-title"
     style="background-image: url('<?php the_field('header_image'); ?>');">

	<h1><?php the_field('header_title') ?></h1>
	<p class="subtitle"><?php the_field('header_subtitle') ?></p>
</div>
    <div class="page-content page-trainingen">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-3">
					<?php get_sidebar(); ?>
                </div>
                <div class="col-md-9">
                    <h2><?php the_title(); ?></h2>
                    <div class="row">
                        <div class="col-md-12">
                            <img class="col-md-12 inline-image" src="<?php echo get_field('trainer_afbeelding')['url'] ?>" alt="<?php echo get_field('trainer_afbeelding')['alt'] ?>">
                            <?php the_field( 'trainer_omschrijving' ) ?>
                        </div>
                    </div>
                    <?php
                        if (have_rows('aanwezige_uren')):

                            // loop through the rows of data
                            while (have_rows('aanwezige_uren')) : the_row();

                                // display a sub field value
                                ?>
                                <div class="opening-moment">
                                    <p><?php echo get_sub_field('dagen'); ?></p>
                                    <div class="opening-bar">
                                        <div class="opening-bar-inner" style="left: <?php echo get_sub_field('start_uur') / 24 * 100 ?>%; width: <?php echo (get_sub_field('eind_uur') - get_sub_field('start_uur')) / 24 * 100 ?>%;">
                                            <p><?php echo get_sub_field('start_uur'); ?>u</p>
                                            <p><?php echo get_sub_field('eind_uur'); ?>u</p>
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