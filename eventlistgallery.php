<?php include ("config.php");
$eventname = $_POST['eventname'];
$currentdate = date("Y-m-d H:i:s");

if ($eventname == "All") {

    $getevents = $mysqli->query("select * from website_eventsgallery e
                                           JOIN website_image_eventsgallery i
                                           ON i.imageid = e.eventid
                                            ORDER BY e.id DESC");

}
else  {

    $getevents = $mysqli->query("select * from website_eventsgallery e
                                           JOIN website_image_eventsgallery i
                                           ON i.imageid = e.eventid
                                           where e.title = '$eventname'
                                            ORDER BY e.id DESC");

}


while ($resevents = $getevents->fetch_assoc()) {
$eventid = $resevents['eventid'];?>


<div class="col max-mb-30 aos-init aos-animate" data-aos="fade-up">
                        <div class="blog">
                            <div class="thumbnail">
                                <a href="#" class="image">
                                <img src="../ms/<?php echo $resevents['image_location'] ?>"
                                                  style="height: 206px;width: 366px"
                                                  alt="Event Image"></a>
                            </div>
                            <div class="info">
                                <a href="#" class="category"><?php echo $resevents['title'] ?></a>
                            </div>
                        </div>
                    </div>


<?php } ?>

