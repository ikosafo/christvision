<?php include("includes/header.php") ?>

<!-- Page Title Section Start -->
<div class="page-title-section section">
    <div class="page-title">
        <div class="container">
            <h1 class="title">Departments</h1>
        </div>
    </div>
    <div class="page-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="../">Home</a></li>
                <li class="current">Departments</li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Title Section End -->

<!-- Contact Us Section Start -->
<div class="section section-padding-bottom">
    <div class="container">


    <div class="my-account-section section section-padding-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="row">
                            <!-- My Account Tab Menu Start -->
                            <div class="col-lg-3 col-12">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#choir" class="active" data-bs-toggle="tab">
                                        Choir
                                    </a>

                                    <a href="#welfare" data-bs-toggle="tab" class="">
                                        Welfare 
                                    </a>

                                    <a href="#prayer" data-bs-toggle="tab" class="">
                                        Prayer
                                    </a>

                                    <a href="#evangelism" data-bs-toggle="tab" class="">
                                        Evangelism
                                    </a>

                                    <a href="#ushering" data-bs-toggle="tab" class="">
                                         Ushering/Protocol
                                    </a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->

                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-12">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade active show" id="lmp" role="tabpanel">
                                        <div class="container">
                                            <div class="row align-items-lg-center">
                                                <div class="col-xl-12 col-md-12">
                                                    <div class="profile-image">
                                                        <?php
                                                        $getmin = $mysqli->query("select * from website_mlmp ORDER BY id DESC LIMIT 1");
                                                        $resmin = $getmin->fetch_assoc();
                                                        $imageid = $resmin['imageid'];
                                                        $getimage = $mysqli->query("select * from `website_image_mlmp` where imageid = '$imageid'");
                                                        $resimage = $getimage->fetch_assoc();
                                                        $theimage = $resimage['image_location'];
                                                        ?>
                                                        <img src="ms/<?php echo $theimage ?>" alt="profile">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-md-12 offset-xl-1">
                                                
                                                    <div class="profile-info">
                                                        
                                                        <?php
                                                            echo $resmin['page_text'];
                                                        ?>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="menministry" role="tabpanel">
                                         <div class="container">
                                            <div class="row align-items-lg-center">
                                                <div class="col-xl-12 col-md-12">
                                                    <div class="profile-image">
                                                        <?php
                                                        $getmin = $mysqli->query("select * from website_mmen ORDER BY id DESC LIMIT 1");
                                                        $resmin = $getmin->fetch_assoc();
                                                        $imageid = $resmin['imageid'];
                                                        $getimage = $mysqli->query("select * from `website_image_mmen` where imageid = '$imageid'");
                                                        $resimage = $getimage->fetch_assoc();
                                                        $theimage = $resimage['image_location'];
                                                        ?>
                                                        <img src="ms/<?php echo $theimage ?>" alt="profile">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-md-12 offset-xl-1">
                                                
                                                    <div class="profile-info">
                                                        
                                                        <?php
                                                            echo $resmin['page_text'];
                                                        ?>
                                                       
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="womenministry" role="tabpanel">
                                         <div class="container">
                                            <div class="row align-items-lg-center">
                                                <div class="col-xl-12 col-md-12">
                                                    <div class="profile-image">
                                                        <?php
                                                        $getmin = $mysqli->query("select * from website_mwomen ORDER BY id DESC LIMIT 1");
                                                        $resmin = $getmin->fetch_assoc();
                                                        $imageid = $resmin['imageid'];
                                                        $getimage = $mysqli->query("select * from `website_image_mwomen` where imageid = '$imageid'");
                                                        $resimage = $getimage->fetch_assoc();
                                                        $theimage = $resimage['image_location'];
                                                        ?>
                                                        <img src="ms/<?php echo $theimage ?>" alt="profile">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-md-12 offset-xl-1">
                                                
                                                    <div class="profile-info">
                                                        
                                                        <?php
                                                            echo $resmin['page_text'];
                                                        ?>
                                                      
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="youthministry" role="tabpanel">
                                         <div class="container">
                                            <div class="row align-items-lg-center">
                                                <div class="col-xl-12 col-md-12">
                                                    <div class="profile-image">
                                                        <?php
                                                        $getmin = $mysqli->query("select * from website_myouth ORDER BY id DESC LIMIT 1");
                                                        $resmin = $getmin->fetch_assoc();
                                                        $imageid = $resmin['imageid'];
                                                        $getimage = $mysqli->query("select * from `website_image_myouth` where imageid = '$imageid'");
                                                        $resimage = $getimage->fetch_assoc();
                                                        $theimage = $resimage['image_location'];
                                                        ?>
                                                        <img src="ms/<?php echo $theimage ?>" alt="profile">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-md-12 offset-xl-1">
                                                
                                                    <div class="profile-info">
                                                        
                                                        <?php
                                                            echo $resmin['page_text'];
                                                        ?>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="childrenministry" role="tabpanel">
                                         <div class="container">
                                            <div class="row align-items-lg-center">
                                                <div class="col-xl-12 col-md-12">
                                                    <div class="profile-image">
                                                        <?php
                                                        $getmin = $mysqli->query("select * from website_mchildren ORDER BY id DESC LIMIT 1");
                                                        $resmin = $getmin->fetch_assoc();
                                                        $imageid = $resmin['imageid'];
                                                        $getimage = $mysqli->query("select * from `website_image_mchildren` where imageid = '$imageid'");
                                                        $resimage = $getimage->fetch_assoc();
                                                        $theimage = $resimage['image_location'];
                                                        ?>
                                                        <img src="ms/<?php echo $theimage ?>" alt="profile">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-md-12 offset-xl-1">
                                                
                                                    <div class="profile-info">
                                                        
                                                        <?php
                                                            echo $resmin['page_text'];
                                                        ?>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <h5 class="profile-contact-title">Contact</h5>
                                        <span class="contact-info-text">
                                            <span class="phone">Phone number: <strong>(+88) - 1990 - 8668</strong> </span>
                                                        <br>
                                            <span class="email">Email: <strong>loiusmacaiah@cvsiworld.net</strong></span>
                                        </span>

                                  
                                </div>
                            </div>
                            <!-- My Account Tab Content End -->
                        </div>

                    </div>

                </div>
            </div>
        </div>
</div>
<!-- Contact Us Section End -->


<?php include ("includes/footer.php"); ?>