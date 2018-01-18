<div class="row">
    <div class="col-md-8 col-sm-8">
        <div class="form-box">
            <h3>Edit Message</h3>
            <div id="response" class="alert alert-danger"></div>
            <form method="post" action="<?= url('form'); ?>" id="form">
                <?php foreach($messageReview as $row): ?>
                    <div class="form-group">
                        <input type="text" class="form-control ok" name="edit_name" id="name" value="<?= $row['title']; ?>" />
                        <span class="input-response"></span>
                    </div>
                    <div class="form-group">
                        <textarea id="message" class="message-box ok" rows="8" name="message"><?= $row['msg_body']; ?></textarea>
                        <span class="input-response">This field is required!</span>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" name="edit_message" value="Edit" type="submit" />
                        <input type="hidden" name="edit_message">
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                        <a href="<?= url('admin/messages');?>" class="btn btn-danger">Back</a>
                    </div>
                <?php endforeach; ?>
            </form>
        </div>
    </div>
</div>