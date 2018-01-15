<?php
use Church\Data\DB;
$db = new DB;
//$day = date('Y-m-d');
//$getVerse = $db->getAllDataWhere("bible_verse", "`day` = '$day'");
//var_dump(date($getVerse));
?>

    <!-- Services, Last Sermon and Worship centre -->
    <div class="container-fluid container-box" id="last-col">
        <div class="row">
            <!-- Last Sermon -->
            <div class="col-md-4 col-md-offset-1 col-sm-4" id="last-sermon">
                <h3>Latest Sermon</h3>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/u4aCyZzQ8G4?controls=1"></iframe>
            </div>
            <!-- Services -->
            <div class="col-md-3 col-sm-4" id="services">
                <h3>Our Weekly Services</h3>
                <ul class="list-group">
                    <li class="list-group-item">
                        <b><u>SUNDAY</u></b><br>
                        <span>Sunday School: 8:00am - 9:00am</span><br>
                        <span>Family Worship: 9:15am - 12:30am</span>
                    </li>
                    <li class="list-group-item">
                        <b><u>TUESDAY - THURSDAY</u></b><br>
                        <span>Free Counselling and Prayer: 8:00am - 4:00pm</span>
                    </li>
                    <li class="list-group-item">
                        <b><u>WEDNESDAY</u></b><br>
                        <span>Bible Study: 5:30pm - 7:00pm</span>
                    </li>
                    <li class="list-group-item">
                        <b><u>FRIDAY</u></b><br>
                        <span>Open House Prayer: 6:00pm – 7:00pm</span>
                    </li>
                </ul>
            </div>
            <!-- Bible Verse of the day -->
            <div class="col-md-3 col-sm-4" id="bible-verse">
                <h3>Bible Verse of the Day</h3>
                <div class="bible-quote">
                    <h3>He put a new song in my mouth, a hymn of praise to our God. Many will see and fear the LORD and put their trust in him.</h3>
                    <u>Psalm 40:3</u>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="container-fluid container-box" id="footer">
        <div class="row">
            <!-- Copyright-->
            <div class="col-md-offset-1 col-md-6 col-sm-6">
                <p><?= copyYear("2018"); ?> &copy; Copyright The Love of God Ministry. All Rights Reserved</p>
            </div>
            <!-- Social Media -->
            <div class="col-md-4 col-sm-4">
                <ul class="nav nav-pills">
                    <li class="fb"><a href="#"><i class="fa fa-2x fa-facebook"></i></a></li>
                    <li class="tw"><a href="#"><i class="fa fa-2x fa-twitter"></i></a></li>
                    <li class="in"><a href="#"><i class="fa fa-2x fa-instagram"></i></a></li>
                    <li class="yt"><a href="#"><i class="fa fa-2x fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <p id="gototop"><a href="#"><i class="fa fa-2x fa-chevron-up"></i></a></p>
    </div>
    <script type="text/javascript" src="<?= resource_asset('js/app.js'); ?>"></script>
    <script type="text/javascript" src="<?= resource_asset('js/axios.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= resource_asset('js/form.js'); ?>"></script>
    <script type="text/javascript" src="<?= resource_asset('js/init.js'); ?>"></script>
</body>
</html>