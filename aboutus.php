<?php include("includes/header.php") ?>

        <!-- Page Banner Section Start -->
        <div class="page-banner-section section section-padding-200" 
        data-bg-image="assets/img/about2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-banner-title">
                            <h1 class="title">
                            We are a Holy Spirit-filled, Christ-centered Charismatic and Prophetic Ministry
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->


    <!-- About Section Start -->
    <div class="about-section section section-padding-top-190 section-padding-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 order-lg-1 order-2">
                    <div class="about-content mt-sm-50 mt-xs-50">
                        <span class="sub-title">Get to know about <strong>CVSI</strong></span>
                        <?php
                             $getabout = $mysqli->query("select * from website_about ORDER BY id DESC LIMIT 1");
                             $resabout = $getabout->fetch_assoc();
                             $imageid = $resabout['imageid'];
                             $getimage = $mysqli->query("select * from `website_image_about` where imageid = '$imageid'");
                             $resimage = $getimage->fetch_assoc();
                             $theimage = $resimage['image_location'];
                             echo $resabout['page_text'];
                            ?>
                        <a class="link link-lg" href="contactus">  <mark>Contact Us Today <i class="far fa-long-arrow-right"></i></mark></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 order-lg-1 order-1">
                    <div class="about-image">
                        <div class="about-image-one">
                            <img src="ms/<?php echo $theimage ?>" alt="about01">
                        </div>
                      
                        <!-- Animation Shape Start -->
                        
                        <div class="shape shape-2 scene">
                            <span data-depth="4"><img src="assets/img/shape-animation/about-shape-1.png" alt=""></span>
                        </div>
                        <div class="shape shape-4 scene">
                            <span data-depth="4"><img src="assets/img/shape-animation/shape-1.png" alt=""></span>
                        </div>
                        <!-- Animation Shape End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->


    <!-- CTA Section Start -->
    <div class="cta-section section section-padding-bottom" data-bg-color="#f5f5f5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center mt-5">
                        <span class="sub-title">Join Us Today by
                            <span>Visiting any of our branches</span>
                        </span>
                        <h2 class="title">You will be blessed by this prayer army</h2>
                        <a href="branches" class="btn btn-primary btn-hover-secondary btn-width-300"> 
                            Join a branch 
                        </a>

                        <!-- Animation Shape Start -->
                        <div class="shape shape-1 scene">
                            <span data-depth="4">shape 1</span>
                        </div>
                        <div class="shape shape-2 scene">
                            <span data-depth="4"><img src="assets/img/shape-animation/cta-shape-01.png" alt=""></span>
                        </div>
                        <div class="shape shape-3 scene">
                            <span data-depth="4"><img src="assets/img/shape-animation/nwesletter-shape-2.png" alt=""></span>
                        </div>
                        <!-- Animation Shape End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->


  <?php include ("includes/footer.php") ?>