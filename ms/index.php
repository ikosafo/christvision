<!DOCTYPE html>

<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>

    <title>Admin | <?php echo $churcht ?></title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Page Vendors Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/pages/login/login-5.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/jquery-confirm/css/jquery-confirm.css" rel="stylesheet" type="text/css"/>
    <link href="assets/uploadify/uploadifive.css" rel="stylesheet" type="text/css"/>

    <!--end::Global Theme Styles -->

    <link rel="shortcut icon" href="assets/img/logo.png"/>
    <script src="assets/js/jquery.min.js"></script>

    <script type="text/javascript">
        $(window).load(function () {
            $(".loader").fadeOut("slow");
        });

        function printContent(el) {
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
            location.reload();
        }
    </script>

</head>


<!-- end::Head -->

<!-- begin::Body -->
<body style="background-image: url('assets/img/header3.jpg'); background-position: center center;
background-size: 100% 100%"
      class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right
      kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled
      kt-subheader--transparent kt-page--loading">

<!-- begin::Page loader -->
<div class="loader"></div>
<!-- end::Page Loader -->
<!-- begin:: Page -->
<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="/">
            <img alt="Logo" src="assets/img/logo.png" style="width: 30%"/>
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                class="flaticon-more-1"></i></button>
    </div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <!-- begin:: Header -->

            <!-- end:: Header -->
            <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
                <div class="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"
                     id="kt_content">

                </div>
            </div>

            <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                <div class="row">
                    <div class="col-lg-6">
                            <div class="kt-portlet kt-iconbox">
                                <div class="kt-portlet__body">
                                    <div class="kt-iconbox__body">
                                        <div class="kt-iconbox__icon">
                                            <i class="flaticon flaticon-users" style="font-size: 50px"></i>
                                        </div>
                                        <div class="kt-iconbox__desc">
                                            <h3 class="kt-iconbox__title">
                                                <a class="kt-link" href="branch/login">BRANCH ADMINISTRATOR</a>
                                            </h3>
                                            <div class="kt-iconbox__content">
                                                <a href="branch/login">Click here to Log in to Branch Admin Portal</a>
                                                <br/><small>
                                                    CHRIST VISION SANCTUARY INTERNATIONAL ADMINISTRATORS ONLY
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="kt-portlet kt-iconbox">
                            <div class="kt-portlet__body">
                                <div class="kt-iconbox__body">
                                    <div class="kt-iconbox__icon">
                                        <i class="flaticon flaticon-users" style="font-size: 50px"></i>
                                    </div>
                                    <div class="kt-iconbox__desc">
                                        <h3 class="kt-iconbox__title">
                                            <a class="kt-link" href="admin/login">MAIN ADMINISTRATOR</a>
                                        </h3>
                                        <div class="kt-iconbox__content">
                                            <a href="admin/login">Click here to Log in to Main Admin Portal</a>
                                            <br/><small>
                                                CHRIST VISION SANCTUARY INTERNATIONAL ADMINISTRATORS ONLY
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>



        </div>
    </div>
</div>

<!-- end:: Page -->


<!--begin::Global Theme Bundle(used by all pages) -->
<script src="assets/plugins/global/plugins.bundle.js"
        type="text/javascript"></script>
<script src="assets/js/scripts.bundle.js"
        type="text/javascript"></script>
<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script
    src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"
    type="text/javascript"></script>
<script src="assets/plugins/custom/gmaps/gmaps.js"
        type="text/javascript"></script>
<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="assets/js/pages/dashboard.js"
        type="text/javascript"></script>

<script src="assets/js/pages/custom/login/login-general.js" type="text/javascript"></script>
<script src="assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
<script src="assets/js/pages/crud/datatables/extensions/buttons.js" type="text/javascript"></script>
<script src="assets/js/pages/notify.js" type="text/javascript"></script>
<script src="assets/js/custom.js" type="text/javascript"></script>
<script src="assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/jquery-confirm/js/jquery-confirm.js" type="text/javascript"></script>
<script src="assets/uploadify/jquery.uploadifive.js" type="text/javascript"></script>


<!--end::Page Scripts -->
</body>
<!-- end::Body -->
</html>

