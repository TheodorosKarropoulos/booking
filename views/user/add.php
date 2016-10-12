<div class="container ws-container">
    <form role="form" class="form-horizontal" action="<?php echo BASE_URL . USER_URL; ?>create" method="post">
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="Login Name" name="login" required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="User Name" name="username"  required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="password" class="form-control" placeholder="User Password" name="password"  required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="User Position" name="user_position" required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <select name="role" class="form-control">
                    <option value="default">Default</option>
                    <option value="admin">Admin</option>
                    <option value="owner">Owner</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="is_active" value="1" checked> Active
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="submit">Insert</button>
        <a href="<?php echo BASE_URL . USER_URL; ?>" class="btn btn-warning" id="cancel">Cancel</a>
    </form>
</div>