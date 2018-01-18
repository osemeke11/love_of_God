<?php
require resource_admin('inc/head');
$db = new \Church\Data\DB;
$about_content = $db->getAllDataWhere("pages", "page = 'pastor-note'");
?>
    <div class="row">
        <div class="col-md-7 col-sm-8">
            <h1>Edit Pastor's Welcome Note</h1>
            <div class="form-box">
                <div id="response" class="alert alert-danger"></div>
                <?php foreach($about_content as $about): ?>
                    <form method="post" action="<?= url('form'); ?>" id="form">
                        <div class="form-group">
                            <textarea id="message" class="message-box" rows="8" name="edit-note"><?= $about['page_content']; ?></textarea>
                            <span class="input-response">This field is required!</span>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" name="edit_note" value="Edit" type="submit" />
                        </div>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php require resource_admin('inc/footer'); ?>