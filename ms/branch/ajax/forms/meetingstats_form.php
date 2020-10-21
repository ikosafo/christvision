<?php include ('../../../../config.php');
$branch = $_SESSION['branch'];
//$random = rand(1,10000).date("Ymd");
?>
<!--begin::Form-->

<script>
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31
            && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }
</script>


<form class="" autocomplete="off">

    <div class="kt-portlet__body" id="error_loc">
        <div id="success_loc"></div>

        <div class="form-group row">
            <label class="col-lg-12 col-sm-12">Select Meeting</label>

            <div class=" col-lg-12 col-sm-12">
                <select class="form-control" id="select_service">
                    <option value="">Select Meeting</option>
                    <?php
                    $getservice = $mysqli->query("select * from `meeting_config` where branch = '$branch' ORDER BY title");
                    while ($resservice = $getservice->fetch_assoc()){ ?>
                        <option value="<?php echo $resservice['id'] ?>"><?php echo $resservice['title']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-lg-6 col-md-6">
                <label for="men">Men</label>
                <input type="text" class="form-control" id="men"
                       onkeypress="return isNumber(event)"
                       placeholder="No. of Men"
                    value="0">
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="women">Women</label>
                <input type="text" class="form-control" id="women"
                       onkeypress="return isNumber(event)"
                       placeholder="No. of Women"
                       value="0">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-lg-6 col-md-6">
                <label for="ladies">Ladies</label>
                <input type="text" class="form-control" id="ladies"
                       onkeypress="return isNumber(event)"
                       placeholder="No. of Ladies"
                       value="0">
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="guys">Guys</label>
                <input type="text" class="form-control" id="guys"
                       onkeypress="return isNumber(event)"
                       placeholder="No. of Guys"
                       value="0">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-lg-6 col-md-6">
                <label for="children">Children</label>
                <input type="text" class="form-control" id="children"
                       onkeypress="return isNumber(event)"
                       placeholder="No. of Children"
                       value="0">
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="offering">Offering</label>
                <input type="text" class="form-control" id="offering"
                       onkeypress="return isNumberKey(event)"
                       placeholder="Enter Offering"
                       value="0.00">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-lg-6 col-md-6">
                <label for="datefrom">Period Started</label>
                <input type="text" class="form-control" id="datefrom"
                       placeholder="Select Start Period">
            </div>
            <div class="col-lg-6 col-md-6">
                <label for="dateto">Period Ended</label>
                <input type="text" class="form-control" id="dateto"
                       placeholder="Select Start Period">
            </div>
        </div>

        <div class="kt-portlet__foot">
            <div class="kt-form__actions">
                <button type="button" class="btn btn-primary" id="savemeetingstats">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </div>

</form>
<!--end::Form-->


<script>

    $("#select_service").select2({placeholder:"Select Meeting"});

    $('#datefrom').datetimepicker().on('change', function(){
        $('.datetimepicker').hide();
    });

    $('#dateto').datetimepicker().on('change', function(){
        $('.datetimepicker').hide();
    });

    $("#savemeetingstats").click(function(){
        var serviceid = $("#select_service").val();
        var datefrom = $("#datefrom").val();
        var dateto = $("#dateto").val();
        var description = $("#description").val();
        //alert(serviceid);

        var error = '';
        if (serviceid == "") {
            error += 'Please select service \n';
        }
        if (datefrom == "") {
            error += 'Please select period started \n';
        }
        if (dateto == "") {
            error += 'Please select period ended \n';
        }
        if (datefrom > dateto) {
            error += 'Please select correct date range \n';
        }

        if (error == "") {
            $.ajax({
                type: "POST",
                url: "ajax/queries/saveform_meetingstats.php",
                beforeSend: function () {
                    KTApp.blockPage({
                        overlayColor: "#000000",
                        type: "v2",
                        state: "success",
                        message: "Please wait..."
                    })
                },
                data: {
                    serviceid: serviceid,
                    datefrom: datefrom,
                    dateto: dateto,
                    description: description
                },
                success: function (text) {
                    //alert(text);
                    if (text == 1) {
                        $("#success_loc").notify("Configuration added","success");

                        $.ajax({
                            url: "ajax/forms/meetingstats_form.php",
                            beforeSend: function () {
                                KTApp.blockPage({
                                    overlayColor: "#000000",
                                    type: "v2",
                                    state: "success",
                                    message: "Please wait..."
                                })
                            },
                            success: function (text) {
                                $('#meetingsform_div').html(text);
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(xhr.status + " " + thrownError);
                            },
                            complete: function () {
                                KTApp.unblockPage();
                            },

                        });

                        $.ajax({
                            url: "ajax/tables/meetingstats_table.php",
                            beforeSend: function () {
                                KTApp.blockPage({
                                    overlayColor: "#000000",
                                    type: "v2",
                                    state: "success",
                                    message: "Please wait..."
                                })
                            },
                            success: function (text) {
                                $('#meetingstable_div').html(text);
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
                        $("#error_loc").notify("Date already exists", {position: "top center"});
                    }

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
            $("#error_loc").notify(error, {position: "top center"});
        }
        return false;

    })


</script>