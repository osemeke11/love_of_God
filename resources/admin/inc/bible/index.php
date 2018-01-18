<h1>Bible Verse of the Day</h1>
<a href="<?= url('admin/bible-verse/add'); ?>" class="btn btn-success">Add New Bible Verse</a>
<div class="dataTables_wrapper panel" style="padding: 30px;">
    <div id="response" class="alert alert-danger"></div>
    <table id="example" class="display table table-striped" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Bible Verses</th>
            <th>Bible Contents</th>
            <th>Date</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Bible Verses</th>
            <th>Bible Contents</th>
            <th>Date</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($getBible as $row): ?>
            <tr>
                <td><?= ucfirst($row['bible_verse']); ?></td>
                <td><?= ucfirst($row['bible_content']); ?></td>
                <td><?= format_date($row['day']); ?></td>
                <td>
                    <a href="<?= url('admin/bible-verse/edit?id='.$row['id']); ?>" class="btn btn-primary"><i class="fa fa-pencil fa-2x"></i></a>
                </td>
                <td>
                    <form action="<?= url('form'); ?>" method="post" id="form">
                        <input type="hidden" value="<?= $row['id']; ?>" name="delete_bible">
                        <input type="hidden" value="admin/bible-verse" id="url">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-2x"></i></button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>