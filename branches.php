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

        <!-- Courses Wrapper Start -->
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 max-mb-n30">

            <!-- Course Start -->
            <div class="col max-mb-30 aos-init aos-animate" data-aos="fade-up">
                <div class="course">
                    <div class="thumbnail">
                        <a href="branchdetails" class="image">
                            <img src="assets/images/courses/370/course-2.jpg" alt="Branch Image"></a>
                    </div>
                    <div class="info">
                        <h3 class="title"><a href="branchdetails">Branch Name</a></h3>
                        <ul class="meta">
                            <li><i class="far fa-map-marker"></i>Venue</li>
                            <li><i class="far fa-user"></i>Pastor's Name</li>
                            <li><i class="far fa-phone"></i>Pastor's Telephone</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Course End -->


        </div>
        <!-- Courses Wrapper End -->

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
