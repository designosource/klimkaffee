<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="KlimKaffee biedt het ultieme boulderplezier op onze wand voor jong en oud, beginner tot gevorderde.">
    <meta name="author" content="Designosource">

    <meta property="og:url" content="https://klimkaffee.be">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Klimkaffee">
    <meta property="og:description"
          content="KlimKaffee biedt het ultieme boulderplezier op onze wand voor jong en oud, beginner tot gevorderde.">


    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <script src="https://use.fontawesome.com/3a7851ae28.js"></script>
    <link href="<?= get_bloginfo( 'template_directory' ); ?>/reset.css" rel="stylesheet">
    <link href="https://kenwheeler.github.io/slick/slick/slick.css" rel="stylesheet">
    <link href="https://kenwheeler.github.io/slick/slick/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
	<link href="<?= get_bloginfo( 'template_directory' ); ?>/css/style.css" rel="stylesheet">
	<link href="<?= get_bloginfo( 'template_directory' ); ?>/css/sander.css" rel="stylesheet">
    

	<?php wp_head(); ?>
</head>

<body>
<div class="container">


    <header>
        <div class="head" style="display:none;">
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <nav class="main">
			<?php wp_nav_menu( array(
				'theme_location'  => 'main',
				'container_class' => 'custom-menu-class'
			) ); ?>
        </nav>
    </header>

	<?php echo get_custom_logo() ?>

    <div class="content">
