<form class="form-signin" action="<?= url('reset') . '?token=' .$token; ?>" method="post" id="form">
    <div id="response" class="alert alert-danger"></div>
    <h2 class="form-signin-heading">Please Reset Password</h2>
    <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
    </div>

    <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password_confirm" placeholder="Password" required>
    </div>
    <div class="form-group">
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Sign in" />
        <input type="hidden" id="url" value="admin">
    </div>
</form>