<?php
if(strlen(\Church\Router::$value) > 0) {
    $page = \Church\Router::$value;
    $db = new \Church\Data\DB();
    $readMsg = $db->getAllDataWhere("messages", "url = '$page'")[0];

    $getMsg = $db->getAllDataOrder("messages", "date DESC LIMIT 5");
}
else{
    header("Location: " . url('404'));
}
include resource_partial('head');
include resource_partial('header');
?>

<!-- Banner -->
<div class="container-fluid" id="banner">
    <div class="banner-box banner-pages">
        <img src="<?= resource_asset('images/bg.jpg'); ?>" class="img-responsive"/>
        <div class="banner-caption">
            <h1><?= ucwords($readMsg['title']); ?></h1>
        </div>
        <div class="overlay"></div>
    </div>
</div><!-- /Banner -->

<div class="container-fluid container-box" id="message">
    <div class="row">
        <div class="col-md-10 col-sm-10 col-md-offset-1 col-md-offset-1 col-xs-10 col-xs-offset-1">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="blog-post">
                        <span class="blog-post-meta"><i class="fa fa-clock-o"></i><?= timeago($readMsg['date']); ?></span> |
                        <span class="blog-post-meta"><i class="fa fa-user"></i> <?= $readMsg['author'] ?></span>

                        <p class="msg-body">
                            <?= $readMsg['msg_body']; ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="sidebar-module">
                        <h4>Latest Messages</h4>
                        <ol class="list-unstyled">
                            <?php foreach($getMsg as $row): ?>
                            <li><a href="<?= url('messages/read/'.$row['url']); ?>"><?= $row['title']; ?></a></li>
                            <?php endforeach; ?>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<?php include resource_partial('footer'); ?>
