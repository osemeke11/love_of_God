<?php
require resource_admin('inc/head');
$db = new \Church\Data\DB;
$getBible = $db->getAllDataOrder("bible_verse", "`bible_verse`.`day` DESC");
?>
    <h1>Bible Verse of the Day</h1>
    <div class="dataTables_wrapper panel" style="padding: 30px;">
        <table id="example" class="display table table-striped" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Bible Verses</th>
                <th>Bible Contents</th>
                <th>Date</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Bible Verses</th>
                <th>Bible Contents</th>
                <th>Date</th>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach ($getBible as $row): ?>
            <tr>
                <td><?= ucfirst($row['bible_verse']); ?></td>
                <td><?= ucfirst($row['bible_content']); ?></td>
                <td><?= format_date($row['day']); ?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="form-box">
        <div id="response" class="alert alert-danger"></div>
        <form method="post" action="<?= url('form'); ?>" id="form">
            <h3>Add Bible Verse</h3>
            <div class="form-group">
                <input type="text" class="form-control empty" name="verse" id="name" placeholder="Enter the Bible verse: Matthew 1:1" />
                <span class="input-response"></span>
            </div>
            <div class="form-group">
                <input type="date" class="form-control" name="day" />
            </div>
            <div class="form-group">
                <textarea id="message" class="message-box empty" rows="8" name="bible-content"></textarea>
                <span class="input-response">This field is required!</span>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" name="add_bible" value="Edit" type="submit" />
            </div>
        </form>
    </div>
<?php require resource_admin('inc/footer'); ?>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
