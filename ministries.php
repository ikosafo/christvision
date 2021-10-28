<?php include("includes/header.php") ?>

<!-- Page Title Section Start -->
<div class="page-title-section section">
    <div class="page-title">
        <div class="container">
            <h1 class="title">Ministries</h1>
        </div>
    </div>
    <div class="page-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="../">Home</a></li>
                <li class="current">Ministries</li>
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
                                    <a href="#lmp" class="active" data-bs-toggle="tab">
                                        Louis Macaiah Partners
                                    </a>

                                    <a href="#menministry" data-bs-toggle="tab" class="">
                                        Men 
                                    </a>

                                    <a href="#womenministry" data-bs-toggle="tab" class="">
                                        Women
                                    </a>

                                    <a href="#payment-method" data-bs-toggle="tab" class="">
                                        Youth
                                    </a>

                                    <a href="#address-edit" data-bs-toggle="tab" class="">
                                         Children
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
                                                    $getmlmp = $mysqli->query("select * from website_mlmp ORDER BY id DESC LIMIT 1");
                                                    $resmlmp = $getmlmp->fetch_assoc();
                                                    $imageid = $resmlmp['imageid'];
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
                                echo $resmlmp['page_text'];
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
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="menministry" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Orders</h3>

                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Mostarizing Oil</td>
                                                            <td>Aug 22, 2018</td>
                                                            <td>Pending</td>
                                                            <td>$45</td>
                                                            <td><a href="shopping-cart.html" class="ht-btn black-btn">View</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Katopeno Altuni</td>
                                                            <td>July 22, 2018</td>
                                                            <td>Approved</td>
                                                            <td>$100</td>
                                                            <td><a href="shopping-cart.html" class="ht-btn black-btn">View</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Murikhete Paris</td>
                                                            <td>June 12, 2017</td>
                                                            <td>On Hold</td>
                                                            <td>$99</td>
                                                            <td><a href="shopping-cart.html" class="ht-btn black-btn">View</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="download" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Downloads</h3>

                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Date</th>
                                                            <th>Expire</th>
                                                            <th>Download</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>Mostarizing Oil</td>
                                                            <td>Aug 22, 2018</td>
                                                            <td>Yes</td>
                                                            <td><a href="#" class="ht-btn black-btn">Download File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Katopeno Altuni</td>
                                                            <td>Sep 12, 2018</td>
                                                            <td>Never</td>
                                                            <td><a href="#" class="ht-btn black-btn">Download File</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Payment Method</h3>

                                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Billing Address</h3>

                                            <address>
                                                <p><strong>Alex Tuntuni</strong></p>
                                                <p>1355 Market St, Suite 900 <br>
                                                San Francisco, CA 94103</p>
                                                <p>Mobile: (123) 456-7890</p>
                                            </address>

                                            <a href="#" class="ht-btn black-btn d-inline-block edit-address-btn"><i class="fa fa-edit"></i>Edit Address</a>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Account Details</h3>

                                            <div class="account-details-form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="first-name" placeholder="First Name" type="text">
                                                        </div>

                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="last-name" placeholder="Last Name" type="text">
                                                        </div>

                                                        <div class="col-12 mb-30">
                                                            <input id="display-name" placeholder="Display Name" type="text">
                                                        </div>

                                                        <div class="col-12 mb-30">
                                                            <input id="email" placeholder="Email Address" type="email">
                                                        </div>

                                                        <div class="col-12 mb-30">
                                                            <h4>Password change</h4>
                                                        </div>

                                                        <div class="col-12 mb-30">
                                                            <input id="current-pwd" placeholder="Current Password" type="password">
                                                        </div>

                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="new-pwd" placeholder="New Password" type="password">
                                                        </div>

                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="confirm-pwd" placeholder="Confirm Password" type="password">
                                                        </div>

                                                        <div class="col-12">
                                                            <button class="btn btn-primary btn-hover-secondary">Save Changes</button>
                                                        </div>

                                                    </div>
                                                </form>
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