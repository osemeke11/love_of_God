<?php
require resource_admin('inc/head');
$db = new \Church\Data\DB;
$getMessage = $db->getAllDataOrder("messages", "date DESC");
$page = (strlen(Church\Router::$value) > 0) ? Church\Router::$value : "index";
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$messageReview = $db->getAllDataWhere("messages", "id = '$id'");

if(file_exists(resource_admin('inc/messages/'.$page))){
    include resource_admin('inc/messages/'.$page);
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
