<form class="form-signin" action="<?= url('forgot-password'); ?>" method="post">

    <h2 class="form-signin-heading">Enter Your Registered Email</h2>

    <div class="<?= empty($errmsg) ? '' : 'alert alert-danger' ?> "><?= $errmsg ?></div>

    <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
    </div>

    <div class="form-group">
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="reset" value="Reset Password" />
        <input type="hidden" id="url" value="admin">
    </div>
</form>