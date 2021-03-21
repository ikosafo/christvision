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
                    <h3><i class="fa fa-microphone"></i> Latest Audio</h3>
                </div>
                <div class="col-md-7 col-sm-8 col-xs-12">
                    <audio class="audio-player" src="assets/audio/Precious%20Jesus.mp3" type="audio/mp3" controls></audio>
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

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Latest Sermons -->
                        <div class="listing sermons-listing">
                            <section>

                                <div class="featured-blocks clearfix">
                                    <div class="col-md-4 col-sm-4 featured-block"  style="margin-top: 20px !important;">
                                        <a href="about" class="img-thumbnail">
                                            <img src="assets/img/donateimg.jpg" alt="about" style="height: 200px !important;">
                                            <strong>About CVSI</strong>
                                            <span class="more">Read more</span>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-4 featured-block"  style="margin-top: 20px !important;">
                                        <a href="donate" class="img-thumbnail">
                                            <img src="assets/img/donateimg.jpg" alt="staff" style="height: 200px !important;">
                                            <strong>Donate to Support</strong>
                                            <span class="more">Read more</span>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-4 featured-block"  style="margin-top: 20px !important;">
                                        <a href="pastors" class="img-thumbnail">
                                            <img src="assets/img/pastorsimg.jpg" alt="staff" style="height: 200px !important;">
                                            <strong>Our Pastors</strong>
                                            <span class="more">Read more</span>
                                        </a>
                                    </div>
                                </div>

                            </section>
                        </div>
                    </div>
                </div>
                <div class="margin-20"></div>
                <div class="row">
                    <div class="col-md-8 col-sm-6">
                        <!-- Latest News -->
                        <div class="listing post-listing">
                            <header class="listing-header">
                                <h3>Latest News</h3>
                            </header>
                            <section class="listing-cont">
                                <ul>
                                    <?php $getnews = $mysqli->query("select * from website_image_news i JOIN website_news n ON
                                                                     i.imageid = n.newsid");
                                    while ($resnews = $getnews->fetch_assoc()){ ?>
                                    <li class="item post">
                                        <div class="row">
                                            <div class="col-md-4"> <a href="#" class="media-box">
                                                    <img src="../ms/<?php echo $resnews['image_location'] ?>" alt=""
                                                          class="img-thumbnail"> </a></div>
                                            <div class="col-md-8">
                                                <div class="post-title">
                                                    <?php $newsid = $resnews['newsid']; ?>
                                                    <h2><a href="news?id=<?php echo lock($newsid); ?>"><?php echo $resnews['title'] ?></a></h2>
                                                    <span class="meta-data"><i class="fa fa-calendar"></i> on
                                                     <?php echo date("l, jS F Y",strtotime($resnews['periodupdated'])); ?>
                                                    </span></div>
                                                <p><?php
                                                    $sentences = 2;
                                                    echo implode('. ', array_slice(explode('.', $resnews['description']), 0, $sentences)) . '.';
                                                    ?>
                                                </p>
                                                <p>
                                                    <a href="news?id=<?php echo lock($newsid); ?>" class="btn btn-primary">Read More
                                                        <i class="fa fa-chevron-right"></i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>

                                </ul>
                            </section>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- Latest Sermons -->
                        <div class="listing sermons-listing">
                            <header class="listing-header">
                                <h3>Recent Sermons</h3>
                            </header>
                            <section class="listing-cont">
                                <ul>
                                    <?php $getlink = $mysqli->query("select * from website_youtubelink");
                                    while ($reslink = $getlink->fetch_assoc()){ ?>
                                    <li class="item sermon featured-sermon">
                                        <span class="date"><?php echo date("F j, Y",strtotime($reslink['dateuploaded']))  ?></span>
                                        <h4><a href="#"><?php echo $reslink['title'] ?></a></h4>
                                        <div class="featured-sermon-video">
                                            <div class="fluid-width-video-wrapper" style="padding-top: 60%;">
                                                <?php echo $reslink['link'] ?>
                                            </div>
                                        </div>
                                        <p><?php echo $reslink['description'] ?></p>
                                        <div class="sermon-actions"> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Video"><i class="fa fa-video-camera"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Audio"><i class="fa fa-headphones"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Read online"><i class="fa fa-file-text-o"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF"><i class="fa fa-book"></i></a> </div>
                                    </li>
                                        <?php } ?>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="margin-40"></div>
                <div class="row">
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
                </div>
                <div class="margin-20"></div>

            </div>

        </div>
    </div>

<?php include('includes/footer.php'); ?>