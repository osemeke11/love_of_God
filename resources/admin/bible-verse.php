<?php
require resource_admin('inc/head');
$db = new \Church\Data\DB;
$getBible = $db->getAllDataOrder("bible_verse", "bible_verse.day DESC");
$page = (strlen(Church\Router::$value) > 0) ? Church\Router::$value : "index";
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$bibleReview = $db->getAllDataWhere("bible_verse", "id = '$id'");

if(file_exists(resource_admin('inc/bible/'.$page))){
    include resource_admin('inc/bible/'.$page);
}
else {
    header("Location:" . url('404'));
}

?>
<?php require resource_admin('inc/footer'); ?>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
