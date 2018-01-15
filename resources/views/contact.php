<?php include resource_partial('head'); ?>
<?php include resource_partial('header'); ?>
    <!-- Banner -->
    <div class="container-fluid" id="banner">
        <div class="banner-box banner-pages">
            <img src="<?= resource_asset('images/bg.jpg'); ?>" class="img-responsive"/>
            <div class="banner-caption">
                <h1>Contact Us</h1>
            </div>
            <div class="overlay"></div>
        </div>
    </div><!-- /Banner -->

    <div class="container-fluid container-box">
        <div class="row">
            <div class="col-md-offset-1 col-md-6 col-sm-offset-1 col-sm-6">
                <!-- Google Map -->
                <img width="100%" src="https://maps.googleapis.com/maps/api/staticmap?center=glo+world+ibadan&zoom=15&scale=1&size=600x300&maptype=roadmap&format=png&visual_refresh=true&markers=size:mid%7Ccolor:0xff0000%7Clabel:1%7Cglo+world+ibadan" alt="Google Map of glo world ibadan">
            </div>
            <div class="col-md-4 col-sm-4" id="contact-info">
                <!-- Contact Info -->
                <div>
                    <p><i class="fa fa-2x fa-map-marker"></i></p>
                    <p>
                        3, Ajobo Close,<br> Elewura, Challenge,<br> Ibadan.
                    </p>
                </div>
                <div>
                    <p><i class="fa fa-2x fa-envelope"></i></p>
                    <p>info@tlogm.com</p>
                    <p>prayer.request@tlogm.com</p>
                    <p>enquiry@tlogm.com</p>
                </div>
                <div>
                    <p><i class="fa fa-2x fa-phone"></i></p>
                    <p>+234 - 7064682596</p>
                    <p>+234 - 8079035018</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid container-box" id="contact-form">
        <div class="row">
            <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                <h2>For Counselling, Prayer and Enquiries</h2>
                <div id="form-box">
                    <div id="response" class="alert alert-danger"></div>
                    <form action="<?= url('form'); ?>" method="post" id="feedback">
                        <!-- Name -->
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" id="name" class="input-box empty">
                            <span class="input-response">This field is required!</span>
                        </div>
                        <!-- Phone -->
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" id="phone" class="input-box empty">
                            <span class="input-response">This field is required!</span>
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="input-box empty">
                            <span class="input-response">This field is required!</span>
                        </div>
                        <!-- Message -->
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" rows="8" cols="80"  class="input-box empty" id="message"></textarea>
                            <span class="input-response">This field is required!</span>
                        </div>
                        <!-- Submit Button -->
                        <div class="form-group">
                            <input type="submit" name="send_message" value="Send" class="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php include resource_partial('footer'); ?>