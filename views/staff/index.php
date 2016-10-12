<style type="text/css">
    #staff
    {
        background: #367fa9;
    }
</style>
<script src="<?php echo BASE_URL . JS_PATH; ?>delete.js"></script>
<div class="container ws-container">
    <a href="<?php echo BASE_URL . STAFF_URL; ?>add" class="btn btn-success">Add Staff</a>
    <hr/>
    <div class="table-responsive">
        <table class="table table-hover ws-table">
            <thead>
                <tr>
                    <th>Staff Name</th>
                    <th>Staff Email</th>
                    <th>Staff Phone No</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <?php

                foreach($this->staffList as $key => $value)
                {
                    echo '<tr>';
                    echo '<td>' . $value['staff_name'] . '</td>';
                    echo '<td>' . $value['staff_email'] . '</td>';
                    echo '<td>' . $value['staff_phone'] . '</td>';
                    echo '<td><a class="btn btn-info ws-table-btn" href="' . BASE_URL . STAFF_URL .'edit/' . $value['staff_id'] .
                        '">Edit</a>
                    <a id="delete" class="btn btn-danger ws-table-btn" href="' . BASE_URL . STAFF_URL . 'delete/ ' . $value['staff_id'] .
                        '">Delete</a>';
                    echo '</tr>';
                }
            ?>

        </table>
    </div>

</div><!-- container -->