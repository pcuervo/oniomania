<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<!-- Font Awesome -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container-fluid">
            <header class="clearfix">
                <div class="menu-desktop clearfix menu-bottom">
                    <nav class="[ center block ] [ clearfix ]">
                        <i class="[ icon-rombo ]"></i>
                        <a class="[ menu ] [ load-acerca ]">Acerca de</a>
                        <a class="[ menu ] [ load-tienda ]">Tienda</a>
                        <a class="[ menu ] [ load-contacto ]">Contacto</a>
                        <i class="[ icon-rombo ]"></i>
                        <h1 class="[ center block ] [ show-home ]">
                            <img src="<?php echo THEMEPATH; ?>images/imagotipo-m.png" alt="" />
                        </h1>
                    </nav>
                </div>
                <div class="[ menu-mobile show-menu-mobile ] [ hidden-sm hidden-md hidden-lg ]">
                    <a class="center block navbar-brand" href="#">
                        <img class="center block"src="<?php echo THEMEPATH; ?>images/imagotipo-m.png" alt="s">
                    </a>
                </div>
            </header>