<div class="col-md-3 sidebar">
    <div class="widget featured_event_widget">
        <div class="sidebar-widget-title">
            <h3>Featured Event</h3>
        </div>
        <?php $getupc = $mysqli->query("select * from website_events e JOIN website_image_events i
                                        ON i.imageid = e.eventid ORDER BY e.id DESC LIMIT 1");
        $resupc = $getupc->fetch_assoc();
        $now = date('Y-m-d H:i:s');
        $startperiodup = $resupc['startperiod'];
        $endperiodup = $resupc['endperiod'];
        $eventidup = $resupc['eventid'];
        ?>
        <img src="ms/<?php echo $resupc['image_location'] ?>" alt="" class="featured-event-image">
        <div class="featured-event-container">

            <?php if ($endperiodup > $now && $startperiodup < $now) { ?>
            <label class="label label-warning">Oncoming</label>
            <?php } else if ($endperiodup < $now ) { ?>
                <label class="label label-danger">Recent</label>
            <?php } else if ($startperiodup > $now ) { ?>
                <label class="label label-success">Upcoming</label>
            <?php } ?>
             <!-- Replace class label-danger to label-default for passed events -->
            <div class="featured-event-time">
                <span class="date">21</span>
                <span class="month">Aug, 14</span>
            </div>
            <h4 class="featured-event-title"><a href="eventdetails?id=<?php echo lock($eventidup) ?>"><?php echo $resupc['title'] ?></a></h4>
            <p><?php echo $resupc['description']; ?></p>
        </div>
    </div>
    <div class="widget sidebar-widget">
        <div class="sidebar-widget-title">
            <h3>Upcoming Events</h3>
        </div>
        <ul>
            <?php $getvent = $mysqli->query("select * from website_events e JOIN website_image_events i
                                                                                        ON i.imageid = e.eventid ORDER BY e.id DESC
                                                                                        LIMIT 3");
            while ($resevent = $getvent->fetch_assoc()){
                $eventid = $resevent['eventid'];
                $startperiod = $resevent['startperiod'];
                ?>
                <li class="item event-item clearfix">
                    <div class="event-date">
                        <span class="date"><?php echo $dayevent = date('d', strtotime($startperiod)); ?></span>
                        <span class="month"><?php echo $monthevent = date('M', strtotime($startperiod)); ?></span>
                    </div>
                    <div class="event-detail">
                        <h4><a href="eventdetails?id=<?php echo lock($eventid) ?>"><?php echo $resevent['title'] ?></a></h4>
                                                <span class="event-dayntime meta-data">
                                                    <?php $date=date_create($resevent['startperiod']);
                                                    echo date_format($date,"l"); ?> | <?php
                                                    $timestamp = strtotime($resevent['startperiod']);
                                                    echo date("h.i A", $timestamp);?>
                                                </span>
                    </div>
                </li>

            <?php } ?>
        </ul>
    </div>
</div>