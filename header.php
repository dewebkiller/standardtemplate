<!DOCTYPE html>
<html>
    <head>
        <title>Standard Html</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Standard Html">
        <meta name="keywords" content="Standard Html">
        <meta name="author" content="dewebkiller">
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/layout.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.default.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/hover.css" rel="stylesheet">
        <link href="css/preloader.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
    </head>
    <body class="<?php basename($_SERVER['PHP_SELF'], '.php') ?>">
        <div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
        <header>
            <section class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="th-content">
                                <i class="fa fa-map-marker"></i> 128 avonmore street
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="th-content">
                                <i class="fa fa-envelope"></i> <a href="mailto:dewebkiller@gmail.com">dewebkiller@gmail.com</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="th-content">
                                <i class="fa fa-phone"></i> 0404 490 301
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="th-content">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="btm-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="logo"><img src="https://www.dewebkiller.com/standardhtmlimages/logo.png" alt="Business Name"></div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                    <a class="navbar-brand" href="#">Navigation</a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="nav navbar-nav">
                                        <?php
                                        $url_pages = $_SERVER['REQUEST_URI'];
                                        $ex_pages = explode("/", $url_pages);
                                        $curr_page = $ex_pages[count($ex_pages) - 1];
                                        ?>
                                        <li <?php
                                        if (($curr_page == 'index.php') || $curr_page == "") {
                                            echo "class='active'";
                                        }
                                        ?>">
                                            <a href="./">Home </a>
                                        </li>
                                        <li <?php
                                        if (($curr_page == 'about.php')) {
                                            echo "class='active'";
                                        }
                                        ?>>
                                            <a href="about.php">About Us </a>
                                            
                                        </li>
                                        <li class="nav-item dropdown <?php
                                        if (($curr_page == 'gallery.php')) {
                                            echo "active";
                                        }
                                        ?> ">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <li><a class="dropdown-item hvr-sweep-to-right" href="#">Action</a></li>
                                                    <li><a class="dropdown-item hvr-sweep-to-right" href="#">Another action</a></li>
                                                    <a class="dropdown-item hvr-sweep-to-right" href="#">Something else here</a>
                                                </ul>
                                            </li>
                                        <li <?php
                                        if (($curr_page == 'gallery.php')) {
                                            echo "class='active'";
                                        }
                                        ?>>
                                            <a href="gallery.php">Gallery </a>
                                        </li>
                                        <li <?php
                                        if (($curr_page == 'contact.php')) {
                                            echo "class='active'";
                                        }
                                        ?>>
                                            <a href="contact.php">Contact Us</a>
                                        </li>

                                    </ul>

                                    </div>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
