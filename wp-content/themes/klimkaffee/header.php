<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <link href="<?php echo get_bloginfo( 'template_directory' ); ?>/reset.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo( 'template_directory' ); ?>/css/style.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body>
<header>
    <div class="head"></div>
    <nav class="main">
		<?php wp_nav_menu( array(
			'theme_location' => 'main',
			'container_class' => 'custom-menu-class' ) );  ?>
    </nav>
</header>

<div class="container">
