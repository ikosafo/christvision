<?php include("includes/header.php") ?>

       <!-- Page Title Section Start -->
       <div class="page-title-section section section-padding-top-0">
            <div class="page-breadcrumb position-static">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="current">Weekly Activities</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Title Section End -->

        <!-- Profile Section Start  -->
        <div class="profile-section section section-padding-bottom">
            
        <div class="container">

                 <!-- Section Title Start -->
                 <div class="section-title text-center mb-50 aos-init aos-animate" data-aos="fade-up">
                    <span class="sub-title">Join any of our branches for the following weekly activities</span>
                  
                </div>
                <!-- Section Title End -->

                <div class="row row-cols-lg-2 row-cols-1 align-items-center">
                    
                    <div class="col">
                        <div class="faq-content-area">
                           

                            <div class="mx-accordion max-mb-n30" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="Sunday">
                                        <h5 class="mb-0">
                                            <a href="#" class="acc-btn border-0 collapsed" 
                                            data-bs-toggle="collapse" data-bs-target="#SundayAct" 
                                            aria-expanded="true" aria-controls="SundayAct">
                                                Sunday
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="SundayAct" class="collapse show" aria-labelledby="Sunday" 
                                    data-bs-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td style="width:75%">
                                                        <?php //get activities
                                                        $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Sunday'");
                                                        while ($resprog = $getprog->fetch_assoc()) {
                                                            echo $resprog['program'].'<br/><br>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="width:25%">
                                                        <?php //get time
                                                            $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Sunday'");
                                                            while ($resprog = $getprog->fetch_assoc()) {
                                                                echo $resprog['time'].'<br/><br>';
                                                            }
                                                        ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="Monday">
                                        <h5 class="mb-0">
                                            <a href="#" class="acc-btn border-0 collapsed" 
                                            data-bs-toggle="collapse" data-bs-target="#MondayAct" 
                                            aria-expanded="false" aria-controls="MondayAct">
                                                Monday
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="MondayAct" class="collapse" aria-labelledby="Monday" 
                                    data-bs-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td style="width:75%">
                                                        <?php //get activities
                                                        $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Monday'");
                                                        while ($resprog = $getprog->fetch_assoc()) {
                                                            echo $resprog['program'].'<br/><br>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="width:25%">
                                                        <?php //get time
                                                            $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Monday'");
                                                            while ($resprog = $getprog->fetch_assoc()) {
                                                                echo $resprog['time'].'<br/><br>';
                                                            }
                                                        ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="Tuesday">
                                        <h5 class="mb-0">
                                            <a href="#" class="acc-btn border-0 collapsed" 
                                            data-bs-toggle="collapse" data-bs-target="#TuesdayAct" 
                                            aria-expanded="false" aria-controls="TuesdayAct">
                                                Tuesday
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="TuesdayAct" class="collapse" aria-labelledby="Tuesday" 
                                    data-bs-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td style="width:75%">
                                                        <?php //get activities
                                                        $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Tuesday'");
                                                        while ($resprog = $getprog->fetch_assoc()) {
                                                            echo $resprog['program'].'<br/><br>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="width:25%">
                                                        <?php //get time
                                                            $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Tuesday'");
                                                            while ($resprog = $getprog->fetch_assoc()) {
                                                                echo $resprog['time'].'<br/><br>';
                                                            }
                                                        ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="Wednesday">
                                        <h5 class="mb-0">
                                            <a href="#" class="acc-btn border-0 collapsed" 
                                            data-bs-toggle="collapse" data-bs-target="#WednesdayAct" 
                                            aria-expanded="false" aria-controls="WednesdayAct">
                                                Wednesday
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="WednesdayAct" class="collapse" aria-labelledby="Wednesday" 
                                    data-bs-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td style="width:75%">
                                                        <?php //get activities
                                                        $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Wednesday'");
                                                        while ($resprog = $getprog->fetch_assoc()) {
                                                            echo $resprog['program'].'<br/><br>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="width:25%">
                                                        <?php //get time
                                                            $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Wednesday'");
                                                            while ($resprog = $getprog->fetch_assoc()) {
                                                                echo $resprog['time'].'<br/><br>';
                                                            }
                                                        ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="faq-content-area">
                        

                            <div class="mx-accordion max-mb-n30" id="accordionExample2">
                                <div class="card">
                                    <div class="card-header" id="Thursday">
                                        <h5 class="mb-0">
                                            <a href="#" class="acc-btn border-0 collapsed" 
                                            data-bs-toggle="collapse" data-bs-target="#ThursdayAct" 
                                            aria-expanded="false" aria-controls="ThursdayAct">
                                                Thursday
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="ThursdayAct" class="collapse" aria-labelledby="Thursday" 
                                    data-bs-parent="#accordionExample2" style="">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td style="width:75%">
                                                        <?php //get activities
                                                        $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Thursday'");
                                                        while ($resprog = $getprog->fetch_assoc()) {
                                                            echo $resprog['program'].'<br/><br>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="width:25%">
                                                        <?php //get time
                                                            $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Thursday'");
                                                            while ($resprog = $getprog->fetch_assoc()) {
                                                                echo $resprog['time'].'<br/><br>';
                                                            }
                                                        ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="Friday">
                                        <h5 class="mb-0">
                                            <a href="#" class="acc-btn border-0 collapsed" 
                                            data-bs-toggle="collapse" data-bs-target="#FridayAct" 
                                            aria-expanded="false" aria-controls="FridayAct">
                                                Friday
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="FridayAct" class="collapse" aria-labelledby="Friday" 
                                    data-bs-parent="#accordionExample2" style="">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td style="width:75%">
                                                        <?php //get activities
                                                        $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Friday'");
                                                        while ($resprog = $getprog->fetch_assoc()) {
                                                            echo $resprog['program'].'<br/><br>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="width:25%">
                                                        <?php //get time
                                                            $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Friday'");
                                                            while ($resprog = $getprog->fetch_assoc()) {
                                                                echo $resprog['time'].'<br/><br>';
                                                            }
                                                        ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="Saturday">
                                        <h5 class="mb-0">
                                            <a href="#" class="acc-btn border-0 collapsed" 
                                            data-bs-toggle="collapse" data-bs-target="#SaturdayAct" 
                                            aria-expanded="false" aria-controls="SaturdayAct">
                                                Saturday
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="SaturdayAct" class="collapse" aria-labelledby="Saturday" 
                                    data-bs-parent="#accordionExample2" style="">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td style="width:75%">
                                                        <?php //get activities
                                                        $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Saturday'");
                                                        while ($resprog = $getprog->fetch_assoc()) {
                                                            echo $resprog['program'].'<br/><br>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="width:25%">
                                                        <?php //get time
                                                            $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Saturday'");
                                                            while ($resprog = $getprog->fetch_assoc()) {
                                                                echo $resprog['time'].'<br/><br>';
                                                            }
                                                        ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Profile Section End  -->

        

  <?php include ("includes/footer.php") ?>