<?php include('includes/header.php');
?>
    <!-- Start Hero Slider -->
    <div class="hero-slider flexslider clearfix" data-autoplay="yes" data-pagination="yes" data-arrows="yes"
         data-style="fade" data-pause="yes">

        <!--Get Slider-->
        <ul class="slides">
            <?php $getslider = $mysqli->query("select * from website_image_slider");
            while ($resslider = $getslider->fetch_assoc()){ ?>
            <li class=" parallax" style="background-image:url('../ms/<?php echo $resslider['image_location'] ?>');"></li>
            <?php } ?>
        </ul>
    </div>
    <!-- End Hero Slider -->
    <!-- Start Notice Bar -->
    <div class="notice-bar latest-sermon">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 hidden-xs">
                    <h3><i class="fa fa-microphone"></i> Latest Sermon</h3>
                </div>
                <div class="col-md-7 col-sm-8 col-xs-12">
                    <audio class="audio-player" src="assets/audio/Miaow-02-Hidden.mp3" type="audio/mp3" controls></audio>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs">
                    <a href="sermons" class="btn btn-block btn-primary">All Sermons</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Notice Bar -->
    <!-- Start Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="listing">
                    <header class="listing-header">
                        <a href="events" class="btn btn-primary pull-right push-btn">All Events</a>
                        <h3>Upcoming Events</h3>
                    </header>
                    <section class="listing-cont">
                        <ul class="event-blocks row">
                            <?php $getvent = $mysqli->query("select * from website_events e JOIN website_image_events i
                                                        ON i.imageid = e.eventid ORDER BY e.id DESC LIMIT 4");
                            while ($resevent = $getvent->fetch_assoc()){
                                $eventid = $resevent['eventid'];
                                ?>

                                <li class="col-md-3 format-standard">
                                    <div class="grid-item-inner">
                                        <a href="eventdetails?id=<?php echo lock($eventid) ?>" class="media-box">
                                            <img src="../ms/<?php echo $resevent['image_location'] ?>"
                                                 style="width: 230px;height: 150px" alt=""></a>

                                        <div class="grid-content">
                                            <?php
                                            $now = date('Y-m-d H:i:s');
                                            $startperiod = $resevent['startperiod'];
                                            $endperiod = $resevent['endperiod'];

                                            if ($endperiod > $now && $startperiod < $now) { ?>
                                                <div class="label label-warning event-cat ml-2"><< Ongoing >></div>
                                            <?php } else if ($endperiod < $now ) { ?>
                                                <div class="label label-danger event-cat ml-2"><< Recent >></div>
                                            <?php } else if ($startperiod > $now ) { ?>
                                                <div class="label label-success event-cat ml-2"><< Incoming >></div>
                                            <?php }
                                            ?>
                                            <hr/>

                                            <h5><a href="eventdetails?id=<?php echo lock($eventid) ?>"><?php echo $resevent['title'] ?></a></h5>
                                            <span class="meta-data"><i class="fa fa-calendar"></i>
                                                <?php
                                                $date=date_create($resevent['startperiod']);
                                                echo date_format($date,"l, F j, Y");
                                                ?>
                                            </span>
                                             <span class="meta-data"><i class="fa fa-map-marker"></i>
                                                 <?php echo $resevent['venue'] ?>
                                            </span>
                                        </div>
                                    </div>
                                </li>

                            <?php }
                            ?>
                        </ul>
                    </section>
                </div>
                <div class="margin-20"></div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <!-- Latest Sermons -->
                        <div class="listing sermons-listing">
                            <header class="listing-header">
                                <h3>Recent Sermons</h3>
                            </header>
                            <section class="listing-cont">
                                <ul>
                                    <li class="item sermon featured-sermon">
                                        <h4><a href="single-sermon.html">Open Doors</a></h4>

                                        <div class="featured-sermon-video">
                                            <iframe width="200" height="150" src="https://www.youtube.com/embed/dWvVX3ZSB-c" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <p>
                                            A seven day Morning and Evening Programme Themed: Open Doors.
                                            The Main Speaker is PROPHET MACAIAH. Come with an expectation.
                                        </p>

                                        <div class="sermon-actions"><a href="#" data-placement="top"
                                                                       data-toggle="tooltip"
                                                                       data-original-title="Video"><i
                                                    class="fa fa-video-camera"></i></a> <a href="#" data-placement="top"
                                                                                           data-toggle="tooltip"
                                                                                           data-original-title="Audio"><i
                                                    class="fa fa-headphones"></i></a> <a href="#" data-placement="top"
                                                                                         data-toggle="tooltip"
                                                                                         data-original-title="Read online"><i
                                                    class="fa fa-file-text-o"></i></a> <a href="#" data-placement="top"
                                                                                          data-toggle="tooltip"
                                                                                          data-original-title="Download PDF"><i
                                                    class="fa fa-book"></i></a></div>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <!-- Latest News -->
                        <div class="listing post-listing">
                            <header class="listing-header">
                                <h3>About</h3>
                            </header>
                            <section class="listing-cont">


                                    <div class="featured-blocks clearfix">
            <div class="col-md-12 col-sm-12 featured-block"  style="margin-top: 20px !important;"> <a href="pastors" class="img-thumbnail">
                    <img src="assets/img/pastorsimg.jpg" alt="staff"> <strong>Our Pastors</strong> <span class="more">read more</span> </a> </div>
            <div class="col-md-12 col-sm-12 featured-block"  style="margin-top: 25px !important;">
            <a href="donate" class="img-thumbnail"> <img src="assets/img/donateimg.jpg" alt="staff">
            <strong>Donate to Support</strong> <span class="more">read more</span> </a> </div>
           </div>

                                </section>

</div>

                    </div>
                    <div class="col-md-4 col-sm-4">
                        <!-- Latest News -->
                        <div class="listing post-listing">
                            <header class="listing-header">
                                <h3>Social Media</h3>
                            </header>
                            <section class="listing-cont">
                            <div class="featured-blocks clearfix"  style="margin-top: 20px !important;">
                                <div class="fb-page"
                                     data-href="https://web.facebook.com/christvisionsanctuaryofficial/?__tn__=kC-R&amp;eid=ARCAribvTxCQJh6jk6-zLbQhveCHlnxK1sEruEU6mc4vS3h_KCWP0d0SOcVsHTKBeybZQMWMaPZDWVmu&amp;hc_ref=ARRc-5K9mX_7GggURdJfgYIyQJb0kVtI4FyZj_TxICoBODnCnOwk4KRF35IH1TZg5tM&amp;__xts__[0]=68.ARB-rQZ6S6IbsJXNU3tyG0RtWSMmY1Ouf6oeJNDxwRvqZxJ3GSQ4TQq_dgXzSrJaEBVC4J3pZmrN5_kVbkr-ppzpFcGZRhlIBIBBzn_ETJJAXpzEshbRFPse7OhFwCr865wK7rTNWGN-3RL7jJpMkSHOAEssNvExUY3AbuvRiwAZQ71c1p6i9Ibtrz0uwmomrwzhvYhXcEE23NFeErj4ALzvcRuaFc6W85qJbRmiZdvIog27y3tPfc4wJTTKN8SaQ_Lv7zfG9TCA9e92r3eB1oM6z13LR1S1dPblB6mpQGHM-Br5PfNEDhYIQxQWkPKIEo_cbOI21D3Y8zOIfVKwkMrZxcMUM6ny"
                                     data-tabs="timeline" data-width="" data-height="214" data-small-header="false"
                                     data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                    <blockquote
                                        cite="https://web.facebook.com/christvisionsanctuaryofficial/?__tn__=kC-R&amp;eid=ARCAribvTxCQJh6jk6-zLbQhveCHlnxK1sEruEU6mc4vS3h_KCWP0d0SOcVsHTKBeybZQMWMaPZDWVmu&amp;hc_ref=ARRc-5K9mX_7GggURdJfgYIyQJb0kVtI4FyZj_TxICoBODnCnOwk4KRF35IH1TZg5tM&amp;__xts__[0]=68.ARB-rQZ6S6IbsJXNU3tyG0RtWSMmY1Ouf6oeJNDxwRvqZxJ3GSQ4TQq_dgXzSrJaEBVC4J3pZmrN5_kVbkr-ppzpFcGZRhlIBIBBzn_ETJJAXpzEshbRFPse7OhFwCr865wK7rTNWGN-3RL7jJpMkSHOAEssNvExUY3AbuvRiwAZQ71c1p6i9Ibtrz0uwmomrwzhvYhXcEE23NFeErj4ALzvcRuaFc6W85qJbRmiZdvIog27y3tPfc4wJTTKN8SaQ_Lv7zfG9TCA9e92r3eB1oM6z13LR1S1dPblB6mpQGHM-Br5PfNEDhYIQxQWkPKIEo_cbOI21D3Y8zOIfVKwkMrZxcMUM6ny"
                                        class="fb-xfbml-parse-ignore"><a
                                            href="https://web.facebook.com/christvisionsanctuaryofficial/?__tn__=kC-R&amp;eid=ARCAribvTxCQJh6jk6-zLbQhveCHlnxK1sEruEU6mc4vS3h_KCWP0d0SOcVsHTKBeybZQMWMaPZDWVmu&amp;hc_ref=ARRc-5K9mX_7GggURdJfgYIyQJb0kVtI4FyZj_TxICoBODnCnOwk4KRF35IH1TZg5tM&amp;__xts__[0]=68.ARB-rQZ6S6IbsJXNU3tyG0RtWSMmY1Ouf6oeJNDxwRvqZxJ3GSQ4TQq_dgXzSrJaEBVC4J3pZmrN5_kVbkr-ppzpFcGZRhlIBIBBzn_ETJJAXpzEshbRFPse7OhFwCr865wK7rTNWGN-3RL7jJpMkSHOAEssNvExUY3AbuvRiwAZQ71c1p6i9Ibtrz0uwmomrwzhvYhXcEE23NFeErj4ALzvcRuaFc6W85qJbRmiZdvIog27y3tPfc4wJTTKN8SaQ_Lv7zfG9TCA9e92r3eB1oM6z13LR1S1dPblB6mpQGHM-Br5PfNEDhYIQxQWkPKIEo_cbOI21D3Y8zOIfVKwkMrZxcMUM6ny">Christ
                                            Vision Sanctuary</a></blockquote>
                                </div>
                                <div style="margin-top: 25px !important;">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/KJ7oyDIkX4w"
                                            frameborder="0" allow="accelerometer; autoplay;
                                        clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>

</div>

                                </section>


                        </div>
                </div>

                </div>
            </div>

        </div>
    </div>

<?php include('includes/footer.php'); ?>