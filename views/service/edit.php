<style type="text/css">
    #services
    {
        background: #367fa9;
    }
</style>
<div class="container ws-container">
    <form role="form" class="form-horizontal" action="<?php echo BASE_URL . SERVICE_URL; ?>editSave/<?php echo $this->service[0]['service_id']; ?>" method="post">
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="Service Name" name="service_name" value="<?php echo $this->service[0]['service_name']; ?>" required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="is_active" value="<?php echo $this->service[0]['is_active']; ?>"> Active
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="submit">Save</button>
        <a href="<?php echo BASE_URL . SERVICE_URL; ?>" class="btn btn-warning" id="cancel">Cancel</a>
    </form>
</div>