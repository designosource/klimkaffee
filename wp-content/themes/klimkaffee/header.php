<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <script src="https://use.fontawesome.com/3a7851ae28.js"></script>
    <link href="<?= get_bloginfo( 'template_directory' ); ?>/reset.css" rel="stylesheet">
    <link href="<?= get_bloginfo( 'template_directory' ); ?>/css/style.css" rel="stylesheet">
    <link href="https://kenwheeler.github.io/slick/slick/slick.css" rel="stylesheet">
    <link href="https://kenwheeler.github.io/slick/slick/slick-theme.css" rel="stylesheet">
    <link href="<?= get_bloginfo( 'template_directory' ); ?>/sander.css" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body>
<div class="container">


    <header>
		<?= wp_is_mobile() ? "<div class=\"head\">
        <div class=\"hamburger\">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>" : "" ?>
        <nav class="main <?= wp_is_mobile() ? "mobile" : "" ?>">
			<?php wp_nav_menu( array(
				'theme_location'  => 'main',
				'container_class' => 'custom-menu-class'
			) ); ?>
        </nav>
    </header>

    <?= wp_is_mobile() ? get_custom_logo() : "" ?>

    <div class="content">
