<?php include('includes/header.php');
?>

    <!-- Start Nav Backed Header -->
    <div class="nav-backed-header parallax" style="background-image:url(assets/img/bannerimg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Events</li>
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
                    <h1>Events</h1>
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
                        <!-- Events Listing -->
                        <div class="listing events-listing">
                            <header class="listing-header">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <h3>All events</h3>
                                    </div>
                                    <div class="listing-header-sub col-md-6 col-sm-6">

                                    </div>
                                </div>
                            </header>
                            <section class="listing-cont">
                                <ul>

                                      <?php $getvent = $mysqli->query("select * from website_events e
                                                                       JOIN website_image_events i
                                                                       ON i.imageid = e.eventid ORDER BY e.id DESC LIMIT 7");
                                            while ($resevent = $getvent->fetch_assoc()){
                                                $eventid = $resevent['eventid'];
                                                $startperiod = $resevent['startperiod'];
                                       ?>

                                    <li class="item event-item">
                                        <div class="event-date">
                                            <span class="date">
                                                <?php echo $dayevent = date('d', strtotime($startperiod)); ?>
                                            </span>
                                            <span class="month">
                                                 <?php echo $monthevent = date('M', strtotime($startperiod)); ?>
                                            </span>
                                        </div>
                                        <div class="event-detail">
                                            <h4>
                                                <a href="eventdetails?id=<?php echo lock($eventid) ?>">
                                                    <?php echo $resevent['title'] ?>
                                                </a>
                                            </h4>
                                            <span class="event-dayntime meta-data">
                                                <?php
                                                $date=date_create($resevent['startperiod']);
                                                echo date_format($date,"l");
                                                ?> | <?php
                                                $timestamp = strtotime($resevent['startperiod']);
                                                echo date("h.i A", $timestamp);?>
                                            </span> </div>
                                        <div class="to-event-url">
                                            <div><a href="eventdetails?id=<?php echo lock($eventid) ?>"
                                                    class="btn btn-default btn-sm">Details</a></div>
                                        </div>
                                    </li>
                                            <?php } ?>


                                </ul>
                            </section>
                        </div>
                        <ul class="pager pull-right">
                            <li><a href="#"><i class="fa fa-caret-left"></i> Older</a></li>
                        </ul>
                    </div>
                    <!-- Start Sidebar -->
                    <?php include 'includes/sidebar.php' ?>
                </div>
            </div>
        </div>

        <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
    </div>

<?php include('includes/footer.php'); ?>