<?php require resource_admin('inc/head'); ?>
    <h1>Bible Verse of the Day</h1>
    <div class="form-box">
        <div id="response" class="alert alert-danger"></div>
        <form method="post" action="" id="form">
            <div class="form-group">
                <textarea id="message" class="message-box" rows="8"></textarea>
                <span class="input-response">This field is required!</span>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" name="edit_about" value="Edit" type="submit" />
            </div>
        </form>
    </div>
<?php require resource_admin('inc/footer'); ?>