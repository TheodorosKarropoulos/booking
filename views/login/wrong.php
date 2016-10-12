<div class="container" id="login-form">
    <h3 id="login-text">Login</h3>
    <div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Invalid username or password.
    </div>
    <form role="form" class="form-horizontal" action="<?php echo BASE_URL . LOGIN_PATH; ?>run" method="post">
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="Username" name="username" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="password" class="form-control" placeholder="Password" name="password" />
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
    </form>
</div>