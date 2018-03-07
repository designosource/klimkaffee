<?php
?></div> <!-- /.content -->

<footer>
	<nav>
	    <?php wp_nav_menu( array(
		    'theme_location'  => 'footer',
		    'container_class' => 'custom-menu-class'
	    ) ); ?>

        <div class="go-up">
            <div class="arrow"></div>
        </div>
    </nav>
    <div class="bottom">
        <div class="social-media">
            <a href="https://www.facebook.com/klimkaffee/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/klimkaffee/" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>

        <a href="https://www.designosource.be" target="_blank" class="copyright">&copy; 2017 - Designosource</a>

        <div class="links">
            <a href="/<?php the_field('algemene_voorwaarden', 'boulderhal')?>">Algemene voorwaarden</a>
            <a href="/<?php the_field('huisregels', 'boulderhal')?>">Huisregels</a>
        </div>
    </div>
</footer>
</div> <!-- /.container -->
<script src="<?= get_bloginfo( 'template_directory' ); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?= get_bloginfo( 'template_directory' ); ?>/js/menu.js"></script>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js" ></script>
<script src="<?= get_bloginfo( 'template_directory' ); ?>/js/script.js" ></script>
<?php wp_footer(); ?>
</body>
</html>