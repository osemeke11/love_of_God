<?php require resource_admin('inc/head'); ?>
    <h1>Bible Verse of the Day</h1>
    <div class="dataTables_wrapper">
        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
            </tfoot>
            <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="form-box">
        <div id="response" class="alert alert-danger"></div>
        <form method="post" action="<?= url('form'); ?>" id="form">
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
