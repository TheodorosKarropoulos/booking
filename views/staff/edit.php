<style type="text/css">
    #staff
    {
        background: #367fa9;
    }
</style>
<div class="container ws-container">
    <form role="form" class="form-horizontal" action="<?php echo BASE_URL . STAFF_URL; ?>editSave/<?php echo $this->staff[0]['staff_id']; ?>" method="post">
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="Staff Name" name="staffname" value="<?php echo $this->staff[0]['staff_name']; ?>" required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="email" class="form-control" placeholder="Staff Email" name="email" value="<?php echo $this->staff[0]['staff_email']; ?>" required/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="Staff Phone" name="phone" value="<?php echo $this->staff[0]['staff_phone']; ?>" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="is_active" value="<?php echo $this->staff[0]['is_active']; ?>"> Active
                    </label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" id="submit">Save</button>
        <a href="<?php echo BASE_URL . STAFF_URL; ?>" class="btn btn-warning" id="cancel">Cancel</a>
    </form>
</div>