
<!-- Newsletter Section Start -->
<div class="newsletter-section section section-padding position-relative" data-bg-image="assets/img/bg/subscribe-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="newsletter-content light-color">
                    <h2 class="title fz-48">Subscribe</h2>
                    <p>Enter your email address to register to our newsletter subscription <br class="d-none d-md-block">
                        delivered on a quarterly basis! </p>
                    <div class="newsletter-form">
                        <form action="#">
                            <input type="email" placeholder="Your E-mail">
                            <button class="btn btn-primary btn-hover-secondary">Subscribe</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Newsletter Section End -->

<div class="footer-section section">
    <div class="container">

        <!-- Footer Top Widgets Start -->
        <div class="row">

            <!-- Footer Widget Start -->
            <div class="col-xl-3 col-md-3 col-12 max-mb-50">
                <div class="footer-widget">
                    <h4 class="footer-widget-title">Address</h4>
                    <div class="footer-widget-content">
                        <div class="content">
                        <?php
                        //get contact detaisls
                        $getcontact = $mysqli->query("select * from website_contactus LIMIT 1");
                        $rescontact = $getcontact->fetch_assoc(); ?>
                        <p><i class="fa fa-map-marker"></i>  Christ Vision Sanctuary International (Betphillah) <br>
                            <?php echo $rescontact['address'] ?>
                        </p>
                        <p><i class="fa fa-envelope"></i> <?php echo $rescontact['mail'] ?></p>
                        <p><i class="fa fa-phone-alt"></i> <?php echo $rescontact['telephone'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Widget End -->

            <!-- Footer Widget Start -->
            <div class="col-xl-3 col-md-3 col-sm-7 col-12 max-mb-50">
                <div class="footer-widget">
                    <h4 class="footer-widget-title">Explore</h4>
                    <div class="footer-widget-content">
                        <ul class="column-2">
                            <li><a href="branches">Branches</a></li>
                            <li><a href="sermons">Sermons</a></li>
                            <li><a href="eventgallery">Gallery</a></li>
                            <li><a href="aboutus">About us</a></li>
                            <li><a href="contactus">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="footer-social-inline">
                            <a target="_blank" href="<?php echo $ressocial['facebook'] ?>"><i class="fab fa-facebook-square"></i></a>
                            <a target="_blank" href="<?php echo $ressocial['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="<?php echo $ressocial['youtube'] ?>"><i class="fab fa-youtube"></i></a>
                        </div>
                </div>
            </div>
            <!-- Footer Widget End -->

            <!-- Footer Widget Start -->
            <div class="col-xl-6 col-md-6 col-sm-6 col-12 max-mb-50">
                <div class="footer-widget">
                    <div class="fb-page" data-href="https://www.facebook.com/christvisionsanctuaryofficial/"
                         data-tabs="timeline" data-width="600" data-height="250" data-small-header="true"
                         data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/christvisionsanctuaryofficial/"
                                    class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/christvisionsanctuaryofficial/">
                                Christ Vision Sanctuary</a></blockquote></div>
                </div>
            </div>
            <!-- Footer Widget End -->

        </div>
        <!-- Footer Top Widgets End -->

        <!-- Footer Copyright Start -->
        <div class="row max-mt-20">
            <div class="col">
                <p class="copyright">&copy; <?php echo date("Y") ?> CVSI</p>
            </div>
        </div>
        <!-- Footer Copyright End -->

    </div>
</div>

<!-- Scroll Top Start -->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top fal fa-long-arrow-up"></i>
    <i class="arrow-bottom fal fa-long-arrow-up"></i>
</a>
<!-- Scroll Top End -->
</div>

<?php include ("includes/mobile.php") ?>

<!-- JS
============================================ -->

<!-- Vendors JS -->
<!-- <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script> -->

<!-- Plugins JS -->
<!-- <script src="assets/js/plugins/parallax.min.js"></script>
<script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script> -->

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>

<!-- Main Activation JS -->
<script src="assets/js/main.js"></script>


</body>



</html>