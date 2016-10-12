<style type="text/css">
    #clients
    {
        background: #367fa9;
    }
</style>
<link rel="stylesheet" href="<?php echo BASE_URL . BOOTSTRAP_PATH; ?>datetimepicker/css/bootstrap-datetimepicker.min.css">
<script src="<?php echo BASE_URL . BOOTSTRAP_PATH; ?>datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo BASE_URL . JS_PATH; ?>client.js"></script>
<div class="container ws-container">
    <form role="form" class="form-horizontal" action="<?php echo BASE_URL . CLIENT_URL; ?>editSave/<?php echo $this->client[0]['client_id']; ?>" method="post">
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="Client Name" name="client_name" value="<?php echo $this->client[0]['client_name']; ?>" required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="email" class="form-control" placeholder="Client Email" name="client_email" value="<?php echo $this->client[0]['client_email']; ?>" required/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="Client Phone" name="client_phone" value="<?php echo $this->client[0]['client_phone']; ?>" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="Client Address" name="client_address" value="<?php echo $this->client[0]['client_address']; ?>" required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input id="birth-date" type="text" class="form-control" placeholder="Client Birth Date" name="client_birth_date" data-date-format="yyyy-mm-dd" value="<?php echo $this->client[0]['client_birth_date']; ?>" required />
            </div>
        </div>

        <button type="submit" class="btn btn-primary" id="submit">Save</button>
        <a href="<?php echo BASE_URL . CLIENT_URL; ?>" class="btn btn-warning" id="cancel">Cancel</a>
    </form>
</div>