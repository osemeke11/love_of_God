<?php include resource_partial('head'); ?>
<?php include resource_partial('header'); ?>
    <!-- Banner -->
    <div class="container-fluid" id="banner">
        <div class="banner-box banner-pages">
            <img src="<?= resource_asset('images/bg.jpg'); ?>" class="img-responsive"/>
            <div class="banner-caption">
                <h1>About Us</h1>
            </div>
            <div class="overlay"></div>
        </div>
    </div><!-- /Banner -->

    <!-- About us -->
    <div class="container-box container-fluid" id="about">
        <div class="row">
            <div class="col-md-7 col-md-offset-1 col-sm-6 col-sm-offset-1">
                <p class="msg"><?= $getAboutUs['page_content']; ?></p>
            </div>
            <div class="col-md-3 col-sm-4">
                <h3>HOT LINK</h3>
                <ul>
                    <li><a href="<?= url('about'); ?>">About Us</a></li>
                    <li><a href="<?= url('contact'); ?>">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>


<?php include resource_partial('footer'); ?>