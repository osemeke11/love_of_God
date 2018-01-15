<?php require resource_admin('inc/head'); ?>
    <h1>Gallery</h1>
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