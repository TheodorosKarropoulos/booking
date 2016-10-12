<style type="text/css">
    #services
    {
        background: #367fa9;
    }
</style>
<script src="<?php echo BASE_URL . JS_PATH; ?>delete.js"></script>
<div class="container ws-container">
    <a href="<?php echo BASE_URL . SERVICE_URL; ?>add" class="btn btn-success">Add Service</a>
    <hr/>
    <div class="table-responsive">
        <table class="table table-hover ws-table">
            <thead>
            <tr>
                <th>Service Name</th>
                <th>Actions</th>
            </tr>
            </thead>

            <?php

            foreach($this->serviceList as $key => $value)
            {
                echo '<tr>';
                echo '<td>' . $value['service_name'] . '</td>';
                echo '<td><a class="btn btn-info ws-table-btn" href="' . BASE_URL . SERVICE_URL .'edit/' . $value['service_id'] .
                    '">Edit</a>
                <a id="delete" class="btn btn-danger ws-table-btn" href="' . BASE_URL . SERVICE_URL . 'delete/ ' . $value['service_id'] .
                    '">Delete</a>';
                echo '</tr>';
            }
            ?>

        </table>
    </div>

</div><!-- container -->