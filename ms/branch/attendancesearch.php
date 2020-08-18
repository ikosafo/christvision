<?php require('includes/header.php');

?>

<!-- begin:: Subheader -->
<div class="kt-subheader  kt-grid__item" id="kt_subheader"></div>
<!-- end:: Subheader -->


<!-- begin:: Content -->
<div class="kt-container  kt-grid__item kt-grid__item--fluid">
    <!--Begin::Dashboard 3-->

    <div class="row">
        <div class="col-xl-12">
            <!--begin:: Widgets/Applications/User/Profile3-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__body">
                    <div class="kt-portlet__body">


                        <div class="kt-portlet__head kt-portlet__head--lg mb-4">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Attendance
                                    <small>Search</small>
                                </h3>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-3 kt-margin-b-20-tablet-and-mobile">
                                <div class="kt-form__group kt-form__group--inline">
                                    <div class="kt-form__label">
                                        <label>Select Date From:</label>
                                    </div>
                                    <div class="kt-form__control">
                                        <input type="text" class="form-control" id="datefrom"
                                               placeholder="Select Start Period">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 kt-margin-b-20-tablet-and-mobile">
                                <div class="kt-form__group kt-form__group--inline">
                                    <div class="kt-form__label">
                                        <label>Select Date To:</label>
                                    </div>
                                    <div class="kt-form__control">
                                        <input type="text" class="form-control" id="dateto"
                                               placeholder="Select Start Period">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 kt-margin-b-20-tablet-and-mobile">
                                <div class="kt-form__group kt-form__group--inline">
                                    <div class="kt-form__label">
                                        <label>Status:</label>
                                    </div>
                                    <div class="kt-form__control">
                                        <select class="form-control bootstrap-select" id="attendance_status">
                                            <option value="All">All</option>
                                            <option value="1">Present</option>
                                            <option value="0">Absent</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 kt-margin-b-20-tablet-and-mobile">
                                <div class="kt-form__group kt-form__group--inline">
                                    <div class="kt-form__label">
                                        <label>Search Query:</label>
                                    </div>
                                    <button type="button" id="load_btn" class="btn btn-primary">
                                        Click to load Data
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div id="attendance_table_div"></div>
                            </div>
                        </div>

                        <!--<div class="form-group row">
                            <div class="col-md-12">
                                <div id="approval_div"></div>
                            </div>
                        </div>-->

                    </div>
                </div>
            </div>
            <!--end:: Widgets/Applications/User/Profile3-->
        </div>
    </div>

</div>
<!--End::Dashboard 3-->
<!-- end:: Content -->

<?php require('includes/footer.php') ?>


<script>
    var KTSelect2 = {
        init: function () {
            $('#datefrom').datetimepicker().on('change', function(){
                $('.datetimepicker').hide();
            });

            $('#dateto').datetimepicker().on('change', function(){
                $('.datetimepicker').hide();
            });
        }
    };
    jQuery(document).ready(function () {
        KTSelect2.init()
    });

    $("#load_btn").click(function(){
        var datefrom = $("#datefrom").val();
        var dateto = $("#dateto").val();
        var attendance_status = $("#attendance_status").val();

        var error = '';
        if (datefrom == "") {
            error += 'Please select search start date \n';
            $("#datefrom").focus();
        }
        if (dateto == "") {
            error += 'Please select search end date \n';
            $("#dateto").focus();
        }
        if (attendance_status == "") {
            error += 'Please select attendance status \n';
            $("#attendance_status").focus();
        }
        if (datefrom > dateto) {
            error += 'Please select correct date range \n';
        }
        

        if (error == "") {
            $.ajax({
                type: "POST",
                url: "ajax/queries/attendance_search.php",
                beforeSend: function () {
                    KTApp.blockPage({
                        overlayColor: "#000000",
                        type: "v2",
                        state: "success",
                        message: "Please wait..."
                    })
                },
                data: {
                    datefrom: datefrom,
                    dateto:dateto,
                    attendance_status:attendance_status
                },
                success: function (text) {
                    $('#attendance_table_div').html(text);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + " " + thrownError);
                },
                complete: function () {
                    KTApp.unblockPage();
                },
            });
        }
        else {
            $.notify(error, {position: "top center"});
        }
        return false;
    });


    $("#attendance_status").selectpicker();


    $(document).on('click', '.misapprove_btn', function() {
        var id_index = $(this).attr('i_index');
        var select_year = $("#select_year").val();
        var attendance_status = $("#attendance_status").val();

        $('html, body').animate({
            scrollTop: $("#approval_div").offset().top
        }, 2000);

        $.ajax({
            type: "POST",
            url: "approvalmis_permanent.php",
            data: {
                id_index:id_index,
                select_year:select_year,
                attendance_status:attendance_status
            },
            beforeSend: function () {
                KTApp.blockPage({
                    overlayColor: "#000000",
                    type: "v2",
                    state: "success",
                    message: "Please wait..."
                })
            },
            success: function (text) {
                $('#approval_div').html(text);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status + " " + thrownError);
            },
            complete: function () {
                KTApp.unblockPage();
            },

        });


    });


</script>

