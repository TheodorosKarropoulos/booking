<style type="text/css">
    #calendar
    {
        background: #367fa9;
    }
    #client_info > a > ul > li
    {
        list-style: none;
        color: red;
    }
</style>
<script src="<?php echo BASE_URL . BOOTSTRAP_PATH; ?>js/bootstrap-tooltip.js"></script>
<script src="<?php echo BASE_URL . JS_PATH; ?>delete.js"></script>
<script>
    $(function(){
        $('[data-toggle="popover"]').popover({
            'placement': 'bottom',
            'html': true,
            'trigger': 'click',
            'title': 'Client\'s more info'
        });
    });
</script>
<div class="container-fluid ws-container">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <select name="choose-view" class="form-control">
                <option value="list">List View</option>
                <option value="calendar">Calendar View</option>
            </select>
        </div>
    </div>
    <hr/>
    <div class="row ws-container">
        <div class="col-lg-12">
            <a href="<?php echo BASE_URL . CALENDAR_PATH; ?>add" class="btn btn-success">Add Appointment</a>
            <div class="table-responsive">
                <table class="table table-hover ws-table">
                    <thead>
                    <tr>
                        <th>Appointment Date</th>
                        <th>Appointment Hour</th>
                        <th>Client Name</th>
                        <th>Client Phone No</th>
                        <th>Service Name</th>
                        <th>Staff Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <?php

                    foreach($this->appointmentList as $key => $value)
                    {
                        echo '<tr>';
                        echo '<td>' . $value['appointment_date'] . '</td>';
                        echo '<td>' . $value['appointment_hour'] . '</td>';
                        echo '<td id="client_info"><a href="#" data-container="body" data-toggle="popover" data-placement="bottom" data-content="
                              <p>Client\'s Email: ' . $value['client_email'] . '</p><p>Client\'s Address: ' . $value['client_address'] . '</p>">' . $value['client_name'] . '</a></td>';
                        echo '<td>' . $value['client_phone'] . '</td>';
                        echo '<td>' . $value['service_name'] . '</td>';
                        echo '<td>' . $value['staff_name'] . '</td>';
                        echo '<td><a class="btn btn-info ws-table-btn" href="' . BASE_URL . CALENDAR_PATH .'edit/' . $value['app_id'] .
                            '">Edit</a>
                        <a id="delete" class="btn btn-danger ws-table-btn" href="' . BASE_URL . CALENDAR_PATH . 'delete/ ' . $value['app_id'] .
                            '">Delete</a>';
                        echo '</tr>';
                    }
                    ?>

                </table>
            </div>
        </div>
    </div>
</div>