<form class="form-signin" action="<?= url('sign-in'); ?>" method="post">

    <h2 class="form-signin-heading">Please sign in</h2>
    <div class="<?= empty($errmsg) ? '' : 'alert alert-danger' ?> "><?= $errmsg ?></div>
    <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
    </div>
    <div class="form-group">
        <a class="pull-right" style="margin-bottom: 20px;" href="<?= url('forgot-password'); ?>">Forgot Password?</a>
    </div>
    <div class="form-group">
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Sign in" />
        <input type="hidden" id="url" value="admin">
    </div>
</form>