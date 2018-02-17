<?php
?></div> <!-- /.content -->

<footer>
	<nav>
	    <?php wp_nav_menu( array(
		    'theme_location'  => 'footer',
		    'container_class' => 'custom-menu-class'
	    ) ); ?>
    </nav>
    <div class="bottom">
        <div class="social-media">
            <a href="https://www.facebook.com/klimkaffee/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/klimkaffee/" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>

        <a href="https://www.designosource.be" target="_blank" class="copyright">&copy; 2017 - Designosource</a>

        <div class="links">
            <a href="#">Algemene voorwaarden</a>
            <a href="#">Huisregels</a>
        </div>
    </div>
</footer>
</div> <!-- /.container -->
<script src="<?php echo get_bloginfo( 'template_directory' ); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo get_bloginfo( 'template_directory' ); ?>/js/menu.js"></script>
<?php wp_footer(); ?>
</body>
</html>