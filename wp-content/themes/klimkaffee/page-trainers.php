<?php
/*
Template Name: Trainers
*/
?>

<?php

	get_header();

?>
<?php include( 'banner.php' ) ?>
    <div class="page-content page-trainingen">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-3">
					<?php get_sidebar(); ?>
                </div>
                <div class="col-md-9">
                    <h2><?php the_title(); ?></h2>
                    <div class="row">
                        <div class="col-md-6">
                            <?php the_field( 'trainer_omschrijving' ) ?>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo get_field('trainer_afbeelding')['url'] ?>" alt="<?php echo get_field('trainer_afbeelding')['alt'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <?php 
                            $args = array(
                                    'post_parent' => $post->post_parent,
                                    'post_type'   => 'page',
                                    'order'		  => 'ASC',
                                    'numberposts' => -1,
                                    'post_status' => 'published'
                            );
                            $children = get_children( $args );
                        ?>
                        
                        <?php foreach($children as $child): ?>
                        
                            <div class="col-md-4">
                                
                                <div class="trainer-name">
                                    <?php echo "Hier komt de trainer naam"; ?>
                                </div>
                                <div class="trainer-image">
                                    <img src="#" alt="Hier komt de trainer image">
                                </div>
                                
                            </div>
                        
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.row -->

<?php get_footer(); ?>