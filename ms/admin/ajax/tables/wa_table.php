<?php include('../../../../config.php');?>
<style>
    .dataTables_filter {
        display: none;
    }
</style>


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
            <table id="datatable" class="table" style="margin-top: 3% !important;">
                <thead>
                <tr>
                    <th>Day</th>
                    <th>Program</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
              
                    <tr>
                        <td>SUNDAY</td>
                        <td>
                            <?php //get activities
                            $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Sunday'");
                            while ($resprog = $getprog->fetch_assoc()) {
                                echo $resprog['program'].'<br/>';
                            }
                            ?>
                        </td>
                        <td>
                            <?php echo $resprog['time'];?>
                        </td>
                        <td>
                            <button type="button"
                                    data-type="confirm"
                                    class="btn btn-danger delete_link"
                                    i_index="<?php echo $resprog['id']; ?>"
                                    title="Delete">
                                <i class="flaticon2-trash ml-2" style="color:#fff !important;"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>MONDAY</td>
                        <td>
                            <?php //get activities
                            $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Monday'");
                            while ($resprog = $getprog->fetch_assoc()) {
                                echo $resprog['program'].'<br/>';
                            }
                            ?>
                        </td>
                        <td>
                            <?php 
                             while ($resprog = $getprog->fetch_assoc()) {
                                echo $resprog['time'].'<br/>';
                            }
                            ?>
                        </td>
                        <td>
                            <button type="button"
                                    data-type="confirm"
                                    class="btn btn-danger delete_link"
                                    i_index="<?php echo $resprog['id']; ?>"
                                    title="Delete">
                                <i class="flaticon2-trash ml-2" style="color:#fff !important;"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>TUESDAY</td>
                        <td>
                            <?php //get activities
                            $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Tuesday'");
                            while ($resprog = $getprog->fetch_assoc()) {
                                echo $resprog['program'].'<br/>';
                            }
                            ?>
                        </td>
                        <td>
                            <?php echo $resprog['time'];?>
                        </td>
                        <td>
                            <button type="button"
                                    data-type="confirm"
                                    class="btn btn-danger delete_link"
                                    i_index="<?php echo $resprog['id']; ?>"
                                    title="Delete">
                                <i class="flaticon2-trash ml-2" style="color:#fff !important;"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>WEDNESDAY</td>
                        <td>
                            <?php //get activities
                            $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Wednesday'");
                            while ($resprog = $getprog->fetch_assoc()) {
                                echo $resprog['program'].'<br/>';
                            }
                            ?>
                        </td>
                        <td>
                            <?php echo $resprog['time'];?>
                        </td>
                        <td>
                            <button type="button"
                                    data-type="confirm"
                                    class="btn btn-danger delete_link"
                                    i_index="<?php echo $resprog['id']; ?>"
                                    title="Delete">
                                <i class="flaticon2-trash ml-2" style="color:#fff !important;"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>THURSDAY</td>
                        <td>
                            <?php //get activities
                            $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Thursday'");
                            while ($resprog = $getprog->fetch_assoc()) {
                                echo $resprog['program'].'<br/>';
                            }
                            ?>
                        </td>
                        <td>
                            <?php echo $resprog['time'];?>
                        </td>
                        <td>
                            <button type="button"
                                    data-type="confirm"
                                    class="btn btn-danger delete_link"
                                    i_index="<?php echo $resprog['id']; ?>"
                                    title="Delete">
                                <i class="flaticon2-trash ml-2" style="color:#fff !important;"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>FRIDAY</td>
                        <td>
                            <?php //get activities
                            $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Friday'");
                            while ($resprog = $getprog->fetch_assoc()) {
                                echo $resprog['program'].'<br/>';
                            }
                            ?>
                        </td>
                        <td>
                            <?php echo $resprog['time'];?>
                        </td>
                        <td>
                            <button type="button"
                                    data-type="confirm"
                                    class="btn btn-danger delete_link"
                                    i_index="<?php echo $resprog['id']; ?>"
                                    title="Delete">
                                <i class="flaticon2-trash ml-2" style="color:#fff !important;"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>SATURDAY</td>
                        <td>
                            <?php //get activities
                            $getprog = $mysqli->query("select * from website_weeklyactivities where day = 'Saturday'");
                            while ($resprog = $getprog->fetch_assoc()) {
                                echo $resprog['program'].'<br/>';
                            }
                            ?>
                        </td>
                        <td>
                            <?php echo $resprog['time'];?>
                        </td>
                        <td>
                            <button type="button"
                                    data-type="confirm"
                                    class="btn btn-danger delete_link"
                                    i_index="<?php echo $resprog['id']; ?>"
                                    title="Delete">
                                <i class="flaticon2-trash ml-2" style="color:#fff !important;"></i>
                            </button>
                        </td>
                    </tr>
               
               
                </tbody>

            </table>
        </div>
    </div>
</div>

<script>
    oTable = $('#datatable').DataTable({
        "bLengthChange": false,"order": []
    });

    $('#data_search').keyup(function () {
        oTable.search($(this).val()).draw();
    });

    $(document).off('click', '.delete_mmen').on('click', '.delete_mmen', function () {
        var theindex = $(this).attr('i_index');
        //alert(theindex)
        $.confirm({
            title: 'Delete Men Ministry Content!',
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
                            url: "ajax/queries/delete_mmen.php",
                            data: {
                                i_index: theindex
                            },
                            dataType: "html",
                            success: function (text) {
                                $.ajax({
                                    url: "ajax/tables/mmen_table.php",
                                    beforeSend: function () {
                                        KTApp.blockPage({
                                            overlayColor: "#000000",
                                            type: "v2",
                                            state: "success",
                                            message: "Please wait..."
                                        })
                                    },
                                    success: function (text) {
                                        $('#wmmentable_div').html(text);
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