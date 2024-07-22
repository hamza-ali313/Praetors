<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if (isset($page) && is_string($page)) {
            echo $page;
        } else {
            echo 'Fitness Apparel & Accessories | Revolt Cara';
        } ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content=<?php if (isset($pageTag) && is_string($pageTag)) {
        echo $pageTag;
    } else {
        echo 'desired tag';
    } ?> />
    <meta name="description" content=<?php if (isset($pageDesc) && is_string($pageDesc)) {
        echo $pageDesc;
    } else {
        echo 'desired description';
    } ?> />
    <link rel="shortcut icon" href="media/favicon.png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/aos.css" rel="stylesheet" type="text/css">
    <link href="css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <style>

    </style>
</head>

<body>
    <!-- Navbar Start -->
    <header class="our-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container d-block">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-3 col-sm-12 col-md-12 nav-toggle-sec">
                        <a class="navbar-brand" href="index.php"><img class="img-fluid" src="images/logo.png"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                            <div class="main-header">
                                <ul class="navbar-nav ">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="javascript:;">Services <i class="fa fa-angle-down"
                                                aria-hidden="true"></i></a>
                                        <div class="dropdown-menu MegaMenu">
                                            <div class="MegaMenu_menu">
                                                <div class="row">
                                                    <div class="col-12 col-lg-3">
                                                        <h4>Software
                                                            Services
                                                        </h4>
                                                        <div class="my-4">
                                                            <a href="software-development.php"><i
                                                                    class="fa-brands fa-microsoft"></i>Software
                                                                Developement
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-mobile-screen-button"></i>Mobile
                                                                App
                                                                Development
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-solid fa-globe"></i>Web
                                                                App
                                                                Development
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-cart-shopping"></i>E-Commerce
                                                                Development
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-pen-nib"></i>Web
                                                                Design
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-brands fa-dev"></i>Full
                                                                Stack
                                                                Development
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-chart-line"></i>Dashboard
                                                                Development
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3">
                                                        <h4>Biz Solutions
                                                        </h4>
                                                        <div class="my-4">
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-tachograph-digital"></i>
                                                                Digital
                                                                Transformation
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-brands fa-creative-commons-sampling"></i>
                                                                CRM
                                                                Solution
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-solid fa-database"></i>
                                                                GIS
                                                                Services
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-cart-shopping"></i>
                                                                Ecommerce
                                                                As
                                                                A
                                                                Service
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-brands fa-intercom"></i>
                                                                Application
                                                                Integration
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-layer-group"></i>
                                                                Design
                                                                Thinking
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-brands fa-accessible-icon"></i>IT
                                                                Staff
                                                                Augmentation
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-person-digging"></i>Startup
                                                                Consulting
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3">
                                                        <h4>Cloud IT
                                                        </h4>
                                                        <div class="my-4">
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-users"></i>Managed
                                                                IT
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-brands fa-cloudflare"></i>Cloud
                                                                Consulting
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-gears"></i>DevOps
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-brands fa-aws"></i>AWS
                                                                Managed
                                                                Services
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-cloud-arrow-down"></i>Cloud
                                                                Solutions
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-certificate"></i>SSL
                                                                Certificates
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-cloud-arrow-up"></i>Enterprise
                                                                Cloud
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3">
                                                        <h4>Digital
                                                            Marketing
                                                        </h4>
                                                        <div class="my-4">
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-globe"></i>Internet
                                                                Marketing
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-wand-sparkles"></i>Marketing
                                                                Automation
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-brands fa-searchengin"></i>SEO
                                                                Services
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h4>Get in Out</h4>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="social_menu_header">
                                                            <div class="row">
                                                                <div class="col-12 col-lg-3">
                                                                    <a href="javascript:; ">
                                                                        <span><i class="fa-brands fa-skype"></i></span>
                                                                        <div>
                                                                            <h5>Skype ID</h5>
                                                                            <p>carmatec</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="col-12 col-lg-3">
                                                                    <a href="javascript:; ">
                                                                        <span><i
                                                                                class="fa-solid fa-envelope"></i></span>
                                                                        <div>
                                                                            <h5>Email us </h5>
                                                                            <p>info@thepraetors.com</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="col-12 col-lg-3">
                                                                    <a href="javascript:; ">
                                                                        <span><i
                                                                                class="fa-brands fa-whatsapp"></i></span>
                                                                        <div>
                                                                            <h5>Whatsapp</h5>
                                                                            <p>(855) 772-6090</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="col-12 col-lg-3 sm_follow_main">
                                                                    <a href="javascript:; ">
                                                                        <div class="sm_follow">
                                                                            <h5>Follow Us</h5>
                                                                            <div class="smf_inner">
                                                                                <span class="facebook">
                                                                                    <i
                                                                                        class="fa-brands fa-facebook-f"></i>
                                                                                </span>
                                                                                <span class="linkedin">
                                                                                    <i
                                                                                        class="fa-brands fa-linkedin-in"></i>
                                                                                </span>
                                                                                <span class="twitter">
                                                                                    <i class="fa-brands fa-twitter"></i>
                                                                                </span>
                                                                                <span class="instagram">
                                                                                    <i
                                                                                        class="fa-brands fa-instagram"></i>
                                                                                </span>
                                                                                <span class="youtube">
                                                                                    <i class="fa-brands fa-youtube"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="javascript:;">Technologies <i class="fa fa-angle-down"
                                                aria-hidden="true"></i></a>
                                        <div class="dropdown-menu MegaMenu">
                                            <div class="MegaMenu_menu">
                                                <div class="row">
                                                    <div class="col-12 col-lg-3">
                                                        <h4>Web
                                                        </h4>
                                                        <div class="my-4">
                                                            <a href="javascript:;"><i class="fa-brands fa-php"></i>PHP
                                                                Development
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-brands fa-react"></i>ReactJS
                                                                Development
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-brands fa-golang"></i>Golang Development
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-solid fa-gem"></i>RoR
                                                                Development
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3">
                                                        <h4>Mobile
                                                        </h4>
                                                        <div class="my-4">
                                                            <a href="javascript:;"><i class="fa-brands fa-shopware"></i>
                                                                PWA Development
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-brands fa-react"></i>
                                                                React Native App Development
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-brands fa-android"></i>
                                                                Android App Development
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-brands fa-app-store-ios"></i>
                                                                iOS App Development
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-florin-sign"></i>
                                                                Flutter App Development
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3">
                                                        <h4>
                                                            Trending
                                                        </h4>
                                                        <div class="my-4">
                                                            <a href="javascript:;"><i class="fa-solid fa-robot"></i>AI
                                                                Services
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-brands fa-joomla"></i>ML
                                                                Development
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-vr-cardboard"></i>VR
                                                                Development
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-solid fa-braille"></i>AR
                                                                Development
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-user-ninja"></i>IOT
                                                                Development
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-brands fa-squarespace"></i>Metaverse
                                                                Development
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3">
                                                        <h4>eCommerce
                                                        </h4>
                                                        <div class="my-4">
                                                            <a href="javascript:;"><i
                                                                    class="fa-brands fa-magento"></i>Magento
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-brands fa-shopify"></i>Shopify
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-solid fa-street-view"></i>Spree
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h4>Get in Out</h4>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="social_menu_header">
                                                            <div class="row">
                                                                <div class="col-12 col-lg-3">
                                                                    <a href="javascript:; ">
                                                                        <span><i class="fa-brands fa-skype"></i></span>
                                                                        <div>
                                                                            <h5>Skype ID</h5>
                                                                            <p>carmatec</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="col-12 col-lg-3">
                                                                    <a href="javascript:; ">
                                                                        <span><i
                                                                                class="fa-solid fa-envelope"></i></span>
                                                                        <div>
                                                                            <h5>Email us </h5>
                                                                            <p>info@thepraetors.com</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="col-12 col-lg-3">
                                                                    <a href="javascript:; ">
                                                                        <span><i
                                                                                class="fa-brands fa-whatsapp"></i></span>
                                                                        <div>
                                                                            <h5>Whatsapp</h5>
                                                                            <p>(855) 772-6090</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="col-12 col-lg-3 sm_follow_main">
                                                                    <a href="javascript:; ">
                                                                        <div class="sm_follow">
                                                                            <h5>Follow Us</h5>
                                                                            <div class="smf_inner">
                                                                                <span class="facebook">
                                                                                    <i
                                                                                        class="fa-brands fa-facebook-f"></i>
                                                                                </span>
                                                                                <span class="linkedin">
                                                                                    <i
                                                                                        class="fa-brands fa-linkedin-in"></i>
                                                                                </span>
                                                                                <span class="twitter">
                                                                                    <i class="fa-brands fa-twitter"></i>
                                                                                </span>
                                                                                <span class="instagram">
                                                                                    <i
                                                                                        class="fa-brands fa-instagram"></i>
                                                                                </span>
                                                                                <span class="youtube">
                                                                                    <i class="fa-brands fa-youtube"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="javascript:;">Hire Developer <i
                                                class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <div class="dropdown-menu MegaMenu">
                                            <div class="MegaMenu_menu">
                                                <div class="row">
                                                    <div class="col-12 col-lg-4">
                                                        <h4>Front End
                                                        </h4>
                                                        <div class="my-4">
                                                            <a href="javascript:;"><i
                                                                    class="fa-brands fa-square-js"></i>Javascript
                                                                Developers
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-brands fa-angular"></i>AngularJS
                                                                Developers
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-brands fa-react"></i>ReactJS Developers
                                                            </a>
                                                            <a href="javascript:;"><i
                                                                    class="fa-brands fa-wordpress"></i>Wordpress
                                                                Developers
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-4">
                                                        <h4>
                                                            Back End
                                                        </h4>
                                                        <div class="my-4">
                                                            <a href="javascript:;"><i class="fa-brands fa-php"></i>
                                                                PHP Developers
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-solid fa-braille"></i>
                                                                Ruby on Rails Developers
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-brands fa-python"></i>
                                                                Python Developers
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-brands fa-java"></i>
                                                                Java Developers
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-brands fa-node-js"></i>
                                                                NodeJS Developers
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-solid fa-hand-holding-dollar"></i>
                                                                .NET Developers
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-4">
                                                        <h4>
                                                            Mobile
                                                        </h4>
                                                        <div class="my-4">
                                                            <a href="javascript:;"><i class="fa-brands fa-android"></i>Android Developers
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-brands fa-app-store-ios"></i>IOS Developers
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-brands fa-react"></i>React Native
                                                                Developers
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-solid fa-florin-sign"></i>Flutter Developers
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-solid fa-florin-sign"></i>PWA
                                                                Developers
                                                            </a>
                                                            <a href="javascript:;"><i class="fa-brands fa-golang"></i>Golang
                                                                Developers
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h4>Get in Out</h4>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="social_menu_header">
                                                            <div class="row">
                                                                <div class="col-12 col-lg-3">
                                                                    <a href="javascript:; ">
                                                                        <span><i class="fa-brands fa-skype"></i></span>
                                                                        <div>
                                                                            <h5>Skype ID</h5>
                                                                            <p>carmatec</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="col-12 col-lg-3">
                                                                    <a href="javascript:; ">
                                                                        <span><i
                                                                                class="fa-solid fa-envelope"></i></span>
                                                                        <div>
                                                                            <h5>Email us </h5>
                                                                            <p>info@thepraetors.com</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="col-12 col-lg-3">
                                                                    <a href="javascript:; ">
                                                                        <span><i
                                                                                class="fa-brands fa-whatsapp"></i></span>
                                                                        <div>
                                                                            <h5>Whatsapp</h5>
                                                                            <p>(855) 772-6090</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="col-12 col-lg-3 sm_follow_main">
                                                                    <a href="javascript:; ">
                                                                        <div class="sm_follow">
                                                                            <h5>Follow Us</h5>
                                                                            <div class="smf_inner">
                                                                                <span class="facebook">
                                                                                    <i
                                                                                        class="fa-brands fa-facebook-f"></i>
                                                                                </span>
                                                                                <span class="linkedin">
                                                                                    <i
                                                                                        class="fa-brands fa-linkedin-in"></i>
                                                                                </span>
                                                                                <span class="twitter">
                                                                                    <i class="fa-brands fa-twitter"></i>
                                                                                </span>
                                                                                <span class="instagram">
                                                                                    <i
                                                                                        class="fa-brands fa-instagram"></i>
                                                                                </span>
                                                                                <span class="youtube">
                                                                                    <i class="fa-brands fa-youtube"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:;">Industries</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.php">About</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="left-head">
                                <li class="">
                                    <a href="javascript:;" class='btn2'>(855)
                                        772-6090</a>
                                </li>
                                <li class="">
                                    <a href="javascript:;" class="btn1">Get A
                                        Quote</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar End -->



    <!-- <div class="MegaMenuBox">
                                                <h4>Website Design</h4>
                                                <ol>
                                                    <li><a target="_blank"
                                                            href="javascript:;">website
                                                            design</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Static
                                                            Website Design</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Dynamic
                                                            Website Design</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">CMS
                                                            Website Design</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Responsive
                                                            Web Design</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Theme
                                                            Based Web Design</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Startup
                                                            Website Design</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Custom
                                                            Website Design</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Mobile
                                                            Website Design</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Ecommerce
                                                            Web Design</a></li>
                                                </ol>
                                            </div>
                                            <div class="MegaMenuBox">
                                                <h4>Mobile App Development</h4>
                                                <ol>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Mobile App
                                                            Development Company</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Native
                                                            Mobile App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">React
                                                            Native App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Cross-Platform
                                                            Mobile App</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Hybrid
                                                            App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Ipad
                                                            App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Tablet
                                                            App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Wearable
                                                            App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Hardware
                                                            App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Event
                                                            Mobile App Development</a></li>
                                                </ol>
                                            </div>
        
                                            <div class="MegaMenuBox">
                                                <h4>iOS App Development</h4>
                                                <ol>
                                                    <li><a target="_blank"
                                                            href="javascript:;">iOS App
                                                            Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">iOS
                                                            Chat App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">iOS
                                                            Taxi App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">On
                                                            Demand iOS App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">iOS
                                                            Social App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">iOS
                                                            Ecommerce Application</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">iOS
                                                            Event App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">iOS
                                                            Startup App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">iOS
                                                            Real Estate App</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">iOS
                                                            Education Application</a></li>
                                                </ol>
                                            </div>
        
                                            <div class="MegaMenuBox">
                                                <h4>Skills</h4>
                                                <ol>
                                                    <li><a target="_blank" href="javascript:;">Skills</a>
                                                    </li>
                                                    <li><a target="_blank" href="javascript:;">Hire
                                                            Node.js Developer</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Swift
                                                            Developer</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Java
                                                            Developer</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">React.js
                                                            Developer</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">React
                                                            Native Developer</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Objective
                                                            C Developer</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Photoshop
                                                            Designer</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Angular.js
                                                            Developer</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Hire Html5
                                                            Developer</a></li>
                                                </ol>
                                            </div>
        
                                            <div class="MegaMenuBox">
                                                <h4>Website Development</h4>
                                                <ol>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Website
                                                            Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Real
                                                            Estate Website</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Ecommerce
                                                            Website</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Job
                                                            Portal Website</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">B2B
                                                            Website Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">B2C
                                                            Website Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Hotel
                                                            Website Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Travel
                                                            Website Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Healthcare
                                                            Website</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Startup
                                                            Website Development</a></li>
                                                </ol>
                                            </div>
        
                                            <div class="MegaMenuBox">
                                                <h4>Android App Development</h4>
                                                <ol>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Android App
                                                            Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Android
                                                            Chat App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Android
                                                            Taxi App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">On
                                                            Demand Android App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Android
                                                            Social App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Android
                                                            Ecommerce App</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Android
                                                            Event App Development</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Android
                                                            Startup App</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Android
                                                            Real Estate App</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Android
                                                            Education App</a></li>
                                                </ol>
                                            </div>
        
                                            <div class="MegaMenuBox">
                                                <h4>Hire Developer</h4>
                                                <ol>
                                                    <li><a target="_blank" href="javascript:;">Hire
                                                            Developer</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Hire
                                                            Web Developer</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Hire
                                                            Android Developer</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Hire
                                                            iOS App Developer</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Hire
                                                            Wordpress Developer</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Hire
                                                            UI Designer</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Hire
                                                            Back-end Developer</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">Hire
                                                            Php Developer</a></li>
                                                    <li><a target="_blank"
                                                            href="javascript:;">
                                                            Mobile App Developers </a> </li>
                                                </ol>
                                            </div>
        
                                            <div class="MegaMenuBox">
                                                <h4>Add-On</h4>
                                                <ol>
                                                    <li>
                                                        <a target="_blank"
                                                            href="javascript:;">Logo Design
                                                            Service</a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank"
                                                            href="javascript:;">Pitch
                                                            Deck Creation</a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank"
                                                            href="javascript:;">Cloud
                                                            Hosting</a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank"
                                                            href="javascript:;">Server
                                                            Hosting</a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank"
                                                            href="javascript:;">App
                                                            Store Optimisati
                                                            on</a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank"
                                                            href="javascript:;">Google
                                                            PPC Campaign</a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank" href="javascript:;">SEO
                                                            Services</a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank"
                                                            href="javascript:;">Branding
                                                            Videos</a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank"
                                                            href="javascript:;">Business
                                                            Consulting</a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank"
                                                            href="javascript:;">Amazon Web
                                                            Services</a>
                                                    </li>
                                                </ol>
                                            </div>
         -->