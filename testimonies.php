<?php include("includes/header.php") ?>

    <!-- Page Title Section Start -->
    <div class="page-title-section section">
        <div class="page-title">
            <div class="container">
                <h1 class="title">Testimonies</h1>
            </div>
        </div>
        <div class="page-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="../">Home</a></li>
                    <li class="current">Testimonies</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!-- Event Section Start -->
    <div class="section section-padding-bottom">
    <div class="container">
                <!-- Section Title Start -->
                <div class="section-title-four text-center aos-init aos-animate" data-aos="fade-up">
                    <span class="sub-title">God is in the miracle business</span>
                    <h2 class="title fz-48">Be blessed by this testimonies </h2>
                </div>
                <!-- Section Title End -->

                <div class="testimonial-slider-three-item swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-autoheight">
                    <div class="swiper-wrapper" style="height: 429px; transform: translate3d(-1580px, 0px, 0px); transition-duration: 0ms;">
                        
                    <?php
                    $gettestimonies = $mysqli->query("select * from website_testimony ORDER BY id DESC");
                    while ($restest = $gettestimonies->fetch_assoc()) { ?>

                        <div class="swiper-slide swiper-slide-visible" style="width: 365px; margin-right: 30px;" data-swiper-slide-index="3">
                            <div class="testimonial-two testimonial-three testimonial-kitchen">
                                <div class="testimonial-quote-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50px" height="40px" viewBox="0 0 50 40">
                                        <path d="M21.8750977,2.18046875 C22.4503906,2.18046875 22.9167969,1.7140625 22.9167969,1.13876953 C22.9167969,0.563476562 22.4503906,0.0970703125 21.8750977,0.0970703125 C9.79960938,0.110839844 0.0138671875,9.89658203 2.76635467e-06,21.9720703 L2.76635467e-06,28.2220703 C-0.01796875,34.56875 5.11230469,39.728418 11.4588867,39.7465793 C17.8055664,39.7645508 22.9652344,34.6342773 22.9833957,28.2876953 C23.0013672,21.9410156 17.8710938,16.7813477 11.5245117,16.7632813 C7.77705078,16.7526367 4.25966797,18.5698242 2.10009766,21.6325195 C2.29296875,10.8446289 11.0853516,2.19580078 21.8750977,2.18046875 Z"></path>
                                        <path d="M38.5416992,16.7638672 C34.8157227,16.7667969 31.3244141,18.5832031 29.1833984,21.6326172 C29.3763672,10.8446289 38.16875,2.19580078 48.9583984,2.18056641 C49.5336914,2.18056641 50.0000977,1.71416016 50.0000977,1.13886719 C50.0000977,0.563574219 49.5336914,0.0971679688 48.9583984,0.0971679688 C36.8829102,0.1109375 27.097168,9.89667969 27.0833984,21.972168 L27.0833984,28.222168 C27.0833984,34.5503906 32.2134766,39.6804687 38.5416992,39.6804687 C44.8699219,39.6804687 50.0000977,34.5503906 50.0000977,28.222168 C50.0000977,21.8939453 44.8700195,16.7638672 38.5416992,16.7638672 Z"></path>
                                    </svg>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        <?php echo $restest['title']; ?>
                                    </h4>
                                    <p>
                                        <?php echo $restest['testimony'] ?>
                                    </p>
                                </div>
                                <div class="author-info">
                                    <div class="image">
                                        <img src="assets/images/testimonial/70/testimonial-4.jpg" alt="">
                                    </div>
                                    <div class="cite">
                                        <h6 class="name"><?php echo $restest['fullname']; ?></h6>
                                        <span class="position"><?php $id = $restest['branch'];
                                                $getbranch = $mysqli->query("select * from branch where id='$id'");
                                                $resbranch = $getbranch->fetch_assoc();
                                                echo $resbranch['name'];
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php }
                    
                    ?>

                        
                    
                    </div>
                    <div class="circle-slider-prev swiper-button-prev ht-swiper-button-nav" tabindex="0" role="button" aria-label="Previous slide"><i class="fal fa-angle-left"></i></div>
                    <div class="circle-slider-next swiper-button-next ht-swiper-button-nav" tabindex="0" role="button" aria-label="Next slide"><i class="fal fa-angle-right"></i></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
    </div>
    <!-- Event Section End -->


<?php include ("includes/footer.php"); ?>
