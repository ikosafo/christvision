<?php include('includes/header.php');
?>

    <!-- Start Nav Backed Header -->
    <div class="nav-backed-header parallax" style="background-image:url(assets/img/bannerimg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Pastors</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- End Nav Backed Header -->
    <!-- Start Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Pastors</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Start Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">

                    <?php $getpastors = $mysqli->query("select * from website_pastors p JOIN website_image_pastors i
                                                     ON i.imageid = p.imageid ORDER BY p.id DESC");
                    while ($respastors = $getpastors->fetch_assoc()){
                        ?>

                    <div class="col-md-4 col-sm-4">
                        <div class="grid-item-inner">
                            <a href="../ms/<?php echo $respastors['image_location'] ?>"
                               data-rel="prettyPhoto" class="media-box">
                                <img src="../ms/<?php echo $respastors['image_location'] ?>" alt="">
                                <span class="zoom"
                                      style="width: 400px; height: 300px; line-height: 300px;">
                                    <i class="fa fa-search"></i></span>
                            </a>
                        </div>
                        <div class="grid-item staff-item">
                            <div class="grid-item-inner">
                                <div class="grid-content">
                                    <h3><?php echo $respastors['pastor_name'] ?></h3>
                                    <p><i class="fa fa-building-o"></i> <?php echo $respastors['pastor_branch'] ?> </p>
                                    <p><i class="fa fa-phone"></i> <?php echo $respastors['pastor_telephone'] ?> </p>
                                    <p><i class="fa fa-envelope"></i> <?php echo $respastors['pastor_email'] ?> </p>
                                    <p><?php echo $respastors['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                        <?php } ?>

                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php'); ?>