    <!-- Header -->
    <div class="container-fluid" id="header">
        <div class="row">
            <!-- Logo -->
            <div class="col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-xs-12">
                <a href="<?= url(''); ?>">
                    <img src="<?= resource_asset('images/logo.png'); ?>" class="img-responsive">
                </a>
                <button class="menu-toggle pull-right visible-xs"><i class="fa fa-navicon fa-2x"></i></button>
            </div>
            <!-- Navigation -->
            <div class="col-md-6 col-md-offset-3 col-sm-7 col-sm-offset-1" id="main-nav">
                <ul class="nav navbar-nav hidden-xs" id="nav">
                    <li><a href="<?= url(''); ?>">Home</a></li>
                    <li><a href="<?= url('about'); ?>">About Us</a></li>
                    <li><a href="<?= url('gallery'); ?>">Gallery</a></li>
                    <li><a href="<?= url('contact'); ?>">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Mobile Navigation -->
    <div style="display: none" id="mobile-nav">
        <ul class="nav navbar-nav" id="nav">
            <li><a href="<?= url(''); ?>">Home</a></li>
            <li><a href="<?= url('about'); ?>">About Us</a></li>
            <li><a href="<?= url('gallery'); ?>">Gallery</a></li>
            <li><a href="<?= url('contact'); ?>">Contact Us</a></li>
        </ul>
    </div><!-- /Header -->