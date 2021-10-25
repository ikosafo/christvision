<?php include("includes/header.php") ?>

    <!-- Page Title Section Start -->
    <div class="page-title-section section">
        <div class="page-title">
            <div class="container">
                <h1 class="title">Events Gallery</h1>
            </div>
        </div>
        <div class="page-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="../">Home</a></li>
                    <li class="current">Events Gallery</li>
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
                    <select class="sort-by" id="eventgallerysort">
                        <option selected="selected" value="All">All</option>
                        <?php
                        $getevents = $mysqli->query("select * from website_eventsgallery ORDER BY id DESC");
                        while ($resevents = $getevents->fetch_assoc()) { ?>
                                <option value="<?php echo $resevents['title'] ?>"><?php echo $resevents['title'] ?></option>
                        <?php }
                        ?>
                       
                    </select>
                </div>
            </div>
            <!-- Event Top Bar End -->

            <!-- Event Wrapper Start -->
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 max-mb-n30" id="eventlist">

                                    <?php $getevents = $mysqli->query("select * from website_eventsgallery e
                                           JOIN website_image_eventsgallery i
                                           ON i.imageid = e.eventid ORDER BY e.id DESC");
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
    $("#eventgallerysort").change(function(){
        var eventname = $("#eventgallerysort").val();
        //alert(eventtype);
        $.ajax({
            type: "POST",
            url: "eventlistgallery.php",
            data: {
                eventname: eventname
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
