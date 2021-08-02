<?php include("includes/header.php") ?>

    <!-- Page Title Section Start -->
    <div class="page-title-section section">
        <div class="page-title">
            <div class="container">
                <h1 class="title">Events</h1>
            </div>
        </div>
        <div class="page-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="../">Home</a></li>
                    <li class="current">Events</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!-- Event Section Start -->
    <div class="section section-padding-bottom">
        <div class="container">

            <!-- Event Top Bar Start -->
            <div class="row justify-content-between align-items-center max-mb-20">
               <!-- <div class="col-sm-auto col-12 max-mb-10">
                    <p class="result-count">Showing maximum <span>9</span> of many events</p>
                </div>-->
                <div class="col-sm-auto col-12 max-mb-10">
                    <select class="sort-by" id="eventsort">
                        <option selected="selected">Default</option>
                        <option value="Recent">Recent</option>
                        <option value="Upcoming">Upcoming</option>
                        <option value="Ongoing">Ongoing</option>
                    </select>
                </div>
            </div>
            <!-- Event Top Bar End -->

            <!-- Event Wrapper Start -->
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 max-mb-n30" id="eventlist">

                                    <?php $getevents = $mysqli->query("select * from website_events e
                                           JOIN website_image_events i
                                           ON i.imageid = e.eventid ORDER BY e.id DESC");
                                        while ($resevents = $getevents->fetch_assoc()) {
                                            $eventid = $resevents['eventid'];?>

                <!-- Event Start -->
                <div class="col max-mb-30" data-aos="fade-up">
                    <div class="event">
                        <div class="thumbnail">
                            <a href="eventdetails?id=<?php echo lock($eventid) ?>"
                               class="image"><img src="../ms/<?php echo $resevents['image_location'] ?>"
                                                  style="height: 206px;width: 366px"
                                                  alt="Event Image"></a>
                            <div class="event-overlay-background"></div>
                            <div class="event-overlay-content">
                                <a class="btn btn-md btn-light btn-hover-light theme-color"
                                   href="eventdetails?id=<?php echo lock($eventid) ?>">View Details</a>
                            </div>
                        </div>
                        <div class="info">
                            <span class="date">
                                 <?php $date=date_create($resevents['startperiod']);
                                 echo date_format($date,"l F j, Y"); ?>
                            </span>
                            <h3 class="title">
                                <a href="eventdetails?id=<?php echo lock($eventid) ?>"><?php echo $resevents['title'] ?></a></h3>
                            <ul class="event-location">
                                <li><i class="far fa-map-marker-alt"></i><?php echo $resevents['venue']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Event End -->

               <?php } ?>

            </div>
            <!-- Event Wrapper End -->

            <!-- Pagination Start -->
            <!--<div class="row max-mt-50">
                <div class="col">

                    <ul class="pagination center">
                        <li><a href="#" class="prev">PREV</a></li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#" class="next">NEXT</a></li>
                    </ul>

                </div>
            </div>-->
            <!-- Pagination End -->

        </div>
    </div>
    <!-- Event Section End -->


<?php include ("includes/footer.php"); ?>


<script>
    $("#eventsort").change(function(){
        var eventtype = $("#eventsort").val();
        //alert(eventtype);
        $.ajax({
            type: "POST",
            url: "eventlist.php",
            data: {
                eventtype: eventtype
            },
            success: function (text) {
                $('#eventlist').html(text);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status + " " + thrownError);
            }
        });

    })
</script>
