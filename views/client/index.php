<style type="text/css">
    #clients
    {
        background: #367fa9;
    }
</style>
<script src="<?php echo BASE_URL . JS_PATH; ?>delete.js"></script>
<div class="container ws-container">
    <a href="<?php echo BASE_URL . CLIENT_URL; ?>add" class="btn btn-success">Add Client</a>
    <hr/>
    <div class="table-responsive">
        <table class="table table-hover ws-table">
            <thead>
            <tr>
                <th>Client Name</th>
                <th>Client Email</th>
                <th>Client Phone No</th>
                <th>Client Address</th>
                <th>Client Birth Date</th>
                <th>Actions</th>
            </tr>
            </thead>

            <?php

            foreach($this->clientList as $key => $value)
            {
                echo '<tr>';
                echo '<td>' . $value['client_name'] . '</td>';
                echo '<td>' . $value['client_email'] . '</td>';
                echo '<td>' . $value['client_phone'] . '</td>';
                echo '<td>' . $value['client_address'] . '</td>';
                echo '<td>' . $value['client_birth_date'] . '</td>';
                echo '<td><a class="btn btn-info ws-table-btn" href="' . BASE_URL . CLIENT_URL .'edit/' . $value['client_id'] .
                    '">Edit</a>
                <a id="delete" class="btn btn-danger ws-table-btn" href="' . BASE_URL . CLIENT_URL . 'delete/ ' . $value['client_id'] .
                    '">Delete</a>';
                echo '</tr>';
            }
            ?>

        </table>
    </div>

</div><!-- container -->