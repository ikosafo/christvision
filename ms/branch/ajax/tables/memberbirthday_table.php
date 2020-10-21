<?php include('../../../../config.php');
$branch = $_SESSION['branch'];

$getbdty = $mysqli->query("SELECT * FROM `member` WHERE branch = '$branch'
                           AND MONTH(birthdate) = MONTH(NOW())
                           AND DAY(birthdate) = DAY(NOW())");

$getbdmt = $mysqli->query("SELECT * FROM `member` WHERE branch = '$branch'
                           AND MONTH(birthdate) = MONTH(NOW())");
?>
<style>
    .dataTables_filter {
        display: none;
    }
</style>


<div class="kt-section">

    <div class="kt-section__content responsive">


        <div class="row">
            <!--begin::Portlet-->
            <div class="kt-portlet">

                <div class="kt-portlet__body">
                    <ul class="nav nav-tabs  nav-tabs-line nav-tabs-line-success" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#birthdaymonth" role="tab">
                                For the Month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#birthdaytoday" role="tab">
                                 For Today
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#birthdayweek" role="tab">
                                For the Week
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="birthdaymonth" role="tabpanel">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Member Name</th>
                                    <th>Gender</th>
                                    <th>Telephone</th>
                                    <th>Date of Birth</th>
                                    <th>Age Today</th>
                                    <th>Residence</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                $counter = 1;
                                while ($fetch = $getbdmt->fetch_assoc()) {
                                    $id = $fetch['id'];
                                    ?>
                                    <tr>
                                        <td><?php echo $counter; ?></td>
                                        <td class="kt-datatable__member">
                            <span style="width: 294px;">
                                <div class="kt-user-card-v2">
                                    <div class="kt-user-card-v2__pic">
                                        <?php
                                        $memberid = $fetch['memberid'];
                                        $getimage = $mysqli->query("select * from `member_images` where memberid = '$memberid'");
                                        $resimage = $getimage->fetch_assoc();
                                        $theimage = $resimage['image_location'];
                                        if ($theimage != "") { ?>
                                            <img style="width: 40px;height: 40px"
                                                 src="../<?php echo $theimage ?>">
                                        <?php } else {
                                            echo "";
                                        }
                                        ?>

                                    </div>
                                    <div class="kt-user-card-v2__details">
                                        <a class="kt-user-card-v2__name view_member"
                                           member_index="<?php echo $fetch['memberid'] ?>"
                                           href="#">
                                            <?php echo $fetch['surname'].' '.$fetch['firstname'].' '.$fetch['othername'] ?>
                                        </a>
                                    </div>
                                </div>
                            </span>
                                        </td>
                                        <td><?php echo $fetch['gender'] ?> </td>
                                        <td><?php echo $fetch['telephone'] ?> </td>
                                        <td><?php echo $dob = $fetch['birthdate'] ?> </td>
                                        <td><?php
                                            $getage = $mysqli->query("SELECT TIMESTAMPDIFF (YEAR, birthdate, CURDATE()) AS age FROM `member` where id = '$id'");
                                            $resage = $getage->fetch_assoc();
                                            echo $resage['age'];

                                            ?></td>
                                        <td><?php echo $fetch['residence'] ?> </td>
                                        <td>
                                            <button class="btn btn-sm btn-label-facebook paywelfare_btn"
                                                    i_index='.$memberid.'>
                                                Send Message
                                            </button>
                                        </td>
                                    </tr>
                                    <?php $counter++; } ?>
                                </tbody>

                            </table>
                        </div>
                        <div class="tab-pane" id="birthdaytoday" role="tabpanel">
                            <?php if (mysqli_num_rows($getbdty) == '1') { ?>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Member Name</th>
                                        <th>Gender</th>
                                        <th>Telephone</th>
                                        <th>Date of Birth</th>
                                        <th>Age Today</th>
                                        <th>Residence</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    while ($fetch = $getbdty->fetch_assoc()) {
                                        $id = $fetch['id'];
                                        ?>
                                        <tr>
                                            <td class="kt-datatable__member">
                            <span style="width: 294px;">
                                <div class="kt-user-card-v2">
                                    <div class="kt-user-card-v2__pic">
                                        <?php
                                        $memberid = $fetch['memberid'];
                                        $getimage = $mysqli->query("select * from `member_images` where memberid = '$memberid'");
                                        $resimage = $getimage->fetch_assoc();
                                        $theimage = $resimage['image_location'];
                                        if ($theimage != "") { ?>
                                            <img style="width: 40px;height: 40px"
                                                 src="../<?php echo $theimage ?>">
                                        <?php } else {
                                            echo "";
                                        }
                                        ?>

                                    </div>
                                    <div class="kt-user-card-v2__details">
                                        <a class="kt-user-card-v2__name view_member"
                                           member_index="<?php echo $fetch['memberid'] ?>"
                                           href="#">
                                            <?php echo $fetch['surname'].' '.$fetch['firstname'].' '.$fetch['othername'] ?>
                                        </a>
                                    </div>
                                </div>
                            </span>
                                            </td>
                                            <td><?php echo $fetch['gender'] ?> </td>
                                            <td><?php echo $fetch['telephone'] ?> </td>
                                            <td><?php echo $dob = $fetch['birthdate'] ?> </td>
                                            <td><?php
                                                $getage = $mysqli->query("SELECT TIMESTAMPDIFF (YEAR, birthdate, CURDATE()) AS age FROM `member` where id = '$id'");
                                                $resage = $getage->fetch_assoc();
                                                echo $resage['age'];

                                                ?></td>
                                            <td><?php echo $fetch['residence'] ?> </td>
                                            <td>
                                                <button class="btn btn-sm btn-label-facebook paywelfare_btn"
                                                        i_index='.$memberid.'>
                                                    Send Message
                                                </button>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                    </tbody>

                                </table>
                          <?php  }
                            else {
                                echo '<div style="color: red;font-weight: 500;text-align: center">No birthday today!</div><hr/>';
                            }?>

                        </div>

                        <div class="tab-pane" id="birthdayweek" role="tabpanel">
                            In Progress
                        </div>

                    </div>
                </div>
            </div>
            <!--end::Portlet-->

        </div>


    </div>
</div>


<script>

    /*oTable = $('#mem-table').DataTable({
        stateSave: true,
        "bLengthChange": false,
        dom: "rtiplf",
        "sDom": '<"top"ip>rt<"bottom"fl><"clear">',
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        'ajax': {
            'url': 'ajax/paginations/memberfin.php?branch=<?php echo $branch ?>'
        },
        'columns': [
            {data: 'member'},
            {data: 'residence'},
            {data: 'occupation'},
            {data: 'maritalstatus'},
            {data: 'department'},
            {data: 'action'}
        ]
    });

    $('#member_search').keyup(function () {
        oTable.search($(this).val()).draw();
    });*/

</script>