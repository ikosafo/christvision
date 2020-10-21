<?php require('../../config.php');
//$user_id = $_SESSION['user_id'];
if (!isset($_SESSION['username'])) {
    header("location:login");
}

?>

<!DOCTYPE html>

<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>

    <title>Branch Admin | <?php echo $churcht ?></title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="../assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Page Vendors Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/pages/login/login-5.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/jquery-confirm/css/jquery-confirm.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/uploadify/uploadifive.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/countrySelect.css" rel="stylesheet" type="text/css"/>

    <!--end::Global Theme Styles -->

    <link rel="shortcut icon" href="../assets/img/logo.png"/>
    <script src="../assets/js/jquery.min.js"></script>

    <style>
        .dataTables_filter {
            display: none !important;
        }

        .kt-searchbar {
            margin-bottom: 15px;;
        }

        .float {
            position: fixed;
            height: 30px;
            bottom: 30px;
            padding: 3px;
            top: 80px;
            color: #FFF;
            text-align: center;
            cursor: pointer;
            z-index: 999;
        }

        .float:hover {
            color: #000
        }

        .my-float {
            margin-top: 22px;
        }

        .kt-portlet {
            margin-top: 0.5% !important;
        }

        .kt-sticky-toolbar {
            width: 46px;
            position: fixed;
            top: 30%;
            right: 0;
            list-style: none;
            padding: 5px 0;
            margin: 0;
            z-index: 50;
            background: #fff;
            -webkit-box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15);
            box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            border-radius: 3px 0 0 3px;
        }

        .kt-sticky-toolbar .kt-sticky-toolbar__item.kt-sticky-toolbar__item--demo-toggle > a {
            padding: 8px 0;
            height: 90px;
            -webkit-writing-mode: vertical-rl;
            -ms-writing-mode: tb-rl;
            writing-mode: vertical-rl;
            -webkit-text-orientation: mixed;
            text-orientation: mixed;
            font-size: 1.3rem;
            font-weight: 700;
            text-transform: uppercase;
            color: #4d5cf2;
            letter-spacing: 2px;
        }
    </style>

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
<body style="background-image: url('../assets/img/header3.jpg'); background-position: center top;
background-size: 100% 350px;"
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
            <img alt="Logo" src="../assets/img/logo.png" style="width: 30%"/>
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                class="flaticon-more-1"></i></button>
    </div>
</div>

<ul class="kt-sticky-toolbar" style="margin-top: 30px;">
    <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--demo-toggle" id="kt_demo_panel_toggle"
        data-toggle="kt-tooltip" title="" data-placement="right" data-original-title="Check out more demos">
        <a href="sms" class="">SMS</a>
    </li>
    <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--builder" data-toggle="kt-tooltip"
        title="Birthdays for Today"
        data-placement="left" data-original-title="Birthdays for Today">
        <a href="birthdaytoday"><i class="flaticon2-bell"></i></a>
    </li>
    <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--docs" data-toggle="kt-tooltip"
        title="https://cvsiworld.net"
        data-placement="left" data-original-title="Documentation">
        <a href="../../" target="_blank"><i class="fa fa-globe"></i></a>
    </li>
</ul>


