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
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <?php foreach ($getAboutUs as $row): ?>
                <p class="msg"><?= $row['page_content']; ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


<?php include resource_partial('footer'); ?>