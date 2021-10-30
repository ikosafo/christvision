<?php include("includes/header.php") ?>

       <!-- Page Title Section Start -->
       <div class="page-title-section section section-padding-top-0">
            <div class="page-breadcrumb position-static">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="current">Prayer Request</li>
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
                             $getprayerrequest = $mysqli->query("select * from website_prayerrequest 
                                                                    ORDER BY id DESC LIMIT 1");
                             $resprayerrequest = $getprayerrequest->fetch_assoc();
                             $imageid = $resprayerrequest['imageid'];
                             $getimage = $mysqli->query("select * from `website_image_prayerrequest` 
                                                            where imageid = '$imageid'");
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
                                echo $resprayerrequest['page_text'];
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Profile Section End  -->

        

  <?php include ("includes/footer.php") ?>