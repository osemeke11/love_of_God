<?php require resource_admin('inc/head');
use Church\Data\DB;
$db = new DB();
$getImages = $db->getAllData("gallery");
$totalImages = count($getImages);

?>
    <h1>Gallery</h1>
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
    <div class="form-box">
        <div id="response" class="alert alert-danger"></div>
        <form method="post" action="<?= url('form'); ?>" id="form" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="add_gallery" class="empty" id="image" />
                <span class="input-response">This field is required!</span>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" name="add_image" value="Add Image" type="submit" />
            </div>
        </form>
    </div>
<?php require resource_admin('inc/footer'); ?>