<div class="container ws-container">
    <form role="form" class="form-horizontal" action="<?php echo BASE_URL . USER_URL; ?>editSave/<?php echo $this->user[0]['id']; ?>" method="post">
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="Login Name" name="login" value="<?php echo $this->user[0]['login']; ?>" required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="User Name" name="username" value="<?php echo $this->user[0]['username']; ?>" required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="User Position" name="user_position" value="<?php echo $this->user[0]['user_position']; ?>" required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <select name="role" class="form-control">
                    <option value="default" <?php if($this->user[0]['role'] == 'default') echo 'selected'; ?>>Default</option>
                    <option value="admin" <?php if($this->user[0]['role'] == 'admin') echo 'selected'; ?>>Admin</option>
                    <option value="owner" <?php if($this->user[0]['role'] == 'owner') echo 'selected'; ?>>Owner</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="is_active" value="<?php echo $this->user[0]['is_active']; ?>"> Active
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="submit">Save</button>
        <a href="<?php echo BASE_URL . USER_URL; ?>" class="btn btn-warning" id="cancel">Cancel</a>
    </form>
</div>