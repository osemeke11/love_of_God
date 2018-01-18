<?php include resource_partial('head'); ?>
<?php include resource_partial('header'); ?>
<?php
$db = new \Church\Data\DB();

// Get Pagination Ads
$page = isset($_GET['p']) ? (int)$_GET['p'] : 1;
$next = $page + 1;
$previous = $page - 1;
$perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 30;

//Positioning
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
$getMessage = $db->getPaginatedArticles("messages", "date DESC",$start,$perPage);
$total = count($getMessage);
$pages = ceil($total / $perPage);
?>

    <!-- Banner -->
    <div class="container-fluid" id="banner">
        <div class="banner-box banner-pages">
            <img src="<?= resource_asset('images/bg.jpg'); ?>" class="img-responsive"/>
            <div class="banner-caption">
                <h1>Our Messages</h1>
            </div>
            <div class="overlay"></div>
        </div>
    </div><!-- /Banner -->

    <div class="container-fluid container-box" id="message">
        <div class="row">
           <div class="col-md-10 col-sm-10 col-md-offset-1 col-md-offset-1 col-xs-10 col-xs-offset-1">
               <div class="row">
                   <?php foreach ($getMessage as $row): ?>
                   <div class="col-md-4 col-sm-6 col-xs-12">
                       <div class="icon-box" id="msg-box">
                           <a href="<?= url('messages/read/'. $row['url']); ?>">
                               <p class="msg-title"><?= ucwords($row['title']); ?></p>
                               <p class="msg-text"><?= $row['msg_body']; ?></p>
                               <p class="msg-time"><i class="fa fa-clock-o"></i> <?= timeago($row['date']); ?></p>
                           </a>
                       </div>
                   </div>
                   <?php endforeach; ?>
               </div>
               <nav>
                   <ul class="pager">
                       <li <?php if($page == 1) echo 'class="hide"'; ?>><a href="<?= url('messages?p='.$previous); ?>"><i class="fa fa-chevron-left"></i> Previous</a></li>
                       <li <?php if($page == $pages) echo 'class="hide"'; ?>><a href="<?= url('messages?p='.$next); ?>">Next <i class="fa fa-chevron-right"></i></a></li>
                   </ul>
               </nav>
           </div>
        </div>
    </div>


<?php include resource_partial('footer'); ?>
