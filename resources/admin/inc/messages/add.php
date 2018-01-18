<div class="row">
    <div class="col-md-8 col-sm-8">
        <div class="form-box">
            <h3>Add Message</h3>
            <div id="response" class="alert alert-danger"></div>
            <form method="post" action="<?= url('form'); ?>" id="form">
                <div class="form-group">
                    <input type="text" class="form-control empty" name="name" id="name" placeholder="Enter the Title" />
                    <span class="input-response">This field is required</span>
                </div>
                <div class="form-group">
                    <textarea id="message" class="message-box empty" rows="8" name="add_message"></textarea>
                    <span class="input-response">This field is required!</span>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" name="add_message" value="Add" type="submit" />
                    <a href="<?= url('admin/messages');?>" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