<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header  kt-header--fixed " data-ktheader-minimize="on">
                <div class="kt-container ">
                    <!-- begin:: Brand -->
                    <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                        <a class="kt-header__brand-logo" href="/">
                            <img alt="Logo" src="../assets/img/logo.png" class="kt-header__brand-logo-default"
                                 style="width:45%;padding-left:5px;border-radius: 50%;background-color: #ffffff"/>
                            <img alt="Logo" src="../assets/img/logo.png" style="width:40%;border-radius: 50%"
                                 class="kt-header__brand-logo-sticky"/>
                        </a>
                    </div>
                    <!-- end:: Brand -->        <!-- begin: Header Menu -->
                    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn">
                        <i class="la la-close"></i>
                    </button>
                    <div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid"
                         id="kt_header_menu_wrapper">
                        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
                            <ul class="kt-menu__nav">

                                <li class="kt-menu__item kt-menu__item--rel <?php echo(
                                $_SERVER['PHP_SELF'] == "/ms/branch/index.php"
                                    ? "kt-menu__item--here" : ""); ?>">
                                    <a href="/ms/branch/" class="kt-menu__link"><span
                                            class="kt-menu__link-text">Dashboard</span>
                                    </a>
                                </li>

                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?php echo(
                                $_SERVER['PHP_SELF'] == "/ms/branch/documents.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/departments.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/ministries.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/cells.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/sms_key.php"

                                    ? "kt-menu__item--here" : ""); ?>"
                                    data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                    <a href="javascript:;"
                                       class="kt-menu__link kt-menu__toggle"><span
                                            class="kt-menu__link-text">Configuration <i
                                                class="fa fa-caret-down ml-2"></i> </span><i
                                            class="kt-menu__ver-arrow la la-angle-right"></i></a>

                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                        <ul class="kt-menu__subnav">

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/documents.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="documents"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Documents</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/departments.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="departments"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Departments</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/ministries.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="ministries"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Ministries</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/cells.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="cells"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Cell Groups</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/sms_key.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="sms_key"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">SMS API Key</span></a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>


                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?php echo(
                                $_SERVER['PHP_SELF'] == "/ms/branch/members.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/viewmembers.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/converts.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/visitors.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/church_workers.php"

                                    ? "kt-menu__item--here" : ""); ?>"
                                    data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                    <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                        <span class="kt-menu__link-text">Membership
                                            <i class="fa fa-caret-down ml-2"></i> </span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>

                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                        <ul class="kt-menu__subnav">

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/members.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="members"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Add Members</span></a>
                                            </li>
                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/viewmembers.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="viewmembers"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">View Members</span></a>
                                            </li>
                                            <li class="kt-menu__item   <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/converts.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="converts"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">New Converts</span></a>
                                            </li>
                                            <li class="kt-menu__item   <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/visitors.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="visitors"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Visitors</span></a>
                                            </li>
                                            <li class="kt-menu__item   <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/church_workers.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="church_workers"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Branch Church Workers</span></a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>

                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?php echo(
                                $_SERVER['PHP_SELF'] == "/ms/branch/meetings.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/takemeetingattendance.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/services.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/attendanceconfig.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/takeattendance.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/attendancesearch.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/attendancesearchmeeting.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/meetings.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/takemeetingattendance.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/attendancesearchmeeting.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/meetingstats.php"


                                    ? "kt-menu__item--here" : ""); ?>"
                                    data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                    <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                        <span class="kt-menu__link-text">Attendance
                                            <i class="fa fa-caret-down ml-2"></i> </span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>

                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                        <ul class="kt-menu__subnav">

                                            <li class="kt-menu__item kt-menu__item--submenu  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/meetings.php" ||
                                            $_SERVER['PHP_SELF'] == "/ms/branch/takemeetingattendance.php" ||
                                            $_SERVER['PHP_SELF'] == "/ms/branch/attendancesearchmeeting.php" ||
                                            $_SERVER['PHP_SELF'] == "/ms/branch/meetingstats.php"

                                                ? "kt-menu__item--here" : ""); ?>"
                                                data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                                    <span class="kt-menu__link-text">Meetings</span><i
                                                        class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>

                                                <div
                                                    class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                    <ul class="kt-menu__subnav">
                                                        <li class="kt-menu__item  <?php echo(
                                                        $_SERVER['PHP_SELF'] == "/ms/branch/meetings.php"
                                                            ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                                href="meetings"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                                    <span></span></i><span
                                                                    class="kt-menu__link-text">Configure Meetings</span></a>
                                                        </li>
                                                        <li class="kt-menu__item  <?php echo(
                                                        $_SERVER['PHP_SELF'] == "/ms/branch/takemeetingattendance.php"
                                                            ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                                href="takemeetingattendance"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                                    <span></span></i><span
                                                                    class="kt-menu__link-text">Take Meeting Attendance</span></a>
                                                        </li>
                                                        <li class="kt-menu__item  <?php echo(
                                                        $_SERVER['PHP_SELF'] == "/ms/branch/attendancesearchmeeting.php"
                                                            ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                                href="attendancesearchmeeting"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                                    <span></span></i><span
                                                                    class="kt-menu__link-text">Search Meeting Attendance</span></a>
                                                        </li>
                                                        <li class="kt-menu__item  <?php echo(
                                                        $_SERVER['PHP_SELF'] == "/ms/branch/meetingstats.php"
                                                            ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                                href="meetingstats"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                                    <span></span></i><span
                                                                    class="kt-menu__link-text">Meeting Stats</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>


                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/services.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="services"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Add Services</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/attendanceconfig.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="attendanceconfig"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Configure Attendance</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/takeattendance.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="takeattendance"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Take Attendance</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/attendancesearch.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="attendancesearch"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Search Attendance</span></a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>


                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?php echo(
                                $_SERVER['PHP_SELF'] == "/ms/branch/offering.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/tithe.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/welfare.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/firstfruit.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/contributions.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/mpartners.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/financialsearch.php"

                                    ? "kt-menu__item--here" : ""); ?>"
                                    data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                    <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                        <span class="kt-menu__link-text">Financials
                                            <i class="fa fa-caret-down ml-2"></i> </span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>

                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                        <ul class="kt-menu__subnav">

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/offering.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="offering"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Special Offerings/Seeds</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/tithe.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="tithe"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Tithe</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/welfare.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="welfare"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Welfare</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/firstfruit.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="firstfruit"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">First Fruit</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/contributions.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="contributions"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Contributions</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/mpartners.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="mpartners"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Ministry Partners</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/financialsearch.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="financialsearch"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Search</span></a>
                                            </li>


                                        </ul>
                                    </div>
                                </li>


                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?php echo(
                                $_SERVER['PHP_SELF'] == "/ms/branch/receivals.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/payments.php" ||
                                $_SERVER['PHP_SELF'] == "/ms/branch/accountsearch.php" ||
                                $_SERVER['PHP_SELF'] == "/branch/#.php"

                                    ? "kt-menu__item--here" : ""); ?>"
                                    data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                    <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                        <span class="kt-menu__link-text">Accounts
                                            <i class="fa fa-caret-down ml-2"></i> </span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>

                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                        <ul class="kt-menu__subnav">

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/receivals.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="receivals"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Receivals</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/payments.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="payments"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Payments</span></a>
                                            </li>
                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/ms/branch/accountsearch.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="accountsearch"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Search</span></a>
                                            </li>
                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/branch/#.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="#"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Account Entry</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/branch/#.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="#"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Cash Book</span></a>
                                            </li>
                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/branch/#.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="#"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Account Statement</span></a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>


                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?php echo(
                                $_SERVER['PHP_SELF'] == "/branch/#.php" ||
                                $_SERVER['PHP_SELF'] == "/branch/#.php" ||
                                $_SERVER['PHP_SELF'] == "/branch/#.php"

                                    ? "kt-menu__item--here" : ""); ?>"
                                    data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                    <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                        <span class="kt-menu__link-text">Birthdays
                                            <i class="fa fa-caret-down ml-2"></i> </span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>

                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                        <ul class="kt-menu__subnav">

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/branch/#.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="#"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">View Celebrants</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/branch/#.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="#"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Send Messages</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>


                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel <?php echo(
                                $_SERVER['PHP_SELF'] == "/branch/#.php" ||
                                $_SERVER['PHP_SELF'] == "/branch/#.php" ||
                                $_SERVER['PHP_SELF'] == "/branch/#.php"

                                    ? "kt-menu__item--here" : ""); ?>"
                                    data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                    <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                        <span class="kt-menu__link-text">Asset Registry
                                            <i class="fa fa-caret-down ml-2"></i> </span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>

                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                        <ul class="kt-menu__subnav">

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/branch/#.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="#"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Add Categories</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/branch/#.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="#"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">Add Assets</span></a>
                                            </li>

                                            <li class="kt-menu__item  <?php echo(
                                            $_SERVER['PHP_SELF'] == "/branch/#.php"
                                                ? "kt-menu__item--active" : ""); ?>" aria-haspopup="true"><a
                                                    href="#"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                        <span></span></i><span
                                                        class="kt-menu__link-text">View/Search</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="kt-header__topbar kt-grid__item">

                        <!--begin: Search -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown"
                             id="kt_quick_search_toggle">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                                <span class="kt-header__topbar-icon">
                                    <i class="flaticon2-search-1
                                    "></i>				<!--<i class="flaticon2-search-1"></i>-->
                                </span>
                            </div>
                            <div
                                class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                                <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact"
                                     id="kt_quick_search_dropdown">
                                    <form method="get" class="kt-quick-search__form">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="flaticon2-search-1"></i></span></div>
                                            <input type="text" class="form-control kt-quick-search__input"
                                                   placeholder="Search...">

                                            <div class="input-group-append"><span class="input-group-text"><i
                                                        class="la la-close kt-quick-search__close"></i></span></div>
                                        </div>
                                    </form>
                                    <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325"
                                         data-mobile-height="200">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Search -->

                        <?php
                        /*                        //IT SECTION
                                                $query = $mysqli->query("select * from permission where user_id = '$user_id'
                                                                    AND (permission = 'IT Section' OR permission = 'All Permissions')");
                                                $count = mysqli_num_rows($query);
                                                if ($count == '1') {
                                                */ ?>

                        <!--begin: Quick actions -->
                        <div class="kt-header__topbar-item dropdown">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
			<span class="kt-header__topbar-icon">
				<i class="flaticon2-user-1"></i>
							</span>
                            </div>
                            <div
                                class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                                <form>

                                    <!--begin: Grid Nav -->
                                    <div class="kt-grid-nav kt-grid-nav--skin-light">
                                        <div class="kt-grid-nav__row">
                                            <a href="adduser" class="kt-grid-nav__item">
            <span class="kt-grid-nav__icon">
                <i class="flaticon2-user"></i>
            </span>
                                                <span class="kt-grid-nav__title">Add User</span>
                                                <!-- <span class="kt-grid-nav__desc">User</span>-->
                                            </a>
                                            <a href="changepassword" class="kt-grid-nav__item">
           <span class="kt-grid-nav__icon">
                <i class="flaticon2-lock"></i>
            </span>
                                                <span class="kt-grid-nav__title">Change Password</span>
                                                <!--<span class="kt-grid-nav__desc">Password</span>-->
                                            </a>
                                        </div>
                                    </div>
                                    <!--end: Grid Nav -->
                                </form>
                            </div>
                        </div>
                        <!--end: Quick actions -->

                        <!--  --><?php /*} */ ?>


                        <!--begin: User bar -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                                <span class="kt-header__topbar-welcome">Hi,</span>
                                <span class="kt-header__topbar-username"><?php echo $_SESSION['username']; ?></span>
                            </div>
                            <div
                                class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                                <!--begin: Navigation -->
                                <div class="kt-notification">
                                    <a href="userprofile"
                                       class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-calendar-3 kt-font-success"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                My Profile
                                            </div>
                                            <div class="kt-notification__item-time">
                                                User Profile and Details
                                            </div>
                                        </div>
                                    </a>


                                    <div class="kt-notification__custom kt-space-between">
                                        <a href="login"
                                           class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>

                                    </div>
                                </div>
                                <!--end: Navigation -->
                            </div>
                        </div>
                        <!--end: User bar -->
                    </div>


                </div>
            </div>
            <!-- end:: Header -->
            <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
                <div class="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"
                     id="kt_content">

                    <a href="#" class="float">
                        <button type="button" class="btn btn-light btn-elevate btn-square">
                            <?php
                            $branch = $_SESSION['branch'];
                            $getbranch = $mysqli->query("select * from branch where id='$branch'");
                            $resbranch = $getbranch->fetch_assoc();
                            echo $resbranch['name'];
                            ?>
                        </button>

                    </a>

