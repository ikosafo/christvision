<?php include("includes/header.php") ?>

    <!-- Slider/Intro Section Start -->
    <div class="intro4-section section section-fluid">

        <div class="container">
            <div class="row">

                <!-- Intro One Content Start -->
                <div class="col-12" data-aos="fade-up">
                    <div class="intro4-content headline-active text-center">
                        <h1 class="title ah-headline">CVSI is a house of
                                <span class="ah-words-wrapper">
                                    <b class="is-visible">Prayer</b>
                                    <b>Unity</b>
                                    <b>Growth</b>
                                </span>
                        </h1>
                        <p>Join this prayer army and remember everyday is a plus</p>
                        <a href="https://www.youtube.com/watch?v=JHKCofpUosk"
                           class="btn btn-outline-light btn-hover-primary  video-popup" style="font-weight: 300">
                            <i class="fas fa-play me-3"></i>Message from Prophet Macaiah</a>
                    </div>
                </div>
                <!-- Intro One Content End -->

            </div>
        </div>

        <!-- Section Bottom Shape Start -->
        <div class="section-bottom-shape fill-color-gray">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" height="100">
                <path class="elementor-shape-fill" d="M 0 0 L0 100 L100 100 L100 0 Q 50 200 0 0"></path>
            </svg>
        </div>
        <!-- Section Bottom Shape End -->

    </div>
    <!-- Slider/Intro Section End -->

    <!-- About Section Start -->
    <div class="learners-section section bg-pattern" data-bg-image="assets/img/bg/background-pattern-grid-line.png" data-bg-color="#f8f8f8">
        <div class="container mt-minus-125">

            <!-- Feature Wrapper Start -->
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 row-cols-1 max-mb-n30">

                <!-- Feature Start (Icon Box) -->
                <div class="col max-mb-30" data-aos="fade-up">
                    <a href="branches" class="icon-box text-center" data-bg-color="#fff">
                        <div class="content">
                            <h3 class="title fz-20">Visit any of our branches</h3>
                            <div class="desc">
                                <p>Welcome to Christ Vision Sanctuary International. You can freely join
                                   any of the branches across the globe.
                                </p>
                            </div>
                            <span class="link">View Branches <i class="far fa-long-arrow-right"></i></span>
                        </div>
                    </a>
                </div>
                <!-- Feature Start (Icon Box) -->

                <!-- Feature Start (Icon Box) -->
                <div class="col max-mb-30" data-aos="fade-up">
                    <a href="donate" class="icon-box text-center" data-bg-color="#fff">
                        <div class="content">
                            <h3 class="title fz-20">Donate</h3>
                            <div class="desc">
                                <p>Give and partner to support the ministry. Pay your tithes, offerings and contributions
                                online. God bless you for your donation
                                </p>
                            </div>
                            <span class="link">Click to Donate <i class="far fa-long-arrow-right"></i></span>
                        </div>
                    </a>
                </div>
                <!-- Feature Start (Icon Box) -->

                <!-- Feature Start (Icon Box) -->
                <div class="col max-mb-30" data-aos="fade-up">
                    <a href="prayerrequest" class="icon-box text-center" data-bg-color="#fff">
                        <div class="content">
                            <h3 class="title fz-20">Prayer Request</h3>
                            <div class="desc">
                                <p>Send in your prayer request and we are ready to stand with you. Contact us
                                 and the prayer army will be pleased to answer you. </p>
                            </div>
                            <span class="link">Start here <i class="far fa-long-arrow-right"></i></span>
                        </div>
                    </a>
                </div>
                <!-- Feature Start (Icon Box) -->

            </div>
            <!-- Feature Wrapper End -->

            <div class="row max-mt-40 max-mb-40">
                <div class="text-center col-lg-7 mx-auto">
                    <a class="link link-lg" href="aboutus">
                        Christ Vision Sanctuary International is a vibrant Spirit filled Church waiting to 
                        share fellowship with you. The Word of God is preached powerfully with warmth and 
                        affection.
                        <mark>Learn More <i class="far fa-long-arrow-right"></i></mark>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Event Section Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up">
                <span class="sub-title">Join our thrilling events</span>
                <h2 class="title fz-48">Upcoming <span>Events</span></h2>
            </div>
            <!-- Section Title End -->

            <!-- Event Wrapper Start -->
            <div class="event-slider swiper-container" data-aos="fade-up">

                <div class="swiper-wrapper">

                    <!-- Get events from dv -->
                    <?php $getevents = $mysqli->query("select * from website_events e
                                                                       JOIN website_image_events i
                                                                       ON i.imageid = e.eventid ORDER BY e.id DESC");
                    while ($resevents = $getevents->fetch_assoc()) { $eventid = $resevents['eventid'];?>

                        <!-- Event Start -->
                        <div class="swiper-slide">
                            <div class="event max-mb-30">
                                <div class="thumbnail">
                                    <a href="eventdetails?id=<?php echo lock($eventid) ?>" class="image">
                                        <img src="../ms/<?php echo $resevents['image_location'] ?>"
                                             style="width: 391px;height: 181px"
                                             alt="Event Image">
                                    </a>
                                    <div class="event-overlay-background"></div>
                                    <div class="event-overlay-content">
                                        <a class="btn btn-md btn-light btn-hover-light theme-color"
                                           href="eventdetails?id=<?php echo lock($eventid) ?>">View Details</a>
                                    </div>
                                </div>
                                <div class="info">
                                    <span class="date">
                                        <?php $date=date_create($resevents['startperiod']);
                                        echo date_format($date,"l F j, Y"); ?></span>
                                    <h3 class="title">
                                        <a href="eventdetails?id=<?php echo lock($eventid) ?>">
                                            <?php echo $resevents['title'] ?>
                                        </a>
                                    </h3>
                                    <ul class="event-location">
                                        <li><i class="far fa-map-marker-alt"></i><?php echo $resevents['venue']; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Event End -->


                    <?php  }
                    ?>

                </div>

                <div class="swiper-pagination"></div>

            </div>
            <!-- Event Wrapper End -->

            <div class="row max-mt-40">
                <div class="text-center col-lg-7 mx-auto">
                    <a class="link link-lg" href="events">
                        <mark>Check out all events <i class="far fa-long-arrow-right"></i></mark></a>
                </div>
            </div>

        </div>
    </div>
    <!-- Event Section End -->


   <?php include ("includes/footer.php"); ?>