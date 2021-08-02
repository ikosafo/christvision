<?php include ("config.php");
$eventtype = $_POST['eventtype'];
$currentdate = date("Y-m-d H:i:s");

if ($eventtype == "Recent") {

    $getevents = $mysqli->query("select * from website_events e
                                           JOIN website_image_events i
                                           ON i.imageid = e.eventid
                                           where e.endperiod < '$currentdate'
                                           ORDER BY e.endperiod DESC");

}
else if ($eventtype == "Upcoming") {

    $getevents = $mysqli->query("select * from website_events e
                                           JOIN website_image_events i
                                           ON i.imageid = e.eventid
                                           where e.startperiod > '$currentdate'
                                            ORDER BY e.id DESC");

}

else if ($eventtype == "Ongoing") {

    $getevents = $mysqli->query("select * from website_events e
                                           JOIN website_image_events i
                                           ON i.imageid = e.eventid
                                           where e.startperiod < '$currentdate'
                                           and e.endperiod > '$currentdate'
                                            ORDER BY e.id DESC");

}
else {
    $getevents = $mysqli->query("select * from website_events e
                                           JOIN website_image_events i
                                           ON i.imageid = e.eventid
                                            ORDER BY e.id DESC");
}


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

