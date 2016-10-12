<style type="text/css">
    #staff
    {
        background: #367fa9;
    }
</style>
<div class="container ws-container">
    <form role="form" class="form-horizontal" action="<?php echo BASE_URL . STAFF_URL; ?>create" method="post">
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="Staff Name" name="staffname" required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="email" class="form-control" placeholder="Staff Email" name="email" required/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="Staff Phone" name="phone" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="password" class="form-control" placeholder="Password" name="password" required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="is_active" checked> Active
                    </label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" id="submit">Insert</button>
        <a href="<?php echo BASE_URL . STAFF_URL; ?>" class="btn btn-warning" id="cancel">Cancel</a>
    </form>
</div>