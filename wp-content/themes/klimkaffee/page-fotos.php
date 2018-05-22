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
                       
                        <?php echo do_shortcode('[bldrzl-album-loop-filter]'); ?>
                        
                    </div>
                    
                    <div class="col-md-9">

                        <div class="line-wrapper">
                            <h2>Foto's</h2>

                            <?php echo do_shortcode('[bldrzl-album-loop]'); ?>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
    </section>
    <!-- /section -->
</main>

<?php get_footer(); ?>