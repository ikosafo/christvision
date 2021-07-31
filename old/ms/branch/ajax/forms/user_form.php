<?php include ('../../../../config.php');
//$random = rand(1,10000).date("Ymd");
?>
<!--begin::Form-->


<form class="" autocomplete="off">

    <div class="kt-portlet__body" id="error_loc">
        <div id="success_loc"></div>

        <div class="form-group row">
            <div class="col-lg-12 col-md-12">
                <label for="full_name">Full Name</label>
                <input type="text" class="form-control" id="full_name"
                       placeholder="Enter Full Name">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-lg-12 col-md-12">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username"
                       placeholder="Enter Username">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-lg-12 col-md-12">
                <label for="user_type">Select User Type</label>
                <select id="user_type" style="width: 100%">
                    <option value="">Select User Type</option>
                        <option value="Admin">Admin</option>
                        <option value="Normal">Normal</option>
                </select>
            </div>
        </div>

        <div class="kt-portlet__foot">
            <div class="kt-form__actions">
                <button type="button" class="btn btn-primary" id="saveuser">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </div>

</form>
<!--end::Form-->


<script>

    $("#user_type").select2({placeholder:'Select User Type'});

    $('#saveuser').click(function () {
        var full_name = $('#full_name').val();
        var username = $('#username').val();
        var user_type = $('#user_type').val();

        var error = '';
        if (full_name == "") {
            error += 'Please enter full name \n';
            $("#full_name").focus();
        }
        if (username == "") {
            error += 'Please enter username \n';
            $("#username").focus();
        }
        if (user_type == "") {
            error += 'Please select user type \n';
            $("#user_type").focus();
        }

        if (error == "") {
            $.ajax({
                type: "POST",
                url: "ajax/queries/saveform_user.php",
                beforeSend: function () {
                    KTApp.blockPage({
                        overlayColor: "#000000",
                        type: "v2",
                        state: "success",
                        message: "Please wait..."
                    })
                },
                data: {
                    full_name: full_name,
                    username: username,
                    user_type: user_type
                },
                success: function (text) {
                    //alert(text);
                    if (text == 1) {
                        $("#success_loc").notify("User added","success");
                        $.ajax({
                            type: "POST",
                            url: "ajax/forms/user_form.php",
                            beforeSend: function () {
                                KTApp.blockPage({
                                    overlayColor: "#000000",
                                    type: "v2",
                                    state: "success",
                                    message: "Please wait..."
                                })
                            },
                            success: function (text) {
                                $('#userform_div').html(text);
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
                            url: "ajax/tables/user_table.php",
                            beforeSend: function () {
                                KTApp.blockPage({
                                    overlayColor: "#000000",
                                    type: "v2",
                                    state: "success",
                                    message: "Please wait..."
                                })
                            },
                            success: function (text) {
                                $('#usertable_div').html(text);
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
                        $("#error_loc").notify("Username already exists", {position: "top center"});
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