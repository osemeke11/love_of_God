<?php include resource_partial('head'); ?>
<?php include resource_partial('header'); ?>
    <!-- Banner -->
    <div class="container-fluid" id="banner">
        <div class="banner-box banner-pages">
            <img src="<?= resource_asset('images/bg.jpg'); ?>" class="img-responsive"/>
            <div class="banner-caption">
                <h1>Gallery</h1>
            </div>
            <div class="overlay"></div>
        </div>
    </div><!-- /Banner -->

    <!-- Gallery Page -->
    <div class="container-box container-fluid" id="gallery">
        <div class="row">
            <div class="col-sm-offset-1 col-md-offset-1 col-md-10 col-sm-10">
                <div class="row">
                    <?php foreach ($getImages as $row): ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <img src="<?= resource_asset('images/'. $row['images']); ?>" class="img-responsive">
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

<?php include resource_partial('footer'); ?>