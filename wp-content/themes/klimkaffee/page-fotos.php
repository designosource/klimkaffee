<?php
/*
Template Name: Photo gallery
*/
?>

<?php

	get_header();

?>

<main role="main">
    <!-- section -->
    <section>

        <div class="page-content page-openingsuren">
            <div class="custom-container">
                <div class="row">
                    <div class="col-md-3">
                       
                        <?php get_sidebar(); ?>
                        
                    </div>
                    
                    <?php
                    
                        $query_images_args = array(
                            'post_type'      => 'attachment',
                            'post_mime_type' => 'image',
                            'post_status'    => 'inherit',
                            'posts_per_page' => - 1,
                        );

                        $query_images = new WP_Query( $query_images_args );

                        $images = array();
                        foreach ( $query_images->posts as $image ) {
                            $images[] = wp_get_attachment_url( $image->ID );
                        }
                        //var_dump($images);

                    ?>
                    <div class="col-md-9">
                                               
                        <?php if( !empty( $images ) ) : ?>
                        
                            <div class="photo-gallery">
                           
                            <?php foreach ($images as $key=>$singleImage): ?>

                                <div class="single-photo">
                                
                                    <img src="<?php echo $singleImage ?>" alt="Photo gallery Klimkaffee">
                                
                                </div>

                            <?php endforeach; ?>
                            
                            </div>
                        
                        <?php endif; ?>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
    </section>
    <!-- /section -->
</main>

<?php get_footer(); ?>