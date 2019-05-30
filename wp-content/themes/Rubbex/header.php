<!DOCTYPE html>
<html lang="lang="<?php bloginfo('language'); ?>">
<head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="dolls,doll">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" rel="shortcut icon" />
    <!-- Favicon 
	<link href="" rel="shortcut icon"/>-->
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/offcanvas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/woocomerce-style.css">
    <!-- <link rel="stylesheet" href="css/cssanimation.css"> -->
    <!-- animation -->
    <?php wp_head(); ?>
</head>
<body>
    <!--Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header -->
    <div class="container">
        <header class="header-sen">
            <nav class="navbar navbar-expand-lg fixed-top ">
                <a href="<?php bloginfo('url'); ?>" id="change" class="site-logo">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/logos/Logo-white.svg" class="logo-w" alt="">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/logos/logo-p.svg" class=" two" alt="">
							</a>
                <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                       
						  <span class="navbar-toggler-icon bx bx-menu-alt-right"></span>
						</button>
                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dolls</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help & Info</a>
                        </li>
                        <li class="nav-item" style="margin-left: 20px;">
                            <a class="nav-link damn-search 
                            " href="#">
                            <form action="">
                                
                           
                            <div id="custom-search">
                                    <input type="text" name="search" class="search-query" placeholder="Search" />
                                    <button type="button">
                                            <i class='bx bx-search-alt'></i>
                                    </button>
                                    <input type="submit" value="Submit" style="display: none;">
                                </div>
                                  </form> 

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php bloginfo('url') ?>/my-account"><i class='bx bx-user'  ></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php bloginfo('url') ?>/cart">	<i class='bx bx-cart' '  ></i></a>
                        </li>
                        <!-- <li class="nav-item dropdown">
							  <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
							  <div class="dropdown-menu" aria-labelledby="dropdown01">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							  </div>
							</li> -->
                    </ul>

                </div>
            </nav>

            <!--	<div class="search-switch">
				<img src="img/search-icon.png" alt="">
			</div>-->
        </header>
    </div>
    <!-- Header -->
