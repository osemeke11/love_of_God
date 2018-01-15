<?php
    require resource_admin('inc/head');
    $db = new \Church\Data\DB;
    $about_content = $db->getAllDataWhere("pages", "page = 'about'");
?>
    <h1>Edit About Us</h1>
    <div class="form-box">
        <div id="response" class="alert alert-danger"></div>
        <?php foreach($about_content as $about): ?>
        <form method="post" action="<?= url('form'); ?>" id="form">
            <div class="form-group">
                <textarea id="message" class="message-box" rows="8" name="edit-about"><?= $about['page_content']; ?></textarea>
                <span class="input-response">This field is required!</span>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" name="edit_about" value="Edit" type="submit" />
            </div>
        </form>
        <?php endforeach; ?>
    </div>
<?php require resource_admin('inc/footer'); ?>