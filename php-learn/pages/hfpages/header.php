<?php
if ($_SESSION['type'] !== 'Хэрэглэгч' && $_SESSION['type'] !== 'Админ') {
    $_SESSION['errors'] = ['Та өөрийн эрхээр заавал нэвтэрнэ үү'];
    redirect('/sign-in');
}
?>
<!doctype html>
<html lang="en">

<head>
    <?php require ROOT . '/pages/hfpages/meta.php';?>
</head>

<body data-topbar="dark" data-layout="horizontal">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar" style="z-index: 900;">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <!-- Logo deleted -->

                    <button type="button"
                        class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                        data-toggle="collapse" data-target="#topnav-menu-content">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <div class="d-none d-lg-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-target="#search-wrap">
                            <a class="header-item" target="_blank">
                                <i
                                    class="ti-clipboard mr-2 font-size-16"></i><?=$_SESSION['phone'] . ' <=> ' . $_SESSION['type']?>
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
                    <div class="dropdown d-none d-lg-inline-block ml-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="mdi mdi-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="/assets/images/users/user-11.png"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ml-1"><?=$_SESSION['username']?></span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i
                                    class="dripicons-user d-inline-block text-muted mr-2"></i>Профайл</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/hfpages/logout"><i
                                    class="dripicons-exit d-inline-block text-muted mr-2"></i> Гарах</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <?=require 'navbar.php'?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <?php if (!empty($_SESSION['errors'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?php foreach ($_SESSION['errors'] as $error): ?>
                    <p style="text-align: center;" class="m-0"><?=$error?></p>
                    <?php endforeach;?>
                </div>
                <?php unset($_SESSION['errors']);endif;?>

                <?php if (!empty($_SESSION['messages'])): ?>
                <div class="alert alert-info" role="alert">
                    <?php foreach ($_SESSION['messages'] as $message): ?>
                    <p style="text-align: center;" class="m-0"><?=$message?></p>
                    <?php endforeach;?>
                </div>
                <?php unset($_SESSION['messages']);endif;?>