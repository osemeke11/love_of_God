<?php include resource_partial('head'); ?>
<?php include resource_partial('header'); ?>
<!-- Banner -->
    <div class="container-fluid" id="banner">
        <div class="banner-box">
            <img src="<?= resource_asset('images/bg.jpg'); ?>" class="img-responsive"/>
            <div class="banner-caption">
                <h1>Welcome to The Restoration Chapel CSMC, Ibadan</h1>
                <h3>Where Everyone is Important</h3>
                <p class="banner-btn"><a href="<?= url('about'); ?>">Who we are</a></p>
            </div>
            <div class="overlay"></div>
        </div>
    </div><!-- /Banner -->

    <!-- Pastor's Welcome -->
    <div class="container-fluid container-box" id="pastor-msg">
        <div class="row">
            <div class="col-md-7 col-md-offset-1 col-sm-8">
                <h2 class="heading-ct">Pastor's <span>Note</span></h2>
                <?php foreach ($getPastorNote as $row): ?>
                <p class="msg"><?= $row['page_content']; ?></p>
                <?php endforeach; ?>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="thumbnail">
                    <div class="image-box">
                        <img src="<?= resource_asset('images/t3.jpg'); ?>" class="img-responsive">
                    </div>
                    <div class="caption">
                        <h3>Pastor Oloruntobi Cole</h3>
                        <p>Senior Pastor</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /Pastor's Welcome Note -->

<?php include resource_partial('footer'); ?>