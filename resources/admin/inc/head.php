<html>
<head>
    <title>The Love of God Ministry</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" type="text/css" href="<?= resource_asset('css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= resource_asset('css/font-awesome.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= resource_asset('css/admin.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
    <script rel="stylesheet" type="text/css" href="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <!--    <link rel="stylesheet" type="text/css" href="--><?//= resource_asset('css/datatable.css'); ?><!--"--
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 col-sm-3" id="sidebar" style="overflow: hidden">
            <!-- Logo Box -->
            <div class="logo-box">
                <a href="<?= url('admin'); ?>">
                    <img src="<?= resource_asset('images/logo.png'); ?>" class="img-responsive">
                </a>
            </div>

            <!-- Navigation -->
            <div id="navigation">
                <ul class="nav nav-stacked">
                    <li><a href="<?= url('admin/edit-about'); ?>">Edit About Us</a></li>
                    <li><a href="<?= url('admin/gallery'); ?>">Gallery</a></li>
<!--                    <li><a href="--><?//= url('admin/contact-info'); ?><!--">Contact Info</a></li>-->
                    <li><a href="<?= url('admin/bible-verse'); ?>">Bible Verse of the Day</a></li>
                    <li><a href="<?= url('logout'); ?>">Log Out</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 col-sm-8" id="main">