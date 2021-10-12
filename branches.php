<?php include("includes/header.php") ?>

<!-- Page Title Section Start -->
<div class="page-title-section section">
    <div class="page-title">
        <div class="container">
            <h1 class="title">Branches</h1>
        </div>
    </div>
    <div class="page-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="../">Home</a></li>
                <li class="current">Branches</li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Title Section End -->

<!-- Branch Section Start -->
<div class="section section-padding-bottom">
    <div class="container">

        <!-- Branches Wrapper Start -->
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 max-mb-n30">

        <?php
        //get branches
        $getbranches = $mysqli->query("select * from website_branches w JOIN branch b ON w.branchid = b.id");
        while ($resbranches = $getbranches->fetch_assoc()) { ?>

        <!-- Branch Start -->
        <div class="col max-mb-30 aos-init aos-animate" data-aos="fade-up">
                <div class="course">
                    <div class="thumbnail">
                        <a href="branchdetails" class="image">
                            <?php
                            $imageid = $resbranches['imageid'];
                            $getimage = $mysqli->query("select * from `website_image_branches` where imageid = '$imageid'");
                            $resimage = $getimage->fetch_assoc();
                            $theimage = $resimage['image_location'];
                            ?>
                            <img src="ms/<?php echo $theimage ?>" alt="Branch Image"></a>
                    </div>
                    <div class="info">
                        <h3 class="title">
                            <a href="branchdetails">
                                <?php 
                                echo $resbranches['name']; ?>
                            </a>
                        </h3>
                        <ul class="meta">
                            <li><i class="far fa-map-marker"></i><?php echo $resbranches['location']; ?></li>
                            <li><i class="far fa-user"></i><?php echo $resbranches['pastor']; ?></li>
                            <li><i class="far fa-phone"></i><?php echo $resbranches['telephone']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Branch End -->

        <?php } ?>

            

        </div>
        <!-- Branches Wrapper End -->

        

        <div class="row max-mt-50">
            <div class="col text-center">
                <a href="JavaScript:Void(0);" class="btn btn-outline-primary load-more-btn">Load More <i class="fal fa-redo ms-3"></i></a>
            </div>
        </div>

    </div>
</div>
<!-- Branch Section End -->


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
