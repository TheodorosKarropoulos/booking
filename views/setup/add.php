<link rel="stylesheet" href="<?php echo BASE_URL . BOOTSTRAP_PATH; ?>datetimepicker/css/bootstrap-datetimepicker.min.css">
<script src="<?php echo BASE_URL . BOOTSTRAP_PATH; ?>datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#from_hour, #to_hour').datetimepicker({
            format: 'hh:ii',
            autoclose: true
        });
    });
</script>
<div class="container ws-container">
    <form role="form" class="form-horizontal" action="<?php echo BASE_URL . SETUP_URL; ?>create" method="post">
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="Setup Name" name="setup_name" required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type='text' class="form-control" id='from_hour' placeholder="Working hour from" name="from_hour" required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="Working hour to" name="to_hour" id="to_hour" required />
            </div>
        </div>

        <button type="submit" class="btn btn-primary" id="submit">Insert</button>
        <a href="<?php echo BASE_URL . CLIENT_URL; ?>" class="btn btn-warning" id="cancel">Cancel</a>
    </form>
</div>