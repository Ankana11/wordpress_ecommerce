<!DOCTYPE html>
<html lang="en">


<!-- molla/index-4.html  22 Nov 2019 09:53:08 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Woo Commerce</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri()?>/assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri()?>/assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri()?>/assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri()?>/assets/images/icons/site.html">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri()?>/assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="<?php echo get_template_directory_uri()?>/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/skins/skin-demo-4.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/demos/demo-4.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/custome-style.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-intro-clearance header-4">
        
            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        
                        <a href="index.html" class="logo">
                        <?php
						if ( function_exists( 'the_custom_logo' ) ) {
							the_custom_logo();
						}
					?>
                    

                    </div><!-- End .header-left -->
					<nav class="main-nav">
						<?php wp_nav_menu(array('theme_location' => 'Primary'));?>
                           
							<!-- End .menu -->
                        </nav><!-- End .main-nav -->
                 

                  
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

        </header><!-- End .header -->


 <!-- <ul class="menu sf-arrows">
                         <li class="megamenu-container active">
                                    <a href="index.html" class="">Home</a>
                                </li>
                                <li>
                                    <a href="category.html" class="">Shop</a>

                                </li>
                                <li>
                                    <a href="product.html" class="">Product</a>

                                 
                                </li>
                                <li>
                                    <a href="#" class="">Pages</a>

                                 
                                </li>
                           
                            </ul> -->
		