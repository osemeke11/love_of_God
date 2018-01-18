<?php
use Church\Data\DB;
$db = new DB;
$day = date('Y-m-d');
$getVerse = $db->getAllDataWhere("bible_verse", "day = '$day'");
?>

    <!-- Services, Last Sermon and Worship centre -->
    <div class="container-fluid container-box" id="last-col">
        <div class="row">
            <!-- Last Sermon -->
            <div class="col-md-4 col-md-offset-1 col-sm-4" id="last-sermon">
                <h3>Latest Sermon</h3>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/hPmdQaXpEGM?controls=1"></iframe>
            </div>
            <!-- Services -->
            <div class="col-md-3 col-sm-4" id="services">
                <h3>Our Weekly Services</h3>
                <ul class="list-group">
                    <li class="list-group-item">
                        Contents Under Review.
                    </li>
                </ul>
            </div>
            <!-- Bible Verse of the day -->
            <div class="col-md-3 col-sm-4" id="bible-verse">
                <h3>Bible Verse of the Day</h3>
                <div class="bible-quote">
                    <?php foreach ($getVerse as $row): ?>
                    <h3><?= $row['bible_content']; ?></h3>
                    <u><?= $row['bible_verse']; ?></u>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="container-fluid container-box" id="footer">
        <div class="row">
            <!-- Copyright-->
            <div class="col-md-offset-1 col-md-6 col-sm-6">
                <p><?= copyYear("2018"); ?> &copy; Copyright Restoration Chapel CSMC. All Rights Reserved</p>
            </div>
            <!-- Social Media -->
            <div class="col-md-4 col-sm-4" id="footer-socials">
                <ul class="nav nav-pills">
                    <li class="fb"><a title="Like Our Page" href="https://www.facebook.com/restorationchapel.ibadan"><i class="fa fa-2x fa-facebook"></i></a></li>
                    <li class="tw"><a title="Follow Us" href="https://twitter.com/restorationciti"><i class="fa fa-2x fa-twitter"></i></a></li>
                    <li class="in"><a title="Follow Us" href="https://www.instagram.com/restorationpropheticministrie1/"><i class="fa fa-2x fa-instagram"></i></a></li>
                    <li class="yt"><a title="Subscribe Our Channel" href="https://www.youtube.com/channel/UCVYWYM-_T-DIqCaJCERmrrg"><i class="fa fa-2x fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <p id="gototop"><a href="#" data-scroll data-options='{ "easing": "easeOutCubic" }'><i class="fa fa-2x fa-chevron-up"></i></a></p>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?= resource_asset('js/app.js'); ?>"></script>
    <script type="text/javascript" src="<?= resource_asset('js/axios.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= resource_asset('js/form.js'); ?>"></script>
    <script type="text/javascript" src="<?= resource_asset('js/jquery.magnific-popup.js'); ?>"></script>
    <script type="text/javascript" src="<?= resource_asset('js/init.js'); ?>"></script>
    <script type="text/javascript" src="<?= resource_asset('js/smooth-scroll.js'); ?>"></script>
    <script>
        smoothScroll.init();
    </script>
</body>
</html>