<h1>Messages</h1>
<a href="<?= url('admin/messages/add'); ?>" class="btn btn-success">Add New Message</a>
<div class="dataTables_wrapper panel" style="padding: 30px;">
    <div id="response" class="alert alert-danger"></div>
    <table id="example" class="display table table-striped" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Messages</th>
                <th>Date</th>
                <th>Author</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Title</th>
                <th>Messages</th>
                <th>Date</th>
                <th>Author</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </tfoot>
        <tbody>
        <?php foreach ($getMessage as $row): ?>
            <tr>
                <td><?= ucwords($row['title']); ?></td>
                <td><?= ucwords($row['msg_body']); ?></td>
                <td><?= format_date($row['date']); ?></td>
                <td><?= ucwords($row['author']); ?></td>
                <td>
                    <a href="<?= url('admin/messages/edit?id='.$row['id']); ?>" class="btn btn-primary"><i class="fa fa-pencil fa-2x"></i></a>
                </td>
                <td>
                    <form action="<?= url('form'); ?>" method="post" id="form">
                        <input type="hidden" value="<?= $row['id']; ?>" name="delete_message">
                        <input type="hidden" value="admin/messages" id="url">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-2x"></i></button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>