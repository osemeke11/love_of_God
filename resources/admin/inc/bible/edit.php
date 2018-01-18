<div class="row">
    <div class="col-md-8 col-sm-8">
        <div class="form-box">
            <h3>Edit Bible Verse</h3>
            <div id="response" class="alert alert-danger"></div>
            <form method="post" action="<?= url('form'); ?>" id="form">
                <?php foreach($bibleReview as $row): ?>
                <div class="form-group">
                    <input type="text" class="form-control ok" name="edit_verse" id="name" value="<?= $row['bible_verse']; ?>" />
                    <span class="input-response"></span>
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="edit_day" value="<?= $row['day']; ?>" />
                </div>
                <div class="form-group">
                    <textarea id="message" class="message-box ok" rows="8" name="bible-content"><?= $row['bible_content']; ?></textarea>
                    <span class="input-response">This field is required!</span>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" name="edit_bible" value="Edit" type="submit" />
                    <input type="hidden" name="edit_bible">
                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                    <a href="<?= url('admin/bible-verse');?>" class="btn btn-danger">Back</a>
                </div>
                <?php endforeach; ?>
            </form>
        </div>
    </div>
</div>