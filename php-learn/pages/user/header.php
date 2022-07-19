<?php session_start();?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title><?=ucfirst(DOMAIN)?> | Хувийн санхүү</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-topbar="dark" data-layout="horizontal">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="/assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="/assets/images/logo-dark.png" alt="" height="17">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="/assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="/assets/images/logo-light.png" alt="" height="17">
                            </span>
                        </a>
                    </div>

                    <button type="button"
                        class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                        data-toggle="collapse" data-target="#topnav-menu-content">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <div class="d-none d-lg-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-target="#search-wrap">
                            <a class="header-item" href="../landing/index.html" target="_blank">
                                <i class="mdi mdi-airplane mr-2 font-size-16"></i><?=$_SESSION['phone']?>
                            </a>
                        </button>
                    </div>

                </div>

                <!-- Search input -->
                <div class="search-wrap" id="search-wrap">
                    <div class="search-bar">
                        <input class="search-input form-control" placeholder="Search" />
                        <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-none d-lg-inline-block">
                        <button type="button" class="btn header-item toggle-search noti-icon waves-effect"
                            data-target="#search-wrap">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                    </div>




                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="badge badge-danger badge-pill">2</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <h6 class="m-0">Notifications (258) </h6>
                            </div>

                            <div data-simplebar style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="mdi mdi-cart-outline"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 font-size-15">Your order is placed</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-12">Dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-warning rounded-circle font-size-16">
                                                <i class="mdi mdi-message"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 font-size-15">New Message received</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-12">You have 87 unread messages</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-info rounded-circle font-size-16">
                                                <i class="mdi mdi-martini"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 font-size-15">Your order is placed</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-12">It is a long established fact that a reader
                                                    will
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="mdi mdi-cart-outline"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 font-size-15">Your order is placed</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-12">Dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-danger rounded-circle font-size-16">
                                                <i class="mdi mdi-cart-outline"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 font-size-15">Your order is placed</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-12">Dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-link font-size-14 btn-block text-center"
                                    href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle mr-1"></i> View all
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-none d-lg-inline-block ml-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="mdi mdi-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="/assets/images/users/user-1.jpg"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ml-1"><?=$_SESSION['username']?></span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i
                                    class="dripicons-user d-inline-block text-muted mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i
                                    class="dripicons-wallet d-inline-block text-muted mr-2"></i> My Wallet</a>
                            <a class="dropdown-item d-block" href="#"><i
                                    class="dripicons-gear d-inline-block text-muted mr-2"></i>
                                Settings</a>
                            <a class="dropdown-item" href="#"><i
                                    class="dripicons-lock d-inline-block text-muted mr-2"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i
                                    class="dripicons-exit d-inline-block text-muted mr-2"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <div class="topnav">
            <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-view-dashboard mr-2"></i>Нүүр
                                </a>
                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="topnav-dashboard">
                                    <a href="index.html" class="dropdown-item">Dashboard 1</a>
                                    <a href="index-2.html" class="dropdown-item">Dashboard 2</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-email" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-email mr-2"></i>Орлого
                                </a>
                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="topnav-email">
                                    <a href="email-inbox.html" class="dropdown-item">Inbox</a>
                                    <a href="email-read.html" class="dropdown-item">Read Email</a>
                                    <a href="email-compose.html" class="dropdown-item">Compose Email</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-advanced"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-bullseye mr-2"></i>Зардал
                                </a>
                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="topnav-advanced">

                                    <a href="advanced-rangeslider.html" class="dropdown-item">Range Slider</a>
                                    <a href="advanced-sweetalerts.html" class="dropdown-item">Sweet Alerts</a>
                                    <a href="advanced-nestable.html" class="dropdown-item">Nestable List</a>
                                    <a href="advanced-ratings.html" class="dropdown-item">Ratings</a>
                                    <a href="advanced-highlight.html" class="dropdown-item">Highlight</a>
                                    <a href="advanced-clipboard.html" class="dropdown-item">Clipboard</a>
                                    <a href="advanced-lightbox.html" class="dropdown-item">Lightbox</a>
                                    <a href="advanced-session.html" class="dropdown-item">Session Timeout</a>
                                    <a href="advanced-scrollbars.html" class="dropdown-item">Scrollbars</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-arrow-down-drop-circle-outline mr-2"></i>Тайлан
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                    <a href="calendar.html" class="dropdown-item">Calendar</a>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Icons <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                            <a href="icons-materialdesign.html" class="dropdown-item">Material
                                                Design</a>
                                            <a href="icons-dripicons.html" class="dropdown-item">Dripicons</a>
                                            <a href="icons-fontawesome.html" class="dropdown-item">Font awesome</a>
                                            <a href="icons-themify.html" class="dropdown-item">Themify</a>
                                            <a href="icons-typicons.html" class="dropdown-item">Typicons</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-tables"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Tables <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-tables">
                                            <a href="tables-basic.html" class="dropdown-item">Basic</a>
                                            <a href="tables-datatable.html" class="dropdown-item">Datatables</a>
                                            <a href="tables-responsive.html" class="dropdown-item">Responsive</a>
                                            <a href="tables-editable.html" class="dropdown-item">Editable</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-forms"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Forms <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-forms">
                                            <a href="forms-elements.html" class="dropdown-item">Basic Elements</a>
                                            <a href="forms-advanced.html" class="dropdown-item">Advance Elements</a>
                                            <a href="forms-validation.html" class="dropdown-item">Validation</a>
                                            <a href="forms-wizard.html" class="dropdown-item">Wizard</a>
                                            <a href="forms-editors.html" class="dropdown-item">Editors</a>
                                            <a href="forms-repeater.html" class="dropdown-item">Repeater</a>
                                            <a href="forms-x-editable.html" class="dropdown-item">X Editable</a>
                                            <a href="forms-uploads.html" class="dropdown-item">File Upload</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-maps"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Maps <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-project">
                                            <a href="maps-google.html" class="dropdown-item">Google Maps</a>
                                            <a href="maps-vector.html" class="dropdown-item">Vector Maps</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                            id="topnav-email-templates" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Email Templates <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-email-templates">
                                            <a href="email-templates-basic.html" class="dropdown-item">Basic Action
                                                Email</a>
                                            <a href="email-templates-alert.html" class="dropdown-item">Alert Email</a>
                                            <a href="email-templates-billing.html" class="dropdown-item">Billing
                                                Email</a>
                                        </div>
                                    </div>

                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-chart-bar mr-2"></i>График
                                </a>
                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="topnav-charts">
                                    <a href="charts-morris.html" class="dropdown-item">Morris</a>
                                    <a href="charts-chartist.html" class="dropdown-item">Chartist</a>
                                    <a href="charts-flot.html" class="dropdown-item">Flot</a>
                                    <a href="charts-peity.html" class="dropdown-item">Peity</a>
                                    <a href="charts-chartjs.html" class="dropdown-item">Chartjs</a>
                                    <a href="charts-sparkline.html" class="dropdown-item">Sparkline</a>
                                    <a href="charts-knob.html" class="dropdown-item">Jquery Knob</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-book-open-page-variant mr-2"></i>Тохиргоо
                                </a>

                                <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-lg dropdown-menu-right"
                                    aria-labelledby="topnav-pages">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <a href="page-tour.html" class="dropdown-item">Tour</a>
                                                <a href="page-timeline.html" class="dropdown-item">Timeline</a>
                                                <a href="page-invoice.html" class="dropdown-item">Invoice</a>
                                                <a href="page-treeview.html" class="dropdown-item">Treeview</a>
                                                <a href="page-profile.html" class="dropdown-item">Profile</a>
                                                <a href="page-pricing.html" class="dropdown-item">Pricing</a>
                                                <a href="page-faq.html" class="dropdown-item">FAQs</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <a href="page-starter.html" class="dropdown-item">Starter Page</a>
                                                <a href="auth-login.html" class="dropdown-item">Login</a>
                                                <a href="auth-register.html" class="dropdown-item">Register</a>
                                                <a href="auth-recoverpw.html" class="dropdown-item">Recover Password</a>
                                                <a href="auth-lock-screen.html" class="dropdown-item">Lock Screen</a>
                                                <a href="auth-404.html" class="dropdown-item">Error 404</a>
                                                <a href="auth-500.html" class="dropdown-item">Error 500</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-cellphone-link mr-2"></i>Гарах
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="topnav-layout">
                                    <a href="layouts-vertical.html" class="dropdown-item">Vertical</a>
                                    <a href="layouts-topbar-light.html" class="dropdown-item">Topbar light</a>
                                    <a href="layouts-preloader.html" class="dropdown-item">Preloader</a>
                                    <a href="layouts-boxed.html" class="dropdown-item">Boxed</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">