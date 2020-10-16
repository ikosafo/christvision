<?php include('includes/header.php'); ?>
    <!-- Start Hero Slider -->
    <div class="hero-slider flexslider clearfix" data-autoplay="yes" data-pagination="yes" data-arrows="yes"
         data-style="fade" data-pause="yes">
        <ul class="slides">
            <li class=" parallax" style="background-image:url(images/slide1.jpg);"></li>
            <li class=" parallax" style="background-image:url(images/slide2.jpg);"></li>
            <li class="parallax" style="background-image:url(images/gallery-img1.jpg);"></li>
            <li class="parallax" style="background-image:url(images/gallery-img10.jpg);"></li>
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
                    <audio class="audio-player" src="audio/Miaow-02-Hidden.mp3" type="audio/mp3" controls></audio>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs">
                    <a href="sermons.html" class="btn btn-block btn-primary">All Sermons</a>
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
                        <a href="events.html" class="btn btn-primary pull-right push-btn">All Events</a>

                        <h3>Upcoming Events</h3>
                    </header>
                    <section class="listing-cont">
                        <ul class="event-blocks row">
                            <li class="col-md-3 format-standard">
                                <div class="grid-item-inner">
                                    <a href="single-event.html" class="media-box"> <img src="images/gallery-img2.jpg"
                                                                                        alt=""></a>

                                    <div class="grid-content">
                                        <div class="label label-primary event-cat">Prayers</div>
                                        <h5><a href="single-event.html">Evening Prayer</a></h5>
                                        <span class="meta-data"><i class="fa fa-calendar"></i> Friday | 7:00 PM - 8:00 PM</span>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3 format-standard">
                                <div class="grid-item-inner">
                                    <a href="single-event.html" class="media-box"> <img src="images/gallery-img3.jpg"
                                                                                        alt=""></a>

                                    <div class="grid-content">
                                        <div class="label label-primary event-cat">Prayers</div>
                                        <h5><a href="single-event.html">Monday Prayer</a></h5>
                                        <span class="meta-data"><i class="fa fa-calendar"></i> Monday | 7:00 AM - 1:00 PM</span>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3 format-standard">
                                <div class="grid-item-inner">
                                    <a href="single-event.html" class="media-box"> <img src="images/gallery-img4.jpg"
                                                                                        alt=""></a>

                                    <div class="grid-content">
                                        <div class="label label-primary event-cat">Fests</div>
                                        <h5><a href="single-event.html">Children's Fest</a></h5>
                                        <span class="meta-data"><i class="fa fa-calendar"></i> Sunday | 9:00 AM - 1:00 PM</span>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3 format-standard">
                                <div class="grid-item-inner">
                                    <a href="single-event.html" class="media-box"> <img src="images/gallery-img5.jpg"
                                                                                        alt=""></a>

                                    <div class="grid-content">
                                        <div class="label label-primary event-cat">Meets</div>
                                        <h5><a href="single-event.html">Member's meet</a></h5>
                                        <span class="meta-data"><i class="fa fa-calendar"></i> Saturday | 4:00 PM - 7:00 PM</span>
                                    </div>
                                </div>
                            </li>
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
                                        <h4><a href="single-sermon.html">How To Recover The Cutting Edge</a></h4>

                                        <div class="featured-sermon-video">
                                            <iframe width="200" height="150"
                                                    src="https://player.vimeo.com/video/19564018?title=0&amp;byline=0&amp;color=007F7B"></iframe>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis
                                            egestas rhoncus. </p>

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
            <div class="col-md-12 col-sm-12 featured-block"  style="margin-top: 20px !important;"> <a href="our-staff.html" class="img-thumbnail"> <img src="images/staff.jpg" alt="staff"> <strong>Our Pastors</strong> <span class="more">read more</span> </a> </div>
            <div class="col-md-12 col-sm-12 featured-block"  style="margin-top: 25px !important;">
            <a href="about.html" class="img-thumbnail"> <img src="images/newhere.jpg" alt="staff">
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


                            <!--<section class="listing-cont">
                                <ul>
                                    <li class="item post">
                                        <div class="row">
                                            <div class="col-md-4"><a href="#" class="media-box"> <img
                                                        src="images/blog-image3.jpg" alt="" class="img-thumbnail"> </a>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="post-title">
                                                    <h2><a href="blog-post.html">Voluptatum deleniti atque corrupti</a>
                                                    </h2>
                                                    <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                                    convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra
                                                    ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>

                                                <p><a href="#" class="btn btn-primary">Continue reading <i
                                                            class="fa fa-long-arrow-right"></i></a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item post">
                                        <div class="row">
                                            <div class="col-md-4"><a href="blog-post.html" class="media-box"> <img
                                                        src="images/blog-image2.jpg" alt="" class="img-thumbnail"> </a>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="post-title">
                                                    <h2><a href="blog-post.html">Voluptatum deleniti atque corrupti</a>
                                                    </h2>
                                                    <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                                    convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra
                                                    ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>

                                                <p><a href="#" class="btn btn-primary">Continue reading <i
                                                            class="fa fa-long-arrow-right"></i></a></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </section>-->
                        </div>
                </div>

                </div>
            </div>

        </div>
    </div>

<?php include('includes/footer.php'); ?>