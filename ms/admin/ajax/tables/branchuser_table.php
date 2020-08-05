<?php include('../../../../config.php');
$pinq = $mysqli->query("select * from users_admin ORDER BY `fullname`");
?>
<style>
    .dataTables_filter {
        display: none;
    }
</style>


<div class="kt-section">

    <div class="kt-section__content responsive">
        <div class="kt-searchbar">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                       <i class="la la-search"></i>
                    </span>
                </div>
                <input type="text" id="data_search" class="form-control"
                       placeholder="Search..." aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="table-responsive">
            <table id="data-table" class="table" style="margin-top: 3% !important;">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Branch</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                while ($fetch = $pinq->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $fetch['fullname']; ?></td>
                        <td><?php echo $fetch['username']; ?></td>
                        <td><?php $id = $fetch['branch'];
                            $getbranch = $mysqli->query("select * from branch where id='$id'");
                            $resbranch = $getbranch->fetch_assoc();
                            echo $resbranch['name'];
                            ?></td>
                        <td>
                            <button type="button"
                                    data-type="confirm"
                                    class="btn btn-warning edit_branchuser"
                                    i_index="<?php echo $fetch['id'] ?>"
                                    title="Edit">
                                <i class="flaticon2-edit ml-2" style="color:#fff !important;"></i>
                            </button>
                            <button type="button"
                                    data-type="confirm"
                                    class="btn btn-danger delete_branchuser"
                                    i_index="<?php echo $fetch['id'] ?>"
                                    title="Delete">
                                <i class="flaticon2-trash ml-2" style="color:#fff !important;"></i>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<script>
    oTable = $('#data-table').DataTable({
        "bLengthChange": false,"order": []
    });

    $('#data_search').keyup(function () {
        oTable.search($(this).val()).draw();
    });

    $(document).off('click', '.edit_branchuser').on('click', '.edit_branchuser', function () {
        var theindex = $(this).attr('i_index');
        //alert(theindex)
        $.ajax({
            type: "POST",
            url: "ajax/forms/editform_branchuser.php",
            data: {
                i_index: theindex
            },
            dataType: "html",
            success: function (text) {
                $('#branchform_div').html(text);
            },
            complete: function () {
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status + " " + thrownError);
            }
        });
    });

    $(document).off('click', '.delete_branchuser').on('click', '.delete_branchuser', function () {
        var theindex = $(this).attr('i_index');
        //alert(theindex)
        $.confirm({
            title: 'Delete Branch User!',
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
                            url: "ajax/queries/delete_branchuser.php",
                            data: {
                                i_index: theindex
                            },
                            dataType: "html",
                            success: function (text) {
                                $.ajax({
                                    url: "ajax/tables/branchuser_table.php",
                                    beforeSend: function () {
                                        KTApp.blockPage({
                                            overlayColor: "#000000",
                                            type: "v2",
                                            state: "success",
                                            message: "Please wait..."
                                        })
                                    },
                                    success: function (text) {
                                        $('#branchtable_div').html(text);
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