<?php include("includes/header.php") ?>

       <!-- Page Title Section Start -->
       <div class="page-title-section section section-padding-top-0">
            <div class="page-breadcrumb position-static">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="current">History</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Title Section End -->

        <!-- Profile Section Start  -->
        <div class="profile-section section section-padding-bottom">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-xl-5 col-md-6">
                        <div class="profile-image">
                            <?php
                             $gethistory = $mysqli->query("select * from website_history ORDER BY id DESC LIMIT 1");
                             $reshistory = $gethistory->fetch_assoc();
                             $imageid = $reshistory['imageid'];
                             $getimage = $mysqli->query("select * from `website_image_history` where imageid = '$imageid'");
                             $resimage = $getimage->fetch_assoc();
                             $theimage = $resimage['image_location'];
                            ?>
                            <img src="ms/<?php echo $theimage ?>" alt="profile">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 offset-xl-1">
                    
                        <div class="profile-info">
                            <h3 class="profile-name">Christ Vision Sanctuary International</h3>
                            <?php
                                echo $reshistory['page_text'];
                            ?>
                            <h5 class="profile-contact-title">Contact</h5>
                            <span class="contact-info-text">
                                <span class="phone">Phone number: <strong>(+88) - 1990 - 8668</strong> </span>
                            <br>
                            <span class="email">Email: <strong>loiusmacaiah@cvsiworld.net</strong></span>
                            </span>
                            <ul class="author-social-networks">
                                <li class="item">
                                    <a href="JavaScript:Void(0);" target="_blank" 
                                    class="social-link"> <i class="fab fa-twitter social-link-icon"></i> </a>
                                </li>
                                <li class="item">
                                    <a href="JavaScript:Void(0);" target="_blank" 
                                    class="social-link"> <i class="fab fa-facebook-f social-link-icon"></i> </a>
                                </li>
                                <li class="item">
                                    <a href="JavaScript:Void(0);" target="_blank" 
                                    class="social-link"> <i class="fab fa-instagram social-link-icon"></i> </a>
                                </li>
                                <li class="item">
                                    <a href="https://linkedin.com/in/prophet-louis-hemman-cobbinah-macaiah-717558110" target="_blank" 
                                    class="social-link"> <i class="fab fa-linkedin social-link-icon"></i> </a>
                                </li>
                                <li class="item">
                                    <a href="JavaScript:Void(0);" target="_blank" 
                                    class="social-link"> <i class="fab fa-youtube social-link-icon"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Profile Section End  -->

        

  <?php include ("includes/footer.php") ?>