<?php include("config.php") ?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Christ Vision Sanctuary International | House of Prayer</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Christ Vision Sanctuary International">
    <meta name="keywords" content="christ vision sanctuary international house of prayer army cvsiworld cvsiworld.net" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.png">

    <!-- CSS
	============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome-pro.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-gilroy.css"> -->

    <!-- Plugins CSS (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
    <link rel="stylesheet" href="assets/css/plugins/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/plugins/photoswipe.css">
    <link rel="stylesheet" href="assets/css/plugins/photoswipe-default-skin.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css"> -->

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="ivz77jCm"></script>

<div id="page">
    <!-- Header Top Section Start -->
    <div class="header-top-section section" data-bg-color="#f5f5f5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="header-top-content">
                        <p>CHRIST VISION SANCTUARY INTERNATIONAL | HOUSE OF PRAYER</p>
                        <div class="header-top-countdown">
                            <div class="ht-icon"><i class="far fa-clock"></i></div>
                              <?php $getevent = $mysqli->query("select * from website_events e
                               JOIN website_image_events i
                               ON i.imageid = e.eventid ORDER BY e.id DESC LIMIT 1");
                              $resevent = $getevent->fetch_assoc();
                              $getnextdate = $resevent['startperiod'];

                              $timestamp = strtotime($getnextdate);
                              $new_date_format = date('Y/m/d', $timestamp);
                              ?>
                            <div class="pro-countdown-2 d-flex" data-countdown="<?php echo $new_date_format; ?>"></div>
                            <span> to next event</span>
                        </div>
                        <a class="btn btn-primary btn-hover-secondary btn-xs" href="ms" target="_blank">Admin Portal</a>
                        <a class="btn btn-danger btn-hover-danger btn-xs" href="live" style="margin-left: 2px">Live</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Top Section Start -->

    <!-- Header Section Start -->
    <div class="header-section sticky-header section">
        <div class="header-inner">
            <div class="container position-relative">
                <div class="row justify-content-between align-items-center">

                    <!-- Header Logo Start -->
                    <div class="col-xl-1 col-auto">
                        <div class="header-logo">
                            <a href="/">
                                <img class="dark-logo" src="assets/img/logo/logo.png" alt="Logo" style="width: 80%">
                                <img class="light-logo" src="assets/img/logo/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Main Menu Start -->
                    <div class="col d-none d-xl-block position-static">
                        <nav class="site-main-menu menu-hover-1">
                            <ul>
                                <li class="position-static">
                                    <a href="/"><span class="menu-text">Home</span></a>
                                </li>
                                <li class="has-children">
                                    <a href="#"><span class="menu-text">About</span></a>
                                    <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                    <ul class="sub-menu">
                                        <li><a href="aboutus"><span class="menu-text">About CVSI</span></a></li>
                                        <li><a href="founder"><span class="menu-text">Founder</span></a></li>
                                        <li><a href="history"><span class="menu-text">History</span></a></li>
                                        <li><a href="vision_mission"><span class="menu-text">Vision and Mission</span></a></li>
                                        <li><a href="branches"><span class="menu-text">Branches</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#"><span class="menu-text">Events</span></a>
                                    <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                    <ul class="sub-menu">
                                        <li><a href="events"><span class="menu-text">View Events</span></a></li>
                                        <li><a href="eventgallery"><span class="menu-text">Events Gallery</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#"><span class="menu-text">Media</span></a>
                                    <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                    <ul class="sub-menu">
                                        <li><a href="sermons"><span class="menu-text">Sermons</span></a></li>
                                        <li><a href="testimonies"><span class="menu-text">Testimonies</span></a></li>
                                        <li><a href="eventgallery"><span class="menu-text">Gallery</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#"><span class="menu-text">Join a group</span></a>
                                    <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                    <ul class="sub-menu">
                                        <li><a href="ministries"><span class="menu-text">Ministries</span></a></li>
                                        <li><a href="departments"><span class="menu-text">Departments</span></a></li>
                                        <li><a href="weeklyactivities"><span class="menu-text">A Week at CVSI</span></a></li>
                                    </ul>
                                </li>
                               
                                <li class="has-children">
                                    <a href="#"><span class="menu-text">Departments</span></a>
                                    <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                    <ul class="sub-menu">
                                        <li><a href="choirdept"><span class="menu-text">Choir</span></a></li>
                                        <li><a href="welfaredept"><span class="menu-text">Welfare</span></a></li>
                                        <li><a href="prayerdept"><span class="menu-text">Prayer</span></a></li>
                                        <li><a href="evangelismdept"><span class="menu-text">Evangelism</span></a></li>
                                    </ul>
                                </li>
                                <li class="position-static">
                                    <a href="contactus"><span class="menu-text">Contact Us</span></a>
                                </li>


                            </ul>
                        </nav>
                    </div>
                    <!-- Header Main Menu End -->

                    <!-- Header Right Start -->
                    <div class="col-xl-2 col-auto">
                        <div class="header-right">
                            <div class="inner">

                                <!-- Header Social Start -->
                                <div class="header-social d-none d-sm-flex">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </div>
                                <!-- Header Social End -->

                                <!-- Header Fullscreen Search Start -->
                                <button class="header-fs-search-toggle"><i class="far fa-search"></i></button>
                                <!-- Header Fullscreen Search End -->

                                <!-- Header Mobile Menu Toggle Start -->
                                <div class="header-mobile-menu-toggle d-xl-none ml-sm-2">
                                    <button class="toggle">
                                        <i class="icon-top"></i>
                                        <i class="icon-middle"></i>
                                        <i class="icon-bottom"></i>
                                    </button>
                                </div>
                                <!-- Header Mobile Menu Toggle End -->
                            </div>
                        </div>
                    </div>
                    <!-- Header Right End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Header Section End -->

    <!-- Full Screen Search Start -->
    <div id="fullscreen-search" class="fullscreen-search">
        <div class="fullscreen-search-close">
            <button class="toggle">
                <i class="icon-top"></i>
                <i class="icon-bottom"></i>
            </button>
        </div>
        <div class="fullscreen-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
            </form>
        </div>
    </div>
    <!-- Full Screen Search End -->