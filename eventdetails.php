<?php include ("includes/header.php");

$lid = $_GET['id'];
$eventid = unlock($lid);
$getevent = $mysqli->query("select * from website_events e JOIN website_image_events i
                           ON i.imageid = e.eventid WHERE e.eventid = '$eventid'");
$resevent = $getevent->fetch_assoc();


?>

    <!-- Event Page Banner Start -->
    <div class="event-page-banner section overlay section-padding-top-200 section-padding-bottom-180"
         data-bg-image="../ms/<?php echo $resevent['image_location'] ?>">
        <div class="container">
            <div class="col-12">
                <div class="event-hero-content">
                    <div class="entry-date">
                        <?php $getnextdate = $resevent['startperiod'];
                        $timestampd = strtotime($getnextdate);
                        echo $startdate =  date("l, F j, Y", $timestampd)
                        ?></div>
                    <h1 class="entry-title"><?php echo $resevent['title'] ?></h1>
                    <div class="entry-countdown">
                        <?php
                        $timestamp = strtotime($getnextdate);
                        $new_date_format = date('Y/m/d', $timestamp);
                        ?>
                        <div class="pro-countdown-1" data-countdown="<?php echo $new_date_format ?>"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Page Banner End -->

    <!-- About Event Section Start -->
    <div class="about-event-section section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Start -->
                    <div class="section-title text-center" data-aos="fade-up">
                        <h2 class="title fz-48 heading-color">About The Event</h2>
                        <div class="event-entry-meta">
                            <div class="meta-item">
                                <i class="meta-icon fal fa-map-marker-alt"></i>
                                <span><?php echo $resevent['venue'] ?></span>
                            </div>

                            <div class="meta-item">
                                <i class="meta-icon fal fa-calendar"></i>
                                <span><?php echo $startdate ?></span>
                            </div>

                            <div class="meta-item">
                                <i class="meta-icon fal fa-clock"></i>
                                <span><?php echo $resevent['startperiod'].' to '.$resevent['endperiod'] ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="event-content">
                        <p><?php echo $resevent['description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Event Section End -->

    <!-- Event Comment Section Start -->
    <div class="event-comment-section section section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Start -->
                    <div class="section-title text-center mb-50" data-aos="fade-up">
                        <h2 class="title fz-48 heading-color">Send us a message</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row">
                <div class="offset-lg-2 col-lg-8">
                    <div class="event-form">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 col-12 max-mb-30">
                                    <input type="text" placeholder="Your Name *" name="name">
                                </div>
                                <div class="col-md-6 col-12 max-mb-30">
                                    <input type="email" placeholder="Email *" name="email">
                                </div>
                                <div class="col-12 max-mb-30">
                                    <textarea name="message" placeholder="Your Comment"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary btn-hover-secondary btn-width-180 btn-height-60">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Comment Section End -->


    <?php include ("includes/footer.php") ?>