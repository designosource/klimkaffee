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
                </div>
            </div>
        </div>
    </div> <!-- /.row -->

<?php get_footer(); ?>