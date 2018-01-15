<?php include resource_partial('head'); ?>
<?php include resource_partial('header'); ?>
<!-- Banner -->
    <div class="container-fluid" id="banner">
        <div class="banner-box">
            <img src="<?= resource_asset('images/bg.jpg'); ?>" class="img-responsive"/>
            <div class="banner-caption">
                <h1>Welcome to The Love of God Community</h1>
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
                <p class="msg">
                    Thank you for visiting the website of The Love of God Ministry. I trust that it introduces you to the work and witness of our congregation and that you will feel free to join with us for our worship services.
                    <br>Affectionately known simply as “Faith” our congregation is comprised of young and old who join together to worship God. We place an emphasis on the preaching of the Word and endeavor to grow in grace and in the knowledge of Christ. Our music is conservative and we strive for a high standard.
                    <br>Our congregation has been part of the Greenville community for over thirty years and welcome visitors to all our services. We also broadcast our Sunday services on live webcast at www.sermonaudio.com/faith. I would be delighted to welcome you to join with us each Lord’s Day. If you need further details please do not hesitate to contact the church office.
                </p>
                <h3>God Bless You!!!</h3>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="thumbnail">
                    <div class="image-box">
                        <img src="<?= resource_asset('images/t3.jpg'); ?>" class="img-responsive">
                    </div>
                    <div class="caption">
                        <h3>Osemeke Samuel</h3>
                        <p>Senior Pastor</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /Pastor's Welcome Note -->

<?php include resource_partial('footer'); ?>