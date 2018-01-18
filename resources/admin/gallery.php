<?php require resource_admin('inc/head');
use Church\Data\DB;
$db = new DB();
$getImages = $db->getAllData("gallery");
$totalImages = count($getImages);

?>
    <h1>Gallery</h1>
    <div class="row">
        <div class="col-sm-7 col-md-8">
            <div class="dataTables_wrapper panel" style="padding: 30px;">
                <div id="response" class="alert alert-danger"></div>
                <table id="datatable" class="display table table-striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Images</th>
                        <th>Caption</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Images</th>
                        <th>Caption</th>
                        <th>Delete</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($getImages as $row): ?>
                        <tr class="popup-gallery">
                            <td>
                                <a href="<?= resource_asset('images/'. $row['images']); ?>" title="<?= $row['caption']; ?>">
                                    <img src="<?= resource_asset('images/'. $row['images']); ?>" class="img-responsive" width="80" height="80">
                                </a>
                            </td>
                            <td><?= ucwords($row['caption']); ?></td>
                            <td>
                                <form action="<?= url('form'); ?>" method="post" id="form">
                                    <input type="hidden" value="<?= $row['id']; ?>" name="delete_image">
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-2x"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-5 col-md-4">
            <div class="form-box">
                <div id="response" class="alert alert-danger"></div>
                <form method="post" action="<?= url('form'); ?>" id="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Caption</label>
                        <input type="text" class="empty form-control" maxlength="50" name="caption" id="name" placeholder="Enter Caption for this image">
                        <span class="input-response">This field is required!</span>
                    </div>
                    <div class="form-group">
                        <input type="file" name="add_gallery" class="empty" id="image" />
                        <span class="input-response">This field is required!</span>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" name="add_image" value="Add Image" type="submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require resource_admin('inc/footer'); ?>