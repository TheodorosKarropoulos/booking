<style type="text/css">
    #calendar
    {
        background: #367fa9;
    }
</style>
<link rel="stylesheet" href="<?php echo BASE_URL . BOOTSTRAP_PATH; ?>datetimepicker/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="<?php echo BASE_URL . JS_PATH; ?>jquery-ui/jquery-ui.min.css" />
<script src="<?php echo BASE_URL . JS_PATH; ?>jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo BASE_URL . BOOTSTRAP_PATH; ?>datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#app_hour').datetimepicker({
            format: 'hh:ii',
            autoclose: true,
            maxView: 'day'
        });
        $('#app_date').datetimepicker({
            format: '<?php echo DATE_FORMAT; ?>',
            autoclose: true,
            minView: 'month'
        });

     });
</script>
<div class="container ws-container">
    <form role="form" class="form-horizontal" action="<?php echo BASE_URL . CALENDAR_PATH; ?>create" method="post">

        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <select name="client" class="form-control" required>
                    <option value="0">Select Client</option>
                    <?php

                    foreach($this->customerForAppointmentList as $key => $value)
                    {
                        echo "<option value='" . $value['client_id'] ."'>" . $value['client_name'] ."</option>";
                    }

                    ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <select name="service" class="form-control" required>
                    <option value="0">Select Service</option>
                    <?php

                    foreach($this->serviceForAppointmentList as $key => $value)
                    {
                        echo "<option value='" . $value['service_id'] ."'>" . $value['service_name'] ."</option>";
                    }

                    ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <select name="staff" class="form-control" required>
                    <option value="0">Select Staff</option>
                    <?php

                    foreach($this->staffForAppointmentList as $key => $value)
                    {
                        echo "<option value='" . $value['staff_id'] ."'>" . $value['staff_name'] ."</option>";
                    }

                    ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input id="app_date" type="text" class="form-control" placeholder="Appointment Date" name="app_date" data-date-format="<?php echo DATE_FORMAT; ?>" required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <input type="text" class="form-control" placeholder="Appointment Time" name="app_hour" id="app_hour" required />
            </div>
        </div>


        <button type="submit" class="btn btn-primary" id="submit">Insert</button>
        <a href="<?php echo BASE_URL . CALENDAR_PATH; ?>" class="btn btn-warning" id="cancel">Cancel</a>
    </form>
</div>