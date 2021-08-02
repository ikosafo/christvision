<?php include('includes/header.php');
$lid = $_GET['id'];
$eventid = unlock($lid);
$getevent = $mysqli->query("select * from website_events e JOIN website_image_events i
                           ON i.imageid = e.eventid WHERE e.eventid = '$eventid'");
$resevent = $getevent->fetch_assoc();

?>

    <!-- Start Nav Backed Header -->
    <div class="nav-backed-header parallax" style="background-image:url(assets/img/bannerimg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Event Details</li>
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
                    <h1>Event Details</h1>
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
                    <div class="col-md-9">
                        <header class="single-post-header clearfix">
                            <nav class="btn-toolbar pull-right"> <a href="#" class="btn btn-default"
                                                                    data-placement="bottom" data-toggle="tooltip"
                                                                    data-original-title="Print" >
                                    <i class="fa fa-print"></i></a> <a href="#" class="btn btn-default"
                                                                       data-placement="bottom" data-toggle="tooltip"
                                                                       data-original-title="Contact us" ><i class="fa fa-envelope"></i></a>
                                <a href="#" class="btn btn-default" data-placement="bottom" data-toggle="tooltip"
                                   data-original-title="Share event" ><i class="fa fa-location-arrow"></i></a>
                            </nav>
                            <h2 class="post-title"><?php echo $resevent['title'] ?></h2>
                        </header>
                        <article class="post-content">
                            <div class="event-description">
                                <img src="../ms/<?php echo $resevent['image_location'] ?>"
                                     style="width: 100%;height: auto;box-shadow: 0px 0px 40px 20px rgba(0, 0, 0, 0.05);" alt="" class="img-responsive">
                                <div class="spacer-20"></div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Event details</h3>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="info-table">
                                                    <li><i class="fa fa-calendar"></i> <strong>
                                                            <?php echo date('l', strtotime($resevent['startperiod'])); ?>
                                                        </strong> | <?php echo date('jS F, Y', strtotime($resevent['startperiod'])); ?>
                                                    </li>
                                                    <li><i class="fa fa-clock-o"></i>
                                                        <?php echo date('h:i A', strtotime($resevent['startperiod'])); ?>
                                                    </li>
                                                    <li><i class="fa fa-map-marker"></i>
                                                        <?php echo $resevent['venue']; ?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <?php echo $resevent['description']; ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                </div>
                        </article>
                    </div>
                    <!-- Start Sidebar -->

                    <?php include 'includes/sidebar.php' ?>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php'); ?>