<?php include ('../../../../config.php');
$random = rand(1,10000).date("Ymd");
?>

<script>
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>


<form class="" autocomplete="off">

    <div class="kt-portlet__body" id="error_loc">
        <div id="success_loc"></div>

        <div class="form-group row">
            <div class="col-lg-12 col-md-12">
                <label for="category">Category</label>
                <select id="category" style="width: 100%">
                    <option value="">Select</option>
                    <?php $getcat = $mysqli->query("select * from asset_category ORDER BY category_name");
                    while ($rescat = $getcat->fetch_assoc()){?>
                    <option value="<?php echo $rescat['id'] ?>"><?php echo $rescat['category_name'] ?></option>
                    <?php } ?>

                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-lg-12 col-md-12">
                <label for="item_name">Item Name</label>
                <input type="text" class="form-control" id="item_name" autocomplete="on"
                       placeholder="Enter Item Name">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-lg-6 col-md-6">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location"
                       placeholder="Enter Location">
            </div>

            <div class="col-lg-6 col-md-6">
                <label for="number">State/Condition (Excellent)</label>
                <input type="text" class="form-control" id="number"
                       onkeypress="return isNumber(event)"
                       placeholder="Enter Number" value="0">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-lg-6 col-md-6">
                <label for="number">State/Condition (Good)</label>
                <input type="text" class="form-control" id="number"
                       onkeypress="return isNumber(event)"
                       placeholder="Enter Number" value="0">
            </div>

            <div class="col-lg-6 col-md-6">
                <label for="number">State/Condition (Fair)</label>
                <input type="text" class="form-control" id="number"
                       onkeypress="return isNumber(event)"
                       placeholder="Enter Number" value="0">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-lg-6 col-md-6">
                <label for="number">State/Condition (Bad)</label>
                <input type="text" class="form-control" id="number"
                       onkeypress="return isNumber(event)"
                       placeholder="Enter Number" value="0">
            </div>

            <div class="col-lg-6 col-md-6">
                <label for="number">State/Condition (Worse)</label>
                <input type="text" class="form-control" id="number"
                       onkeypress="return isNumber(event)"
                       placeholder="Enter Number" value="0">
            </div>
        </div>

        <div class="kt-portlet__foot">
            <div class="kt-form__actions">
                <button type="button" class="btn btn-primary" id="saveassets">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </div>

</form>
<!--end::Form-->


<script>

    $("#item_state").select2({placeholder:"Select State"});
    $("#category").select2({placeholder:"Select Category"});

    $('#saveassets').click(function () {
        var category_name = $('#category_name').val();
        var category_code = $('#category_code').val();

        var error = '';
        if (category_name == "") {
            error += 'Please enter category name \n';
            $("#category_name").focus();
        }
        if (category_code == "") {
            error += 'Please enter category code \n';
            $("#category_code").focus();
        }


        if (error == "") {
            $.ajax({
                type: "POST",
                url: "ajax/queries/saveform_assets.php",
                beforeSend: function () {
                    KTApp.blockPage({
                        overlayColor: "#000000",
                        type: "v2",
                        state: "success",
                        message: "Please wait..."
                    })
                },
                data: {
                    category_name: category_name,
                    category_code: category_code
                },
                success: function (text) {
                    //alert(text);
                    if (text == 1) {
                        $("#success_loc").notify("Category updated","success");
                        $.ajax({
                            type: "POST",
                            url: "ajax/forms/assets_form.php",
                            beforeSend: function () {
                                KTApp.blockPage({
                                    overlayColor: "#000000",
                                    type: "v2",
                                    state: "success",
                                    message: "Please wait..."
                                })
                            },
                            success: function (text) {
                                $('#assetsform_div').html(text);
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(xhr.status + " " + thrownError);
                            },
                            complete: function () {
                                KTApp.unblockPage();
                            },
                        });
                        $.ajax({
                            type: "POST",
                            url: "ajax/tables/assets_table.php",
                            beforeSend: function () {
                                KTApp.blockPage({
                                    overlayColor: "#000000",
                                    type: "v2",
                                    state: "success",
                                    message: "Please wait..."
                                })
                            },
                            success: function (text) {
                                $('#assetstable_div').html(text);
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
                        $("#error_loc").notify("Category name already exists", {position: "top center"});
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
    });


</script>