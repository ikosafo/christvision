<?php include("includes/header.php") ?>

    <!-- Page Title Section Start -->
    <div class="page-title-section section">
        <div class="page-title">
            <div class="container">
                <h1 class="title">Sermons</h1>
            </div>
        </div>
        <div class="page-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="../">Home</a></li>
                    <li class="current">Sermons</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!-- Event Section Start -->
    <div class="section section-padding-bottom">
        <div class="container">

        <div class="row row-cols-lg-2 row-cols-1 max-mb-n30">

        <?php
        $getlink = $mysqli->query("select * from website_youtubelink ORDER BY 
        dateministered DESC, id DESC");
        while ($reslink = $getlink->fetch_assoc()) { ?>

            <div class="col max-mb-30 aos-init aos-animate" data-aos="fade-up">
                <div class="event-list-box">
                    <div class="event-caption">
                        <div class="left-box">
                            <div class="event-location">
                                <i class="far fa-map-marker-alt"></i>
                                 <?php
                                  $id = $reslink['branch'];
                                  $getbranch = $mysqli->query("select * from branch where id='$id'");
                                  $resbranch = $getbranch->fetch_assoc();
                                  echo $resbranch['name'];
                            
                                 ?>
                            </div>
                            <h3 class="title">
                                <?php echo $reslink['title']; ?>
                            </h3>
                        </div>
                        <div class="right-box">
                            <div class="event-date">
                                <?php
                                $dateministered = $reslink['dateministered'];
                                ?>
                                <div class="event-date-year"><?php echo date('Y', strtotime($dateministered)); ?></div>
                                <div class="event-date-day"><?php echo date('d', strtotime($dateministered)); ?></div>
                                <div class="event-date-month"><?php echo date('M', strtotime($dateministered)); ?></div>
                            </div>
                            <div class="event-button">
                                <a class="btn btn-primary btn-hover-secondary btn-xs video-popup" 
                                href="<?php echo $reslink['link'] ?>"> <i class="fas fa-play me-3"></i> 
                                    View Sermon
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php }
        ?>
    </div>

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
