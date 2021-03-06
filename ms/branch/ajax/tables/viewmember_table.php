<?php include('../../../../config.php');
$branch = $_SESSION['branch'];
$pinq = $mysqli->query("SELECT * FROM `member` WHERE branch = '$branch' ORDER BY surname,firstname,othername");

?>

<div class="kt-section">

    <div class="kt-section__content responsive">
        <div class="kt-searchbar">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">
                                <i class="la la-search"></i>
                            </span></div>
                <input type="text" id="data_search" class="form-control"
                       placeholder="Search..." aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="table-responsive">
            <table id="data-table" class="table" style="margin-top: 3% !important;">
                <thead>
                <tr>
                    <th>Member Name</th>
                    <th>Gender</th>
                    <th>Telephone</th>
                    <th>Alt. Telephone</th>
                    <th>Date of Birth</th>
                    <th>Residence</th>
                    <th>Marital Status</th>
                    <th>Occupation</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                <?php
                while ($fetch = $pinq->fetch_assoc()) {
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
                        <td><?php echo $fetch['alttelephone'] ?> </td>
                        <td><?php echo $fetch['birthdate'] ?> </td>
                        <td><?php echo $fetch['residence'] ?> </td>
                        <td><?php echo $fetch['maritalstatus'] ?> </td>
                        <td><?php echo $fetch['occupation'] ?> </td>
                        <td>
                            <span>
                                <div class="dropdown"><a data-toggle="dropdown"
                                                         class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                            class="flaticon-more-1"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__item">
                                                <a class="kt-nav__link view_member"
                                                   member_index="<?php echo $fetch['memberid'] ?>" href="#"> <i
                                                        class="kt-nav__link-icon flaticon2-file"></i>
                                                    <span class="kt-nav__link-text">View</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a class="kt-nav__link edit_member"
                                                   member_index="<?php echo $fetch['memberid'] ?>" href="#"> <i
                                                        class="kt-nav__link-icon flaticon2-edit"></i>
                                                    <span class="kt-nav__link-text">Edit</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a class="kt-nav__link delete_member"
                                                   member_index="<?php echo $fetch['memberid'] ?>" href="#"> <i
                                                        class="kt-nav__link-icon flaticon2-trash"></i> <span
                                                        class="kt-nav__link-text">Delete</span> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </span>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<script>
    oTable =  $("#data-table").DataTable({
        responsive: !0,
        dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
        "bLengthChange": false,"order": [],

    }), $("#export_print").on("click", function (e) {
        e.preventDefault(), t.button(0).trigger()
    }), $("#export_copy").on("click", function (e) {
        e.preventDefault(), t.button(1).trigger()
    }), $("#export_excel").on("click", function (e) {
        e.preventDefault(), t.button(2).trigger()
    }), $("#export_csv").on("click", function (e) {
        e.preventDefault(), t.button(3).trigger()
    }), $("#export_pdf").on("click", function (e) {
        e.preventDefault(), t.button(4).trigger()
    });

    $('#data_search').keyup(function () {
        oTable.search($(this).val()).draw();
    });

    $(document).off('click', '.view_member').on('click', '.view_member', function () {
        var member_index = $(this).attr('member_index');
        //alert(member_index);
        $.ajax({
            type: "POST",
            url: "ajax/forms/viewdetails_member.php",
            data: {
                member_index: member_index
            },
            dataType: "html",
            success: function (text) {
                $('#memberform_div').html(text);
            },
            complete: function () {
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status + " " + thrownError);
            }
        });
    });


    $(document).off('click', '.edit_member').on('click', '.edit_member', function () {
        var member_index = $(this).attr('member_index');
        //alert(member_index)
        $.ajax({
            type: "POST",
            url: "ajax/forms/editform_member.php",
            data: {
                member_index: member_index
            },
            dataType: "html",
            success: function (text) {
                $('#memberform_div').html(text);
            },
            complete: function () {
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status + " " + thrownError);
            }
        });
    });

    $(document).off('click', '.delete_member').on('click', '.delete_member', function () {
        var member_index = $(this).attr('member_index');
        //alert(member_index);

        $.confirm({
            title: 'Delete Member!',
            content: 'Are you sure to continue?',
            buttons: {
                no: {
                    text: 'No',
                    keys: ['enter', 'shift'],
                    backdrop: 'static',
                    keyboard: false,
                    action: function () {
                        $.alert('Data is safe');
                    }
                },
                yes: {
                    text: 'Yes, Delete it!',
                    btnClass: 'btn-blue',
                    action: function () {
                        $.ajax({
                            type: "POST",
                            url: "ajax/queries/delete_member.php",
                            data: {
                                member_index: member_index
                            },
                            dataType: "html",
                            success: function (text) {
                                //alert(text);
                                $.ajax({
                                    url: "ajax/tables/member_table.php",
                                    beforeSend: function () {
                                        KTApp.blockPage({
                                            overlayColor: "#000000",
                                            type: "v2",
                                            state: "success",
                                            message: "Please wait..."
                                        })
                                    },
                                    success: function (text) {
                                        $('#membertable_div').html(text);
                                    },
                                    error: function (xhr, ajaxOptions, thrownError) {
                                        alert(xhr.status + " " + thrownError);
                                    },
                                    complete: function () {
                                        KTApp.unblockPage();
                                    },
                                });
                            },

                            complete: function () {
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(xhr.status + " " + thrownError);
                            }
                        });
                    }
                }
            }
        });
    });

</script>