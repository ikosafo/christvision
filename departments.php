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
                                    <div class="tab-pane fade active show" id="choir" role="tabpanel">
                                        <div class="container">
                                            <div class="row align-items-lg-center">
                                                <div class="col-xl-12 col-md-12">
                                                    <div class="profile-image">
                                                        <?php
                                                        $getdept = $mysqli->query("select * from website_dchoir ORDER BY id DESC LIMIT 1");
                                                        $resdept = $getdept->fetch_assoc();
                                                        $imageid = $resdept['imageid'];
                                                        $getimage = $mysqli->query("select * from `website_image_dchoir` where imageid = '$imageid'");
                                                        $resimage = $getimage->fetch_assoc();
                                                        $theimage = $resimage['image_location'];
                                                        ?>
                                                        <img src="ms/<?php echo $theimage ?>" alt="profile">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-md-12 offset-xl-1">
                                                
                                                    <div class="profile-info">
                                                        
                                                        <?php
                                                            echo $resdept['page_text'];
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
                                                        $getdept = $mysqli->query("select * from website_mmen ORDER BY id DESC LIMIT 1");
                                                        $resdept = $getdept->fetch_assoc();
                                                        $imageid = $resdept['imageid'];
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
                                                            echo $resdept['page_text'];
                                                        ?>
                                                       
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="welfare" role="tabpanel">
                                         <div class="container">
                                            <div class="row align-items-lg-center">
                                                <div class="col-xl-12 col-md-12">
                                                    <div class="profile-image">
                                                        <?php
                                                        $getdept = $mysqli->query("select * from website_dwelfare ORDER BY id DESC LIMIT 1");
                                                        $resdept = $getdept->fetch_assoc();
                                                        $imageid = $resdept['imageid'];
                                                        $getimage = $mysqli->query("select * from `website_image_dwelfare` where imageid = '$imageid'");
                                                        $resimage = $getimage->fetch_assoc();
                                                        $theimage = $resimage['image_location'];
                                                        ?>
                                                        <img src="ms/<?php echo $theimage ?>" alt="profile">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-md-12 offset-xl-1">
                                                
                                                    <div class="profile-info">
                                                        
                                                        <?php
                                                            echo $resdept['page_text'];
                                                        ?>
                                                      
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="prayer" role="tabpanel">
                                         <div class="container">
                                            <div class="row align-items-lg-center">
                                                <div class="col-xl-12 col-md-12">
                                                    <div class="profile-image">
                                                        <?php
                                                        $getdept = $mysqli->query("select * from website_dprayer ORDER BY id DESC LIMIT 1");
                                                        $resdept = $getdept->fetch_assoc();
                                                        $imageid = $resdept['imageid'];
                                                        $getimage = $mysqli->query("select * from `website_image_dprayer` where imageid = '$imageid'");
                                                        $resimage = $getimage->fetch_assoc();
                                                        $theimage = $resimage['image_location'];
                                                        ?>
                                                        <img src="ms/<?php echo $theimage ?>" alt="profile">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-md-12 offset-xl-1">
                                                
                                                    <div class="profile-info">
                                                        
                                                        <?php
                                                            echo $resdept['page_text'];
                                                        ?>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="evangelism" role="tabpanel">
                                         <div class="container">
                                            <div class="row align-items-lg-center">
                                                <div class="col-xl-12 col-md-12">
                                                    <div class="profile-image">
                                                        <?php
                                                        $getdept = $mysqli->query("select * from website_devangelism ORDER BY id DESC LIMIT 1");
                                                        $resdept = $getdept->fetch_assoc();
                                                        $imageid = $resdept['imageid'];
                                                        $getimage = $mysqli->query("select * from `website_image_devangelism` where imageid = '$imageid'");
                                                        $resimage = $getimage->fetch_assoc();
                                                        $theimage = $resimage['image_location'];
                                                        ?>
                                                        <img src="ms/<?php echo $theimage ?>" alt="profile">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-md-12 offset-xl-1">
                                                
                                                    <div class="profile-info">
                                                        
                                                        <?php
                                                            echo $resdept['page_text'];
                                                        ?>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                     <!-- Single Tab Content Start -->
                                     <div class="tab-pane fade" id="ushering" role="tabpanel">
                                         <div class="container">
                                            <div class="row align-items-lg-center">
                                                <div class="col-xl-12 col-md-12">
                                                    <div class="profile-image">
                                                        <?php
                                                        $getdept = $mysqli->query("select * from website_dprotocol ORDER BY id DESC LIMIT 1");
                                                        $resdept = $getdept->fetch_assoc();
                                                        $imageid = $resdept['imageid'];
                                                        $getimage = $mysqli->query("select * from `website_image_dprotocol` where imageid = '$imageid'");
                                                        $resimage = $getimage->fetch_assoc();
                                                        $theimage = $resimage['image_location'];
                                                        ?>
                                                        <img src="ms/<?php echo $theimage ?>" alt="profile">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-md-12 offset-xl-1">
                                                
                                                    <div class="profile-info">
                                                        
                                                        <?php
                                                            echo $resdept['page_text'];
                                                        ?>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                  
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