<?php $title = \Church\Router::$title; ?>
    <!-- Header -->
    <div class="container-fluid" id="header">
        <div class="row">
            <!-- Logo -->
            <div class="col-sm-3 col-md-2 col-md-offset-1 col-xs-4" id="logo">
                <a href="<?= url(''); ?>">
                    <img src="<?= resource_asset('images/logo.png'); ?>" class="img-responsive pull-left">
<!--                    <span class="pull-left">RESTORATION <br>CHAPEL <br> CSMC</span>-->
                </a>
            </div>
            <button class="menu-toggle pull-right visible-xs"><i class="fa fa-navicon fa-2x"></i></button>
            <!-- Navigation -->
            <div class="col-md-7 col-md-offset-2 col-sm-9" id="main-nav">
                <ul class="nav navbar-nav hidden-xs pull-right" id="nav">
                    <li <?php if($title == "" || $title == "index") echo 'id="current"'; ?>><a href="<?= url(''); ?>">Home</a></li>
                    <li <?php if($title == "about") echo 'id="current"'; ?>><a href="<?= url('about'); ?>">About Us</a></li>
                    <li <?php if($title == "messages") echo 'id="current"'; ?>><a href="<?= url('messages'); ?>">Our Messages</a></li>
                    <li <?php if($title == "gallery") echo 'id="current"'; ?>><a href="<?= url('gallery'); ?>">Gallery</a></li>
                    <li <?php if($title == "contact") echo 'id="current"'; ?>><a href="<?= url('contact'); ?>">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Mobile Navigation -->
    <div style="display: none" id="mobile-nav">
        <ul class="nav navbar-nav" id="nav">
            <li><a href="<?= url(''); ?>">Home</a></li>
            <li><a href="<?= url('about'); ?>">About Us</a></li>
            <li><a href="<?= url('messages'); ?>">Our Messages</a></li>
            <li><a href="<?= url('gallery'); ?>">Gallery</a></li>
            <li><a href="<?= url('contact'); ?>">Contact Us</a></li>
        </ul>
    </div><!-- /Header -->